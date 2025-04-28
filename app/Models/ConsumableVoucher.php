<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumableVoucher extends Model
{
    protected $fillable = [
        'emission_date', 'official_number', 'user_id', 'notes',
        'department_id', 'dti_folio', 'signer_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function signer()
    {
        return $this->belongsTo(Signer::class);
    }

    public function details()
    {
        return $this->hasMany(ConsumableVoucherDetail::class, 'voucher_id');
    }
}
