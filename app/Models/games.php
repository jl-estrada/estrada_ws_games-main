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

    public function scores()
    {
        return $this->hasMany(Score::class);
        
    }

    public function playedGames()
    {
        return $this->belongsToMany(Game::class, 'scores');
    }
}
