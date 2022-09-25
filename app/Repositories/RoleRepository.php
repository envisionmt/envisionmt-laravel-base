<?php


namespace App\Repositories;


use App\Models\Role;

class RoleRepository extends BaseRepository
{

    /**
     * Attribute searchable
     *
     * @var array
     */
    protected $fieldSearchable = [
        'id' => ['column' => 'roles.id', 'operator' => '='],
        'name' => ['column' => 'roles.name', 'operator' => 'like'],
    ];

    public function __construct(Role $model)
    {
        $this->model = $model;
    }

}
