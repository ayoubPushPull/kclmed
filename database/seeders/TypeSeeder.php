<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use App\Models\CabinetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        CabinetType::create([
            "slug" => Str::of("dentiste")->slug(),
            'name' => "dentiste", 
        ]);
    }
}
