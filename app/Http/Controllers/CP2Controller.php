<?php

namespace App\Http\Controllers;

use App\Http\Requests\CP2Request; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Clothes;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;



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
    
    public function proposal(Category $category, Request $request,Repeat $repeat)
    {
        $validation_array = [
            'checkbox' => 'required',
        ];
        
        $validator = Validator::make($request->all(), $validation_array);
        
         if ($validator->fails()) {
            return redirect('cp2/front')
                        ->withErrors($validator)
                        ->withInput();
        };
        
        $checkbox_array = [];
        foreach ($request->input('checkbox') as $value){
        $checkbox_array = $value;
        }
        
        return view('cp2/proposal')->with(['repeat' =>$repeat->get()]);
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
