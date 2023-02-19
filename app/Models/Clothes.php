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
    
    public function loop(Selected $selected,Rated $rated)
    {
        while ( $budget  > 0 and $checkbox_array > 0)
        {
            $this->selected();
            $this->rated();
            
        }
        return $this->$clothes;
    }
    
    public function selected(Proposal $proposal, Select_Category $select_category)
    {
       $n_checkbox=count($checkbox_array);
    　 
    　 $ca_budget={{ $budget }} / $n_checkbox;
    　 
    　 $collection = $result_category_array;
    　 
    　 
    　 
    　 $filtered = $collection->filter(function ($value)
    　 {
         return $value < $ca_budget ;
         
     　});
     　
     　 $result_selected_array =[];
        $result_selected_array = $filtered->all();
     　
    }
    
    public function rated(Selected $selected)
    {
    
       $result_selected_array = Clothes::withCount('customer_rate')->orderBy('Rating_Detail_count', 'desc')->paginate();
        
        return $clothes; 
        
       $clothes = Clothes::first();
        
    }   
    
}
