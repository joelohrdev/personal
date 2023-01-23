<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasTags;
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];
}
