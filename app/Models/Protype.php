<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    protected $primaryKey = 'protype_id';
    protected $table = 'protypes';
    protected $fillable = [
        'protype_id',
        'protype_name'
    ];   
    use HasFactory;
    public function products()
    {       
        return $this->belongsTo(Product::class);
    }
}
