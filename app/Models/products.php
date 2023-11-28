<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    public function getKeyName()
    {
        return 'product_id';
    }

    public function catagory()
    {
        return $this->belongsTo(Catagories::class, 'catagory_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id');
    }
}