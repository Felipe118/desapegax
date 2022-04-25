<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image'; 
    protected $fillable = ['path','item_id'];
    use HasFactory;

    public function items(){
        return $this->belongsTo('App\Models\Item');
    }
}
