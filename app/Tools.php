<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $fillable = ['title', 'link', 'description'];

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
