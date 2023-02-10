<?php

namespace App\Http\Controllers;

use App\Http\Requests\CP2Request; 
use App\Models\Post;
use App\Models\Clothes;


class CP2Controller extends Controller
{
    public function front()
    {
       return view('cp2/front'); 
    }
    
    public function proposal(Clothes $clothes)
    {
        return view('cp2/proposal')->with(['clothes' =>clothes->get()]);
    }
    
    public function store(Post $post, Proposal $proposal)
    {
        return view('cp2/posts')->with('proposal');
    }
}
