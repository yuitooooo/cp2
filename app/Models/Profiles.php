<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    
    
    //主キーカラム名を指定
    protected $primaryKey = 'id';
    //オートインクリメント無効化
    public $incrementing = 'false';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
