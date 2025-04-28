<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    protected $fillable = [
        'loan_id', 'equipment_type_id', 'description', 'brand', 'model',
        'quantity', 'serial_number', 'inventory_number', 'notes'
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
