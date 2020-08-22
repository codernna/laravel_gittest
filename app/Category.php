<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receipe;


class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name', 'description'
    ];

     public function receipe()
    {
        return $this->hasMany(Receipe::class, 'receipe');
        // return $this->hasMany('App\Receipe');
    }
}
