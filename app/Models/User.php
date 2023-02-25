<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'nid',
        'email',
        'role',
        'gender',
        'phone',
        'birthdate',
        'email_verified_at',
        'password'
    ];

    public function Properties()
    {
        return $this->hasMany(Userproperty::class);
    }


    public function Property()
    {
        return $this->hasMany(Property::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // public function getId()
    // {
    // return $this->id;
    // }
}
