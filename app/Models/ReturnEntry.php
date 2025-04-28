<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnEntry extends Model
{
    protected $fillable = ['loan_id', 'return_date', 'notes'];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
