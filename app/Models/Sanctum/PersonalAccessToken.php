<?php


namespace App\Models\Sanctum;

use App\Traits\Uuids;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;


class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use Uuids;
    public $incrementing = true;

    protected $primaryKey = "id";
    protected $keyType = "string";
}
