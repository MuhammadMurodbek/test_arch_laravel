<?php

namespace App\Http\Controllers;

use App\Actions\CreatePostAction;
use App\Http\Requests\StorePostRequest;

class CreatePostController
{
    public function __invoke(StorePostRequest $storePostRequest, CreatePostAction $createPostAction)
    {
        $createPostAction->handle($storePostRequest->getParams());
    }

//    public function create()
//public function getPost()

///....
/// $createController = new CreatePostController()
/// $createController();


}
