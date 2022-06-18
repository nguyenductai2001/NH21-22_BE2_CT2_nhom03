<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'manu_id',
        'type_id',
        'price',
        'image',
        'description',
        'feature',
        'sale'
    ];

    use HasFactory;
    public function protypes()
    {       
        return $this->hasMany(Protype::class);
    }
    public function manufactures()
    {       
        return $this->hasMany(Manufacture::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
