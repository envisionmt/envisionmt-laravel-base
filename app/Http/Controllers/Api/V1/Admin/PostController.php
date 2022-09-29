<?php


namespace App\Http\Controllers\Api\V1\Admin;


use App\Http\Controllers\Api\ApiController;
use App\Repositories\PostRepository;

class PostController extends ApiController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create() {

    }
}
