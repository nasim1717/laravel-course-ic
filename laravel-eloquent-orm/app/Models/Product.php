<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

}
