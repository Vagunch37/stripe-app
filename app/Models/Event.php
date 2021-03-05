<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'timing',
        'group',
        'category_id',
        'language_id',
        'name',
        'views',
        'watchlist',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_event', 'event_id', 'user_id');
    }

}