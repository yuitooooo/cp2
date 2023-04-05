<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(UserRequest $request, string $name)
    {
        $user = User::where('name', $name)->first();
    
        // バリデーションにかけた値だけをDBに保存
        $user->fill($request->validated())->save();
    
        return redirect()->route('users.show',['name' => $user->name]);
    }
}
