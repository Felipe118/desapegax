<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{
    protected $fillable = ['cep','address','district','number','city','uf','complement'];
    
    use HasFactory;


    public function user(){
        return $this->hasOne('App\Models\User', 'user_id');
    }
}
