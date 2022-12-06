<?php


namespace App\Http\Controllers\Api\V1\Admin;


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

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->successResponse(true);
    }
}
