<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Http\Controllers\CP2Controllers;
use Illuminate\Support\Facades\DB;

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
    
    public function rated()
     {
    //   function array_group_by(array $categories, $keyName)
    //   {
    //     $groups = [];
    //     foreach ($categories as $category) {
    //     $key = $category[$ke];
    //     if (array_key_exists($key, $groups)) {
    //         $groups[$key][] = $category;
    //     } else {
    //         $groups[$key] = [$category];
    //     }
    //     }
    //       return $groups;
    //   }   
    //   assert(array_group_by($result_selected_array, 'category') === $grouped);
      
    //   $groups_array = $grouped->toArray();
    
       
      
       
      $rated_array = array_multisort($ratings,SORT_DESC,$groups_array);
       
      $proposal_groups = [];
       
        foreach ($rated_array as $key=>$v){
            $proposal_groups = $v['category_id']->array_shift();
        
    
            
        }
         
     }
     
     public function repeat()
    {
        while ( $budget  > 0 and $ratings_result === $n_checkbox)
        {
            
            $this->selected();
            $this->rated();
        }
        
        return $this->$proposal_groups;
        
    }
     
     
}   
       
       
       
       
       