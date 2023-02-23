<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('admin'),
            'role'      => 'admin'
        ]);
        User::create([
            'name'      => 'Adrian',
            'email'     => 'drian@gmail.com',
            'password'  => bcrypt('12345'),
            'role'      => 'admin'
        ]);

        User::create([
            'name'      => 'Ferdoy',
            'email'     => 'ferdy@gmail.com',
            'password'  => bcrypt('12345'),
            'role'      => 'operator'
        ]);

        User::create([
            'name'      => 'Liga',
            'email'     => 'liga@gmail.com',
            'password'  => bcrypt('12345'),
            'role'      => 'user'
        ]);
    }
}