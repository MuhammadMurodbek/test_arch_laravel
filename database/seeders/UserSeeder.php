<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Modules\User\Enums\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        /*
         * Manual Admin creation
         */
         User::create([
            'name'     => 'admin',
            'email'    => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role'     => Roles::ADMIN,
        ]);

        User::factory()->count(5)->create();
    }
}
