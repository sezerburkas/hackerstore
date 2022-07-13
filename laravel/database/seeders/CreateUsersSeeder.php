<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'username' => 'morpheus',
            'email' => 'morpehus@nebuchadnezzarii.com',
            'type' => 1,
            'password' => Hash::make('redpillallday')
            ],
            [
            'username' => 'thechoosenone',
            'email' => 'neo@nebuchadnezzarii.com',
            'type' => 2,
            'password' => Hash::make('trinityrules32')
            ],
            [
            'username' => 'mouse',
            'email' => 'mouse@nebuchadnezzarii.com',
            'type' => 0,
            'password' => Hash::make('womaninred')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }

        /** Save this then run: 
         * 
         * php artisan db:seed --class=CreateUsersSeeder
         * 
         */
    }
}
