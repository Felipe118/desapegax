<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['cep','address','district','permission','number','city','uf','complement'];
    
    use HasFactory;


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
