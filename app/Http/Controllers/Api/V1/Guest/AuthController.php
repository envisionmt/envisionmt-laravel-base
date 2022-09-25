<?php
namespace App\Http\Controllers\Api\V1\Guest;


use App\Http\Controllers\Api\ApiController;

class AuthController extends ApiController
{
    public function __construct()
    {

    }

    public function login()
    {
        return $this->successResponse("data");
    }
}
