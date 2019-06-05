<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$2TV9pHgGeZwYCFTsGfnH1ulp7W2boqmWsN2Vs9qwZe/CGprq6NJ0a',
            'remember_token' => null,
            'created_at'     => '2019-05-24 23:29:02',
            'updated_at'     => '2019-05-24 23:29:02',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
