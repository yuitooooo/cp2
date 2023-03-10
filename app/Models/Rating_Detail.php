<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating_Detail extends Model
{
    use HasFactory;
    
    //主キーカラム名を指定
    protected $primaryKey = 'id';
    //オートインクリメント無効化
    public $incrementing = 'false';
    
    public function clothes()
    {
        return $this->belongsTo(Clothes::class);
    }
    
}
