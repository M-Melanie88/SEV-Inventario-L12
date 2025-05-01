<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailVoucher extends Model
{
    protected $fillable = ['id_voucher', 'id_consumable', 'quantity'];

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }

    public function consumableType()
    {
        return $this->belongsTo(ConsumableType::class);
    }
}
