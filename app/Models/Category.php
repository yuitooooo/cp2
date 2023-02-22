<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    
    protected $primaryKey = 'id';
    
    public $incrementing = 'false';
    
    public function clothes()
    {
        return $this->hasMany(Clothes::class);
    }
    
    public function select_category()
    {
       $category_data = DB::table('categories');

       if(in_array( $checkbox_array))
       {
            $category_data->where(function ($q){
                
                $q->where('id','=',$checkbox_array[]);
            });
       }
       
      $result_category_array = [];
      $result_category_array = $category_data->get();
      
    }
}
