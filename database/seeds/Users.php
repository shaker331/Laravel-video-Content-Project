<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=> 'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('123456') ,
            'group'=>1

        ]);
    }
}
