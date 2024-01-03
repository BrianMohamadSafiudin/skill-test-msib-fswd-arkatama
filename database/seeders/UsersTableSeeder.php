<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'BRIAN MOHAMAD',
            'age' => 30,
            'city' => 'KEDIRI',
        ]);

        User::create([
            'name' => 'SAFIUDIN',
            'age' => 25,
            'city' => 'SURABAYA',
        ]);

    }
}
