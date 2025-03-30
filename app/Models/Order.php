<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'customer_id',
        'material_id',
        'date',
        'status',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function material()
    {
        return $this->belongsTo(Materials::class);
    }
}
