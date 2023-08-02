<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'type',// [card,cash,pix]
        'status', // [Em Andamento, Finalizado, Cancelado]
     
    ];

    public function ordersPayment(){
        return $this->belongsToMany(Order::class);
    }
}
