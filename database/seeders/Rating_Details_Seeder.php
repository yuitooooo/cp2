<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rating_Details_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rating_details')->insert([
                'customer_rate' => '',
                'hot_selling'=> '',
                'favorite'=> '',
                'clothes_id'=>'',
            ]);
    }
}
