<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Father extends Model
{
    //
    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
