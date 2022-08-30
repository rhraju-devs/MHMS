<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        User::create([
            'first_name'=>'mim',
            'last_name' => 'islam',
            'email'=>'mim@gmail.com',
            'password'=>bcrypt('12345'),
            'role'=>'admin',
        ]);
       
    }
}
