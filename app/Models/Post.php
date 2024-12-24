<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int status
 * @property string content
 */
class Post extends Model
{

    //often
    protected $fillable=['title','content','category_id','status'];

    //rarely
    protected $guarded=[];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function isPublished()
    {
        return $this->status ? 'Published' : 'Not published';
    }
}
