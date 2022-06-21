<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['product_name', 'product_price', 'product_discription','product_image'];



    public function images(){
        return $this->hasMany(Image::class);
    }
  
}
