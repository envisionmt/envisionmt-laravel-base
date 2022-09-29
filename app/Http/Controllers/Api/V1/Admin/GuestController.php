<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\Admin\Guest\LoginRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GuestController extends ApiController
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(LoginRequest $request)
    {
        $attributes = $request->only(['email', 'password']);
        if (!Auth::attempt($attributes)) {
            return $this->errorResponse('Invalid login details', Response::HTTP_UNAUTHORIZED);
        }

        $user = $this->userRepository->where('email', $attributes['email'])->where('role', User::ADMIN_ROLE)->first();
        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->successResponse([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
