<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    //
    /**
     * Get the destination for the blog post.
     */
    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}
