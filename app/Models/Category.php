<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    //
    public function post():HasOne
    {
        return $this->hasOne(Post::class,'category_id');
    }
}
