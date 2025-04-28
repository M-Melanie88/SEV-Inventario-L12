<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumableType extends Model
{
    protected $fillable = ['description', 'brand', 'model', 'capacity', 'expiration_date'];

}
