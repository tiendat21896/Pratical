<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable = [
        "name",
        "type",
        "collation",
        "attributes",
        "null",
        "default",
        "comments",
        "extra",
    ];

}
