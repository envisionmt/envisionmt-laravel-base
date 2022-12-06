<?php


namespace App\Http\Controllers\Api\V1\App;


use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\App\Guest\LoginRequest;
use App\Models\User;
use App\Repositories\PersonalAccessTokenRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GuestController extends ApiController
{
    private $userRepository;
    private $personalAccessTokenRepository;
    public function __construct(UserRepository $userRepository, PersonalAccessTokenRepository $personalAccessTokenRepository)
    {
        $this->userRepository = $userRepository;
        $this->personalAccessTokenRepository = $personalAccessTokenRepository;
    }

    public function login(LoginRequest $request)
    {
        $attributes = $request->only(array_keys($request->rules()));
        if (!Auth::attempt($attributes)) {
            return $this->errorResponse('Invalid login details', Response::HTTP_UNAUTHORIZED);
        }
        $user = $this->userRepository->where('email', $attributes['email'])->where('role', User::ADMIN_ROLE)->first();
        $this->personalAccessTokenRepository->deleteByColumn('device_id', $attributes['device_id']);
        $token = $user->createToken('auth_token', $attributes['device_type'], $attributes['device_id'], $attributes['device_token'])->plainTextToken;

        return $this->successResponse([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
