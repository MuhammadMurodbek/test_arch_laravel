<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    private Request $request;
    public function __construct(Request $request)
    {
    }

    public function handle(){
        User::create([
            'username' => $this->request->username,
            'password' => Hash::make($this->request->password),
        ]);
    }
}
