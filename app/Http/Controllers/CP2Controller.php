<?php

namespace App\Http\Controllers;

use App\Http\Requests\CP2Request; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Clothes;
use App\Models\Category;



class CP2Controller extends Controller
{
    public function front(Category $category)
    {
       return view('cp2/front')->with(['categories' =>$category->get()]);
    }
    
     public function budget_input(Request $request)
     {
        $budget = $request->input('front');
        return view('cp2/front', compact('front'));
    }
 
 　 public function selection(Clothes $clothes Category $category)
 　 {
 　     $collection = 
       $filtered = $collection->filter(function ()
       {
          return 
           
       )};
       
 　 }
    
    public function proposal(Clothes $clothes)
    {
        while 
        
        return view('cp2/proposal')->with(['clothes' =>$clothes->get()]);
    }
    
    public function showPage(Request $request)
    {
        $budget = $request->input('budget');
        return view('cp2/proposal', compact('budget'));
    }
    
    
    public function store(Post $post, Proposal $proposal)
    {
        return view('cp2/posts')->with('proposal');
    }
    
}
