<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}
