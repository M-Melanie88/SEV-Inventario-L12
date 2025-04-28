<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsumableVoucherDetail extends Model
{
    protected $fillable = ['voucher_id', 'consumable_type_id', 'quantity'];

    public function voucher()
    {
        return $this->belongsTo(ConsumableVoucher::class);
    }

    public function consumableType()
    {
        return $this->belongsTo(ConsumableType::class);
    }
}
