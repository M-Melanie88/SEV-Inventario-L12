<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'issue_date', 'number_ofice', 'id_user', 'observations',
        'id_department', 'sheet_dti', 'id_signatory'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Departments::class);
    }

    public function signer()
    {
        return $this->belongsTo(Signer::class);
    }

    public function details()
    {
        return $this->hasMany(DetailVoucher::class, 'voucher_id');
    }
}
