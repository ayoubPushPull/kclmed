<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            "name" => "Ayoub admin",
            "slug" => "Ayoub admin",
            'email' => "admin@kclmed.ma",
            'utype' => "ADM",
            'password' => Hash::make(123456789),
        ]);
        User::insert([
            "name" => "Ayoub user",
            "slug" => "Ayoub user",
            'email' => "USR@kclmed.ma",
            'utype' => "USR",
            'password' => Hash::make(123456789),
        ]);
    }
}
