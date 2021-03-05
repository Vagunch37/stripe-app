<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'username',
        'business_name',
        'type',
        'confirmed',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
        'balance',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class)->orderBy('id', 'DESC');
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class)->orderBy('id', 'DESC');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'user_event', 'user_id', 'event_id');
    }

    
}