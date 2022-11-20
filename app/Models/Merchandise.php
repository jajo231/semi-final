<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = ['id','name','discription', 'quantity', 'price'];

    use HasFactory;
}
