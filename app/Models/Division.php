<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public function votes()
    {
        return $this->hasMany('App\Models\Vote');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    protected $fillable = [
        'name'
    ];
}
