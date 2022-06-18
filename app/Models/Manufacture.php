<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $primaryKey = 'manu_id';
    protected $table = 'manufactures';
    protected $fillable = [
        'manu_id',
        'manu_name'
    ];
    use HasFactory;
    public function products()
    {       
        return $this->belongsTo(Product::class);
    }
}
