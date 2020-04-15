<?php

namespace App\Sh4;

use App\Facades\ResultData as Result;
use App\Http\Requests\ActiveRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\Alert\ErrorResource;
use App\Http\Resources\Alert\MessageResource;
use App\Http\Resources\LoginResource;
use App\Http\Resources\TokenResource;
use App\Http\Resources\UserResource;
use App\Mail\RegisterCode;
use App\Models\Role;
use App\Models\ConfirmationLog;
use App\Models\SmsLog as SMSLog;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ipecompany\Smsirlaravel\Smsirlaravel;
use Validator;
use DB;


trait Sh4Auth
{

    public function register(RegisterRequest $request)
    {
        $fields = $this->registerFields($request);
        $confirmation = ConfirmationLog::setLog($fields['mobile']);
        $user = User::create($fields);
        $this->sendConfirmationCode();
        return $this->setResultAfterRegister($user, $confirmation->code);
    }


    public function login()
    {
        if (Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')]))
            $user = Auth::user();

        return $this->handleLogin($user);
    }

    private function registerFields($request): array
    {
        $registerFields = [
            'name',
            'mobile',
            'password',
        ];

        return $request->only($registerFields) + ['status' => 0];
    }


    public function activeWithCode(ActiveRequest $request)
    {
        $code = $request->get('code');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
        $unique = $request->get('mobile') ?? $request->get('email');

        $user = new User();
        if ($mobile)
            $user = $user->where('mobile', $mobile);
        elseif ($email)
            $user = $user->where('email', $email);

        $log = ConfirmationLog::validFromLog($code, $unique);

        if ($log) {
            $user->update(['status' => 1]);
            return $this->setResultAfterLogin($user->first());

        } else {
            $errors = ['wrong_code' => ['کد اشتباه است']];
            return $this->showError($errors);
        }

    }


    private function setResultAfterLogin($attempt)
    {
        Auth::login($attempt);

        $result = new \stdClass();

        $tokenResult = Auth::user()->createToken('Personal Access Token');

        $tokenResult->token->save();

        $result->token = [
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )
        ];
        $result->user = Auth::user();
        return new LoginResource($result);
    }


    private function setResultAfterRegister($user, $code)
    {
        $message = "It's requires code to be verified";
        $data = ['mobile' => $user->mobile];

        if(config('app.debug') === true)
            $data['code'] = $code;

        return (new MessageResource($data, $message, 201));
    }


    private function handleLogin($user)
    {
        $errors = ['unauthorized' => ['موبایل یا پسورد اشتباه است']];

        if ($user)
            switch ($user->status) {
                case 0:
                    $errors = ['inactive' => ["کاربر کد خود را تایید نکرده است"]];
                    break;
                case 1:
                    return $this->setResultAfterLogin($user);
                case -1:
                    $errors = ['disable' => ["کاربر توسط ادمین غیر فعال شده است"]];
                    break;
            }

        return $this->showError($errors);

    }


    private function showError($errors)
    {
        return (new ErrorResource($errors, 401));
    }


    private function sendConfirmationCode()
    {
        #Mail::to($fields['email'])->send(new RegisterCode($code)); #@todo This should be uncomment on production
    }


}
