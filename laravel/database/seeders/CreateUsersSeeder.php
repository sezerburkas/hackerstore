<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Morpheus',
            'username' => 'morpheus',
            'type' => 1,
            'password' => Hash::make('redpillallday')
            ],
            [
            'name' => 'Neo',
            'username' => 'thechoosenone',
            'type' => 2,
            'password' => Hash::make('trinityrules32')
            ],
            [
            'name' => 'Mouse',
            'username' => 'mouse',
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
