<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
