<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // for ($i=0; $i < 50; $i++) { 
            \DB::table('products')->insert([
                'title'=>$faker->company,
                'price'=>rand(10,999),
                'quantity'=>rand(1,10),
                'description'=>$faker->text(50),
                'image'=>$faker->firstName.".jpg",
            ]);
        // }
    }
}
