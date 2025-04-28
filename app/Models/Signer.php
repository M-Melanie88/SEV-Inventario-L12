<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signer extends Model
{
    protected $fillable = ['name', 'first_surname', 'second_surname', 'id_department'];

    public function department()
    {
        return $this->belongsTo(Departments::class);

    }
}
