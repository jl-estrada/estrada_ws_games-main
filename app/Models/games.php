<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function games()
    {
        return $this->hasMany(Games::class, 'author_id');

    }
}
