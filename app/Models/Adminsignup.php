<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminsignup extends Model
{
    use HasFactory;
    protected $table= "admin_info";
    protected $primarykey="admin_id";
}
