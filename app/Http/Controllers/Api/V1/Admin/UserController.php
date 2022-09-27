<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends ApiController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {

        try {
            $list = $this->userRepository->searchFromRequest($request);
            return $this->successResponse($list);
        } catch (Exception $exception) {
            Log::error($exception);
            return $this->errorResponse($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
