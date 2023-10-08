<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'image'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function wishlists()
    {
        return $this->hasOne(Wishlist::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
