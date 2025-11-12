<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts() // у одной модели много постов поэтому posts
    {
        return $this->hasMany(Post::class, 'post_id', 'id'); // у данного объекта много
    }
}
