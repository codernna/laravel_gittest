<?php

namespace App;

use App\Events\ReceipeCreatedEvent;
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

    public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function($receipe){
       session()->flash("message", 'Receipe has been created');
       

        });
    }

    public function categories()
    {
         return $this->belongsTo(Category::class, 'category');
    	// return $this->belongsTo('App\Category');
    }
}
