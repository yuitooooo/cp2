<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'id'
    ];
    
    //主キーカラム名を指定
    protected $primaryKey = 'id';
    //オートインクリメントを無効化
    public $incrementing = false;
    
    protected $KeyType = 'string';
}
