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
        DB::table('users')->insert([
            'role_id'=>1,
            'is_active' => 1,
            'name' => 'sarah',
            'email' => 'sarah@test.be',
            'address'=>'street 1',
            'country'=>'Belgium',
            'password' => bcrypt(11111111),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory('App\User', 5)->create();
    }
}
