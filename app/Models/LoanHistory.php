<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanHistory extends Model
{
    protected $fillable = ['loan_id', 'movement_date', 'movement_type'];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
