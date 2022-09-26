<?php
namespace App\Http\Controllers\Api\V1\Guest;


use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\Auth\LoginRequest;

class AuthController extends ApiController
{
    public function __construct()
    {

    }

    public function login(LoginRequest $request)
    {
        return $this->successResponse("data");
    }
}
