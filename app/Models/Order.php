<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'food_id',
        'drink_id'
    ];


    public function users(){
        return $this->belongsTo(User::class);
    }
    public function payments(){
        return $this->hasOne(Payment::class);
    }
}
