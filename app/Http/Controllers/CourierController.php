<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response; 
use App\Models\courier;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourierShipped;
use App\Mail\CourierUpdated;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $couriers = courier :: paginate(5);

       
       
       
       
       
       
        
    return view('couriers.index', compact('couriers'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('couriers.create');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'shipper_name'  => 'required|string|max:50',
            'shipper_email'  => 'required|string',
            'shipper_address'  => 'required|string',
             'receiver_name'  => 'required|string',
            'receiver_email'  => 'required|string',
            'receiver_address'  => 'required|string',
             'tracking_number'  => 'required|unique:couriers,tracking_number|string|max:10',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'weight' => 'required|string',
            'freight_type'  => 'required|string',
            'departure_date' => 'required',
            'package'  => 'required|string',
            'carrier' => 'required|string',
            'shipment_mode' => 'required|string',
            'payment_mode'  => 'required|string',
            'type_of_shipment' => 'required|string',
            'quantity'  => 'required|string',
            'expected_delivery_date' => 'required',
            'pickup_date'  => 'required',
            'pickup_time' => 'required',
            'status' => 'required|string',
            'current_location' => 'string',
            'comment' => 'required|string|max:255',
        ]);
 
        $request->user()->couriers()->create($validated);

        
        
        Mail::to($request->receiver_email)->send(new CourierShipped($validated));
 
         return redirect()->route('couriers.index')->with('success', 'courier created successfully and email sent to the reciver');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $courier = courier::with('histories')->find($id);
        return view('couriers.show', compact('courier'));
    }
    
    
   
    /* search */

    
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courier = courier::find($id);
    return view('couriers.edit', compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        
        $validated = $request->validate([
          
            'shipper_name'  => 'required|string|max:50',
            'shipper_email'  => 'required|string',
            'shipper_address'  => 'required|string',
             'receiver_name'  => 'required|string',
            'receiver_email'  => 'required|string',
            'receiver_address'  => 'required|string',
             'tracking_number' => 'required|string',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'weight' => 'required|string',
            'freight_type'  => 'required|string',
            'departure_date' => 'required',
            'package'  => 'required|string',
            'carrier' => 'required|string',
            'shipment_mode' => 'required|string',
            'payment_mode'  => 'required|string',
            'type_of_shipment' => 'required|string',
            'quantity'  => 'required|string',
            'expected_delivery_date' => 'required',
            'pickup_date'  => 'required',
            'pickup_time' => 'required',
            'status' => 'required|string',
            'current_location' => 'string',
            'comment' => 'required|string|max:255',
        ]);
          $courier = courier::find($id);
          $courier->update($validated);
          
           history::create([
            'courier_id' => $courier->id,
            
            
             'pickup_date'  => $request->input('pickup_date'),
            'pickup_time'  => $request->input('pickup_time'),
            
            'current_location'  => $request->input('current_location'),
            'status'  => $request->input('status'),
            'comment'  => $request->input('comment'),
           
        ]);
          
          
          Mail::to($courier->receiver_email)->send(new CourierUpdated($validated));
          
          

          
          return redirect()->route('couriers.index')
            ->with('success', 'courier updated successfully and email sent to the reciver');
            
           
        }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $courier = courier::find($id);
        $courier->delete();
        return redirect()->route('couriers.index')
          ->with('success', 'courier deleted successfully');
    }
}

