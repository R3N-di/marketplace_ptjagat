<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $table = 'carousel_gambar';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'gambar',
    ];
}
