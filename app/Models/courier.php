<?php

namespace App\Models;
use App\Events\CourierCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class courier extends Model
{


    protected $fillable = [
       'shipper_name',
            'shipper_email',
            'shipper_address',
             'receiver_name',
            'receiver_email',
            'receiver_address',
             'tracking_number',
            'origin',
            'destination',
            'weight',
            'freight_type',
            'departure_date',
            'package',
            'carrier',
            'shipment_mode',
            'payment_mode',
            'type_of_shipment',
            'quantity',
            'expected_delivery_date',
            'pickup_date',
            'pickup_time',
            'status',
            'current_location',
            'comment',
    ];


 // Define relationship with ShipmentHistory
    public function histories()
    {
        return $this->hasMany(history::class);
    }


    protected $dispatchesEvents = [
        'created' => CourierCreated::class,
    ];
 
    use HasFactory;

    use Searchable;



    public function toSearchableArray(): array
    {
        $array = $this->toArray();
 
        // Customize the data array...
 
        return $array;
    }
}


