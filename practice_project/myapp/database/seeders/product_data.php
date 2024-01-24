<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class product_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        // \DB::table('product_data')->insert([
        //     'title' => "test",
        //     'images' => "test.jpg",
        //     'price' => rand(0, 999),
        //     'created_at' => date('d/m/y'),
        //     'updated_at' => now()
        // ]);

        $faker = Faker::create();
        // for ($i = 0; $i < 10; $i++) {
            \DB::table('product_data')->insert([
                'title' => $faker->name,
                'images' => $faker->name."jpg",
                'price' => rand(0, 999),
                'created_at' => date('d/m/y'),
                'updated_at' => now()
            ]);
        // }

        // \DB::table('product_data')->where('id', '<', 2)->delete();
        \DB::table('product_data')->truncate();
        //
    }
}
