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
            "name" => "Mehdi elmir",
            "slug" => "mehdi-elmir",
            'email' => "admin@mymed2023.ma",
            'utype' => "ADM",
            'password' => Hash::make(123456789),
        ]);
    }
}
