<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Repositories\CategoryRepository;

class CategoryController extends ApiController
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create() {

    }
}
