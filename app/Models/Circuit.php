<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    //
    /**
     * Get the post that owns the comment.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

     /**
     * Get the destination for the blog post.
     */
    public function checkpoints()
    {
        return $this->hasMany(Checkpoint::class);
    }

    public function getLabelAttribute($value)
    {
        $label='';
        foreach($this->checkpoints()->get() as $check){
            $label = sprintf("%s - %s", $label, $check->label);
        }
        return $value.' - '.$label;
    }
}
