<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'user_id', 'loan_date', 'loan_detail_id', 'signer_id',
        'returned', 'extension_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function signer()
    {
        return $this->belongsTo(Signer::class);
    }

    public function detail()
    {
        return $this->belongsTo(LoanDetail::class, 'loan_detail_id');
    }

    public function return()
    {
        return $this->hasOne(ReturnEntry::class, 'loan_id');
    }

    public function history()
    {
        return $this->hasMany(LoanHistory::class);
    }
}
