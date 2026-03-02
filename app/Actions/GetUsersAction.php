<?php

namespace App\Actions;

use App\Models\User;

class GetUsersAction
{
    public function handle(){
        $users = User::all();

        return response()->json(['all_users'=>$users])->status(200);
    }
}
