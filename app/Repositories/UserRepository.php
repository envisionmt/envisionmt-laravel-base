<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
        'id' => ['column' => 'users.id', 'operator' => '='],
        'name' => ['column' => 'users.name', 'operator' => 'like'],
        'email' => ['column' => 'users.email', 'operator' => 'like'],
    ];


    public function __construct(User $model)
    {
        $this->model = $model;
    }

}
