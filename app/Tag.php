<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['pivot'];

    public function tools()
    {
        return $this->belongsToMany(Tool::class);
    }
}
