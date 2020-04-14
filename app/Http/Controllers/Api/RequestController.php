<?php

namespace App\Http\Controllers\Api;

use App\Bot\StartCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Http\Resources\RequestResource;
use Illuminate\Support\Facades\Auth;
use \App\Models\Request as RequestModel;


class RequestController extends Controller
{


    public function index()
    {
        return RequestModel::orderBy('id', 'desc')->get();
    }


    public function store(RequestRequest $request)
    {
        $new = RequestModel::create($request->all() + ['user_id' => Auth::id()]);
        return new RequestResource($new);
    }


}
