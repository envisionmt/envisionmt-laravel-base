<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Uuids;

    const ADMIN_ROLE = 1;
    const USER_ROLE = 2;

    const ANDROID_DEVICE_TYPE = 1;
    const IOS_DEVICE_TYPE = 2;
    const WEB_DEVICE_TYPE = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id');
    }

    /**
     * Role name
     *
     * @var string[]
     */
    public static $roleNames = [
        self::ADMIN_ROLE => 'Admin',
        self::USER_ROLE => 'User',
    ];

    /**
     * Get role_name attribute
     *
     * @return string|null
     */
    public function getRoleNameAttribute()
    {
        if (!isset($this->role)) {
            return null;
        }

        return self::$roleNames[$this->role];
    }

    public function createToken(string $name, int $deviceType = null, string $deviceId = null, array $abilities = ['*'])
    {
        $token = $this->tokens()->create([
            'name'      => $name,
            'token'     => hash('sha256', $plainTextToken = Str::random(40)),
            'abilities' => $abilities,
            'device_id'   => $deviceId,
            'device_type'   => $deviceType,
        ]);

        return new NewAccessToken($token, $token->getKey().'|'.$plainTextToken);
    }


}
