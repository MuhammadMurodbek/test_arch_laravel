<?php

namespace App\Actions;

use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Http\Request;

class CreatePostAction
{
    private Request $request;

    public function __construct(Request $request)
    {
    }

    public function handle()
    {
        // get CurrentUser, not implemented
        $user = CurrentUser::get();

        $user->posts()->create([
            'title'       => $this->request->title,
            'description' => $this->request->description,
        ]);
    }
}
