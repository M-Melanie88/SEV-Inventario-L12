<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetails extends Model
{
    protected $fillable = [
        'equipment_type_id', 'description', 'brand', 'model',
        'quantity', 'serial_number', 'inventory_code', 'remarks'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function equipmentType()
    {
        return $this->belongsTo(EquipmentType::class);
    }
}
