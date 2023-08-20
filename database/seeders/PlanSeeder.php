<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Plan::insert([
            "slug" => Str::of("")->slug(),
            'name' => "Plan1", 
            'subtitle' => "Plan1",
            'description' => "Le lorem ipsum est, en imprimerie, une suite de mot",
            'color' => "rouge" ,
            'price' => "200" ,
        ]);
      
    }
}
