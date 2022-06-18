<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'comment_content',
        'rating',
        'product_id'
    ];   
    function product(){
        return $this->belongsTo(Product::class);
    }
}
