<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    /**
     * Get the post that owns the comment.
     */
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    /**
     * Get the destination for the blog post.
     */
    public function circuits()
    {
        return $this->hasMany(Circuit::class);
    }
}
