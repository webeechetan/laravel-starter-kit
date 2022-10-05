<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('password');
        $admin->type = 1;
        $admin->save();

        //User
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('password');
        $user->type = 2;
        $user->save();
    }
}
