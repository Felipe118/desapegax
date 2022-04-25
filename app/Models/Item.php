<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name','description','price','active','categoria_id','image_id','user_id'];
    use HasFactory;

    public function categoria() 
    {
        return $this->belongsTo('App\Models\Categoria');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'item_id');
    }


}
