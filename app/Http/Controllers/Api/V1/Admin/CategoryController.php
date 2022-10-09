<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\V1\Admin\Categories\CategoryCreateRequest;
use App\Http\Requests\Api\V1\Admin\Categories\CategoryUpdateRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(CategoryCreateRequest $request)
    {
        $attributes = $request->only(array_keys($request->rules()));
        $category = $this->categoryRepository->create($attributes);
        return $this->successResponse($category);
    }

    public function index(Request $request)
    {
        $list = $this->categoryRepository->searchFromRequest($request);
        return $this->successResponse($list);
    }

    public function show(Request $request, string $id)
    {
        $category = $this->categoryRepository->getById($id);
        return $this->successResponse($category);
    }

    public function update(CategoryUpdateRequest $request, string $id)
    {
        $attributes = $request->only(array_keys($request->rules()));
        $category = $this->categoryRepository->update($attributes, $id);
        return $this->successResponse($category);
    }

    public function delete(Request $request, string $id)
    {
        $this->categoryRepository->deleteById($id);
        return $this->successResponse(true);
    }
}
