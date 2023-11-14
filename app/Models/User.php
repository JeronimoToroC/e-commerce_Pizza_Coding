<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar',
    ];

    // Relación con revisiones de productos.
    public function productReviews()
    {
        return $this->belongsToMany(Product::class, 'product_reviewers')
            ->withPivot('rating', 'comment')
            ->withTimestamps();
    }

    // Relación con órdenes.
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}
