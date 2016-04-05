<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable = [
        'name',
        'body',
        'published_at'
    ];
    
    public function setPublishedAtAttribute($date) {
//        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    
    public function scopePublished($query) {
        $query->where('published_at', "<=", Carbon::now());
    }
    public function scopeUnpublished($query) {
        $query->where('published_at', ">", Carbon::now());
    }
}
