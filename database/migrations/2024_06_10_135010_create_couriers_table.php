<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('sender_name');
            $table->string('sender_email');  
            $table->string ('sender_address'); 
            $table->string('receiver_name');
            $table->string ('receiver_email');
            $table->string('receiver_address'); 
            $table->string('tracking_number');
            $table->string('shipment_type');
            $table->string('shipment_weight'); 
            $table->string('invoice_number');  
            $table->string ('quantity');
            $table->string('booking_mode');
            $table->string ('delivery_mode'); 
            $table->string('departure_date');
            $table->string('destination_office'); 
            $table->string ('pickup_date'); 
            $table->string ('status');
            $table->string ('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriers');
    }
};
