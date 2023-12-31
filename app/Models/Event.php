<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event_gambar';

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'gambar',
    ];
}
