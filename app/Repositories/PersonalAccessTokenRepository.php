<?php


namespace App\Repositories;


use App\Models\Sanctum\PersonalAccessToken;

class PersonalAccessTokenRepository extends BaseRepository
{

    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
    ];

    public function __construct(PersonalAccessToken $model)
    {
        $this->model = $model;
    }

}
