<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polls extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function votes()
    {
        return $this->hasMany('App\Models\Vote');
    }

    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
    }

    protected $fillable = [
        'title',
        'description',
        'deadline',
    ];
}
