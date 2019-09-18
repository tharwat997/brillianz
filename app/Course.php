<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'university_id', 'cost'
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
