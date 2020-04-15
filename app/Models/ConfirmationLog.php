<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ConfirmationLog extends Model
{

    protected $table = 'confirmation_logs';

    protected $fillable = ['unique_amount', 'ip', 'code', 'device_id'];

    private static $randomCode = [
        'start' => 1000,
        'end' => 9999
    ];


    public static function validFromToken($code, $uniqueAmount)
    {
        return self::select('*')
            ->where('created_at', '>', Carbon::parse('-15 minutes'))
            ->where('code', $code)
            ->where('unique_amount', $uniqueAmount)
            ->firstOrFail();
    }

    public static function validFromLog($code, $uniqueAmount = null)
    {
        $valid = self::select('*');
        //->where('created_at', '>', Carbon::parse('-15 minutes')) #todo uncomment
        if ($code)
            $valid = $valid->where('code', $code);

        if ($uniqueAmount)
            $valid = $valid->where('unique_amount', $uniqueAmount);

        $valid = $valid->first();

        if ($valid)
            return true;
        else
            return false;
    }


    public static function setLog($uniqueAmount, $device_id = null)
    {
        return self::create([
            'unique_amount' => $uniqueAmount,
            'ip' => \Request::ip(),
            'code' => rand(self::$randomCode['start'], self::$randomCode['end']),
            'device_id' => $device_id,
            'created_at' => Carbon::now(),
            'updated_At' => Carbon::now(),
        ]);
    }


}
