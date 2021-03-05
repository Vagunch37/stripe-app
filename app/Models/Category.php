<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'type',
        // 'timing',
        'name',
    ];

    public function events()
    {
        return $this->hasMany(Event::class)->orderBy('id', 'DESC');
    }
}
