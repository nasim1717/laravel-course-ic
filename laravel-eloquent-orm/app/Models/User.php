<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',

    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
