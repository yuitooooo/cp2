<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    
    
    protected $primaryKey = 'id';
    
    public $incrementing = 'false';
    
    public function clothes()
    {
        return $this->hasMany(Clothes::class);
    }
}
