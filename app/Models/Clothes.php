<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Clothes extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    
    public $incrementing = 'false';
    
    protected $keyType = 'string';
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    
    public function clothes_detail()
    {
        return $this->belongsTo(Clothes_Detail::class);
    }
    
    public function rating_detail()
    {
        return $this->belongsTo(Rating_Detail::class);
    }
    
    public function selected()
    {
        
    　 $n_checkbox=count($checkbox_array);
    　 
    　 $ca_budget={{ $budget }} / $n_checkbox;
    　 
    　 $collection = global $result_category[]
    　 
    　 
    　 
    　 $filtered = $collection->filter(function ($value, $key)
    　 {
         return $value < $ca_budget ;
         
     　});
     　
       global $result_selected[] = $filtered->all();
     　
    }
     　
    public function rated()
    {
    
       global $result_selected[]  = Clothes::withCount('customer_rate')->orderBy('Rating_Detail_count', 'desc')->paginate();
        
        return global $clothes; 
        
       global $clothes = Clothes::first();
        
    }    
}
