<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rating_Detail_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'1',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'2',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'3',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'4',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'5',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.3',
                'clothes_id'=>'6',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'7',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.6',
                'clothes_id'=>'8',
            ]);
           
        DB::table('rating_details')->insert([
                'customer_rate' => '4.2',
                'clothes_id'=>'9',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.2',
                'clothes_id'=>'10',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'11',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'12',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'13',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'14',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'15',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'16',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.2',
                'clothes_id'=>'17',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.3',
                'clothes_id'=>'18',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.5',
                'clothes_id'=>'19',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.4',
                'clothes_id'=>'20',
            ]);
            
        DB::table('rating_details')->insert([
                'customer_rate' => '4.7',
                'clothes_id'=>'21',
            ]);
           
    }
}
