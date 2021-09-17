<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'user1',
                'email' => 'userroll1@gmail.com',
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now(),
                'roll' => 1,
                'status' => 1
            ],
            [
                'name' => 'user2',
                'email' => 'userroll2@gmail.com',
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now(),
                'roll' => 2,
                'status' => 1
            ],
            [
                'name' => 'user3',
                'email' => 'userroll3@gmail.com',
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now(),
                'roll' => 3,
                'status' => 1
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'created_at' => now(),
                'updated_at' => now(),
                'roll' => 3,
                'status' => 1
            ],
        ];
        DB::table('users')->insert($data);
    }
}
