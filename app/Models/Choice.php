<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    public function votes()
    {
        return $this->hasMany('App\Models\Vote');
    }

    public function poll()
    {
        return $this->belongsTo('App\Models\Choice');
    }

    protected $fillable = [
        'choice',
        'poll_id'
    ];
}
