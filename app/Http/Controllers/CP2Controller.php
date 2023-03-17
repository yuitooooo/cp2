<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Clothes;
use App\Models\Category;
use App\Models\Rating_Detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class CP2Controller extends Controller
{
    public function front(Category $category)
    {
       return view('/cp2/front')->with(['categories' =>$category->get()]);
    }
    
    public function proposal(Clothes $clothes ,Request $request)
    {
        //リクエストパラメータで入力値を受け取る
        $checkbox_array = $request->input('checkbox_array');
        $budget = $request->input('budget');
        
        //チェックボックスで選択されたカテゴリに属するclothesデータを絞り込み
        $query = DB::table('clothes');
        foreach($checkbox_array as $one_category_id){
            $query = $query->orwhere('category_id',$one_category_id);
        } 
        $collection = $query->get()->toArray();
        
        //チェックボックスで選択されたカテゴリ毎の平均価格算出
        $n_checkbox = count($checkbox_array);
        $ca_budget =  $budget / $n_checkbox;
        foreach($checkbox_array as $one_category_id){
            $average_list[$one_category_id] = DB::table('clothes')->where('category_id',$one_category_id)->avg('price');
        } 
        $keys = array_keys($average_list);
        
        //予算と比較して提案できる商品の絞り込み
        $selected_array =[];
        foreach($collection as $cloth_content){
            foreach($keys as $key => $ca){
                if(($cloth_content->category_id === $ca) and ($ca_budget > $cloth_content->price)){
                   array_push($selected_array,$cloth_content);
                }
            }
         } 
         
        //カテゴリーごとに配列を分割
        $groups = [];
        foreach($keys as $key){
            $tmp = array_filter($selected_array,function($element) use($key){
                return $element->category_id == $key;
            });
            array_push($groups,$tmp);
        }
        // foreach($groups as $group){
        //     $group->with('rating_details');
        // }
        
        //お客様評価を基に降順にソート
        $ratings = DB::table('rating_details');
        foreach($groups as $group => $single['id']){
            $ratings = $ratings->orwhere('clothes_id',$single['id']);
        }
        dd($ratings);
        $rating_array = $ratings->get();
        // $result = [];
        // $result = array_multisort($ratings,SORT_DESC,);
    
      
      
        //  return view('/cp2/proposal') ->with([
        //      'clothes' => $clothes->get(),
        //      'budget'  => $budget,
        //      ]);
    
    
       
    //   $one_category_avg = [];
    //   for($i = 0 ; $i < count($keys) ; $i++){
    //       array_push($one_category_avg,$average_list[$keys[$i]]);
    //   }
    //   $ca_id = array_column($collection,'category_id');
    //   $cloth_price = array_column($collection,'price');
    
    //   foreach($collection as $cloth_content){
    //       foreach($average_list as $one_category_id => $one_category_avg)
    //       //dump($one_category_avg);
    //         if(($cloth_content->category_id === $one_category_id) and ($ca_budget > $one_category_avg) and ($ca_budget > $cloth_content->price)){
    //             array_push($selected_array,$cloth_content);
    //              //dump($selected_array);
    //         }elseif(($cloth_content->category_id === $one_category_id) and ($ca_budget < $one_category_avg)){
    //             $ca_budget = $one_category_avg;
    //             if($ca_budget > $cloth_content->price){
    //                 array_push($selected_array,$cloth_content);
    //             }
    //             $n_checkbox = $n_checkbox -1;
    //             $ca_budget = $budget - $ca_budget / $n_checkbox;
    //         }
    //   } 

    //  $validator = Validator::make($request->all(), $request);
        
        //   if ($validator->fails()) {
        //     return redirect('/cp2/front')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // };
        
    // public function store(Post $post, Proposal $proposal)
    // {
    //     return view('/cp2/proposal/{{post}}')->with('proposal');
    // }
    
    }   
}