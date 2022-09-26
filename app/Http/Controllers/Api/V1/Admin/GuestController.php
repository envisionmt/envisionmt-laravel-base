<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;

class GuestController extends ApiController
{
    public function __construct()
    {
    }

    public function index()
    {
        return $this->successResponse("data");
    }
}
