<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = [

            [

                'name' => 'Admin',

                'email' => 'admin@itsolutionstuff.com',

                'is_admin' => '1',

                'password' => bcrypt('123456'),

            ],

            [

                'name' => 'User',

                'email' => 'designer@gmail.com',

                'is_admin' => '0',

                'password' => bcrypt('123456'),

            ],

            [

                'name' => 'User',

                'email' => 'Frontend@gmail.com',

                'is_admin' => '0',

                'password' => bcrypt('123456'),

            ],

            [

                'name' => 'User',

                'email' => 'backend@gmail.com',

                'is_admin' => '0',

                'password' => bcrypt('123456'),

            ],

            [

                'name' => 'User',

                'email' => 'team-leader@gmail.com',

                'is_admin' => '0',

                'password' => bcrypt('123456'),

            ],

            [

                'name' => 'User',

                'email' => 'hr@gmail.com',

                'is_admin' => '0',

                'password' => bcrypt('123456'),

            ],

        ];



        foreach ($user as $key => $value) {

            User::create($value);
        }
    }
}
