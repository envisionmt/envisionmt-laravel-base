<?php


namespace App\Http\Controllers\Api\V1\App;


use App\Http\Controllers\Api\ApiController;

class AccountController extends ApiController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    public function index()
    {
        return $this->successResponse("data");
    }
}
