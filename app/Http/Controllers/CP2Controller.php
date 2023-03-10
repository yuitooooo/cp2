<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CP2Request;
use App\Models\Post;
use App\Models\Clothes;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;



class CP2Controller extends Controller
{
    public function front(Category $category)
    {
       return view('/cp2/front')->with(['categories' =>$category->get()]);
    }
    
    public function proposal(Clothes $clothes ,Request $request)
    {
        //  $validator = Validator::make($request->all(), $request);
        
        //   if ($validator->fails()) {
        //     return redirect('/cp2/front')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // };
        
        $checkbox_array[] = $request->input('checkbox_array');
        
        $budget = $request->input('budget');
        
         return view('/cp2/proposal') ->with([
             'clothes' => $clothes->get(),
             'budget'  => $budget,
             ]);
    }
    
    public function store(Post $post, Proposal $proposal)
    {
        return view('/cp2/proposal/{{post}}')->with('proposal');
    }
    
}
