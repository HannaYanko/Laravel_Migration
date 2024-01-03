<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'date',
        'event'
    ];


}
