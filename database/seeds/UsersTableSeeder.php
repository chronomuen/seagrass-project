<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'name' => 'Ken', 'email' => 'kennethotsuka@yahoo.com', 'password' => bcrypt('1234')],
			['id' => 2, 'name' => 'Chi', 'email' => 'yuichiotsuka@yahoo.com', 'password' => bcrypt('1234')]
        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
