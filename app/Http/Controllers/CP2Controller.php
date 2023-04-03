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
    public function front(Category $category,Clothes $clothes)
    {
       return view('/cp2/front')->with([
           'categories' => $category->get()
           ]);
    }
    
    public function proposal(Clothes $clothes,Category $category,Request $request)
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
                if(($cloth_content->category_id == $ca) and ($ca_budget > $cloth_content->price)){
                   array_push($selected_array,$cloth_content);
                }
            }
         } 
         
        //お客様評価を基に降順にソート
        $customer_rate = [];
        foreach($selected_array as $selected_single => $v){
            $customer_rate[$selected_single] = $v->customer_rate;
        }
        array_multisort($customer_rate,SORT_NUMERIC,SORT_DESC,$selected_array);
         
        //カテゴリーごとに配列を分割
        $groups = [];
        foreach($keys as $key){
            $tmp = array_filter($selected_array,function($element) use($key){
                return $element->category_id == $key;
            });
            array_push($groups,$tmp);
        }
        
        //各カテゴリ毎に１商品
        $results = [];
        foreach($groups as $group){
            $first = array_values($group)[0];
            array_push($results,$first);
        }
        
        return view('/cp2/proposal')->with([
             'results' => $results,
             'budget' => $budget,
             'clothes' => $clothes,
             ]);
        
    }
    public function store(Post $post, Proposal $proposal)
    {
        return view('/cp2/proposal/{{post}}')->with('proposal');
    }
    
     
}