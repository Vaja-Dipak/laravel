<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class allprod extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->truncate();
    }
}
