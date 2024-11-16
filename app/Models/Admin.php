<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function webpage()
    {
        return $this->belongsTo(Webpage::class);
    }



}
