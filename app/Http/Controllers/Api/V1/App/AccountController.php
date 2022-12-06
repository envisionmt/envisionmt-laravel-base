<?php


namespace App\Http\Controllers\Api\V1\App;


use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;

class AccountController extends ApiController
{
    public function __construct()
    {
    }

    public function profile(Request $request)
    {
        return $this->successResponse($request->user());
    }
}
