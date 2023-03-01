<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

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
    
    public function repeat(Selected $selected,Rated $rated)
    {
        while ( $budget  > 0 and $_array > 0)
        {
            $this->selected();
            $this->rated();
            
        }
        $clothes_result = [];
        return $this->$clothes_result;
        
    }
    
    public function select(Proposal $proposal, Select_Category $select_category, Budget_Input $budget_input)
    {
       $n_checkbox = count($checkbox_array);
       
       $ca_budget =  $budget  / $n_checkbox;
       
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
       
       $result_selected_array [] = $select_array;
        
    }
    
    public function rated(Selected $selected)
    {
    
       $result_selected_array = Clothes::withCount('customer_rate')->orderBy('Rating_Detail_count', 'desc')->paginate();
        
        return $ratings_result; 
        
       $ratings_result = Clothes::first();
        
    }   