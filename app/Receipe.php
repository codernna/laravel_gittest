<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Receipe extends Model
{
    protected $table = 'receipes';
     protected $fillable = [
        'name', 'ingredients', 'category', 'author_id'
    ];

    // protected $guarded = [];

    public function categories()
    {
         return $this->belongsTo(Category::class, 'category');
    	// return $this->belongsTo('App\Category');
    }
}
