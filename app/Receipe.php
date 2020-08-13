<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Mail\ReceipeStored;
use Illuminate\Support\Facades\Mail;


class Receipe extends Model
{
    protected $table = 'receipes';
     protected $fillable = [
        'name', 'ingredients', 'category', 'author_id'
    ];

    // protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::created(function($receipe){
       session()->flash("message", 'Receipe has been created');
       Mail::to('nweni5240@gmail.com')->send(new ReceipeStored($receipe));

        });
    }

    public function categories()
    {
         return $this->belongsTo(Category::class, 'category');
    	// return $this->belongsTo('App\Category');
    }
}
