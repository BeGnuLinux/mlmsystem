<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'username' => 'meto',
        	'password' => Hash::make('123456'),
        	'first_name' => 'Ahmed',
        	'last_name' => 'Anber',
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'lolo',
            'password' => Hash::make('123456'),
            'first_name' => 'Lamar',
            'last_name' => 'Anber',
            'role' => 'editor'
        ]);
        User::create([
            'username' => 'hamoda',
            'password' => Hash::make('123456'),
            'first_name' => 'Mohamed',
            'last_name' => 'Anber',
            'role' => 'editor'
        ]);
        User::create([
            'username' => 'mahy',
            'password' => Hash::make('123456'),
            'first_name' => 'Maha',
            'last_name' => 'Mohamed',
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'meshoo',
            'password' => Hash::make('123456'),
            'first_name' => 'Ibrahem',
            'last_name' => 'Anber',
            'role' => 'editor'
        ]);
        User::create([
            'username' => 'kamba',
            'password' => Hash::make('123456'),
            'first_name' => 'Ahmed',
            'last_name' => 'Samy',
            'role' => 'editor'
        ]);
    }
}
