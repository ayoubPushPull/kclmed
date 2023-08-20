<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            "slug" => Str::of("owner")->slug(),
            'name' => "owner", 
            'description' => "Owner Cabinet", 
        ]);
        Role::insert([
            "slug" => Str::of("nurse")->slug(),
            'name' => "nurse", 
            'description' => "Nurse Cabinet", 
        ]);
    }
}
