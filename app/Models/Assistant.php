<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
