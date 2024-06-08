<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_price']; // Add other fields as needed

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
