<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
