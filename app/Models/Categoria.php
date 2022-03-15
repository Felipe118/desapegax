<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name_category'];

    public function items()
    {
        return $this->hasMany(Item::class,'categoria_id');
    }
 
}
