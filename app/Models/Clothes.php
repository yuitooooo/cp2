<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Http\Controllers\CP2Controllers;

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
    
    public function repeat(Select $select,Rated $rated)
    {
        while ( $budget  > 0 and $ratings_result === $n_checkbox)
        {
            $this->selected();
            $this->rated();
        }
        
        return $this->proposal_groups;
        
    }
    
    public function select(Proposal $proposal, Select_Category $select_category, Show_Budget $show_budget)
    {
       $n_checkbox = count($checkbox_array);
       
       $ca_budget =  $budget / $n_checkbox;
       
       $collection = $result_category_array;
       
       $select_array = [];
       
       $average_price = Clothes::select('category_id')
                        ->selectRaw('AVG(price as a_price')
                        ->groupBy('category_id')
                        ->get();
                        
                        
        foreach ($collection as $v){ 
            
            if ($average_price < $ca_budget and $v['price'] < $ca_budget){ 
                
            $select_array = $v ;   
            
            }elseif($average_price > $ca_budget){ 
            
                $ca_budget = $average_price; 
            
                if($v['price'] < $ca_budget){ 
                
                    $select_array = $v; 
                } 
            
            }
            
        }
       $result_selected_array = [];
       
       $result_selected_array  = $select_array;
        
    }
     
    public function rated(Select $select)
     {
         
      function array_group_by(array $categories, $keyName)
      {
        $groups = [];
        foreach ($categories as $category) {
        $key = $category[$keyName];
        if (array_key_exists($key, $groups)) {
            $groups[$key][] = $category;
        } else {
            $groups[$key] = [$category];
        }
        }
          return $groups;
      }
       assert(array_group_by($result_selected_array, 'category') === $grouped);
      
       $groups_array = $grouped->toArray();
       
       $ratings = array_column($groups_array, 'customer_rate');
       
       $rated_array = array_multisort($ratings,SORT_DESC,$groups_array);
       
       $proposal_groups = [];
       
        foreach ($rated_array as $key=>$v){
            $proposal_groups = $v['category_id']->array_shift();
        }

     }
       
     
     
}   
       
       
       
       
       