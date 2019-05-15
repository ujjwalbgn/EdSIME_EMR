<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'type' => 'admin',
            ],
            [
                'id' => '2',
                'name' => 'instructor',
                'email' => 'instructor@example.com',
                'password' => bcrypt('instructor'),
                'type' => 'author',
            ], [
                'id' => '3',
                'name' => 'student',
                'email' => 'student@example.com',
                'password' => bcrypt('student'),
                'type' => 'user',
            ]
        ]);

    }
}
