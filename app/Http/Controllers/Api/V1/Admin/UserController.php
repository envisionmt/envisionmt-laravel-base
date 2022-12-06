<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $list = $this->userRepository->searchFromRequest($request);
        return $this->successResponse($list);
    }
}
