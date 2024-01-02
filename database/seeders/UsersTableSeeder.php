<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
        'name' => 'Brian Mohamad',
            'age' => 30,
            'city' => 'Jakarta',
        ]);

        User::create([
            'name' => 'Safiudin',
            'age' => 25,
            'city' => 'Surabaya',
        ]);

    }
}
