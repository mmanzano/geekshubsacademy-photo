<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getImageUrlAttribute()
    {
        if (str_contains($this->image, 'http://lorempixel.com')) {
            return $this->image;
        }
        else {
            return url('img/' . $this->image);
        }
    }
}
