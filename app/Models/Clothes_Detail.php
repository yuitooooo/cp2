<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clothes_Detail extends Model
{
    use HasFactory;
    

    protected $primaryKey = 'id';
    
    public $incrementing = 'false';
    
    public function clothes()
    {
        return $this->belongsTo(Clothes::class);
    }
}
