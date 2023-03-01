<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'name' => 'outer',
            ]);
            
        DB::table('categories')->insert([
                'name' => 'tops',
            ]);
            
        DB::table('categories')->insert([
                'name' => 'shirts',
            ]);
    
        DB::table('categories')->insert([
                'name' => 'dress',
            ]);
            
        DB::table('categories')->insert([
                'name' => 'pants',
            ]);
            
         DB::table('categories')->insert([
                'name' => 'skirt',
            ]);
    
    }
    
}
