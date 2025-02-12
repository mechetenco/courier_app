<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class history extends Model
{
    use HasFactory;

    protected $fillable = [
    'courier_id',
    'pickup_date',
            'pickup_time',
            
            'current_location',
            'status',
            'comment',
    ];

    // Define relationship with courier
    public function courier()
    {
        return $this->belongsTo(courier::class);
    }
}
