<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    // Use this - fields that can be mass assigned
    protected $fillable = [
        'title' ,
        'content',
        'active',
        'hierarchy',
    ];
}
