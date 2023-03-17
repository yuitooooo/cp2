<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'id'
    ];
    
    //主キーカラム名を指定
    protected $primaryKey = 'id';
    //オートインクリメントを無効化
    public $incrementing = 'false';
    
    protected $KeyType = 'string';
    
     public function clothes()
     {
         return $this->belongsToMany(Clothes::class);
     }
     
     
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
