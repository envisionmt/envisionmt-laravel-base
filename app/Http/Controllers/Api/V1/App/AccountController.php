<?php


namespace App\Http\Controllers\Api\V1\App;


use App\Http\Controllers\Api\ApiController;

class AccountController extends ApiController
{
    public function __construct()
    {
    }

    public function index()
    {
        return $this->successResponse("data");
    }
}
