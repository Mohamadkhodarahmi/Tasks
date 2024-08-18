<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const ID = 'id',
        NAME = 'name',
        SURNAME = 'surname',
        AGE = 'age',
        PHONE = 'phone',
        CODE = 'code';
    protected $fillable = [
        self::NAME,
      self::SURNAME,
        self::AGE,
        self::PHONE,
        self::CODE
    ];
}
