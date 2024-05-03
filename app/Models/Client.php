<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * the attributes visiblable
     */

    protected $fillable = [
        "firstname",
        "lastname",
        "phone_number",
        "adresse",
    ];
}
