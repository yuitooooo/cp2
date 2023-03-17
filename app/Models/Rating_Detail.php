<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rating_Detail extends Model
{
    use HasFactory;
    
    //主キーカラム名を指定
    protected $primaryKey = 'id';
    //オートインクリメント無効化
    public $incrementing = 'false';
    
    protected $table = 'Rating_Details';
    
    public function clothes()
    {
        return $this->belongsTo(Clothes::class);
    }
    
}
