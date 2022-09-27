<?php


namespace App\Models\Sanctum;

use App\Traits\Uuids;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;


class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use Uuids;
    public $incrementing = true;
    const ANDROID_DEVICE_TYPE = 1;
    const IOS_DEVICE_TYPE = 2;
    const WEB_DEVICE_TYPE = 3;

    protected $primaryKey = "id";
    protected $keyType = "string";
    protected $fillable = [
        'name',
        'token',
        'abilities',
        'device_id',
        'device_type',
    ];
}
