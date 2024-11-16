<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Webpage extends Model
{
    //

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }



}
