<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model

{
    use HasFactory;
    protected $table= "products";
    public function getKeyName()
    {
        return 'product_id';
    }
}
