<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    public function user()
    {
        return $this->belongsTo(Score::class);
        
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}

