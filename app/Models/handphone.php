<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handphone extends Model
{
    use HasFactory;

    protected $fillable= [
        'brand',
        'harga',
        'stok',
        'deskripsi'
    ];
}
