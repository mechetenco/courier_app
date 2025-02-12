<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit courier</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="btn btn-sm btn-secondary" href={{ route('dashboard') }}>Dashboard</a>
            <a class="btn btn-sm btn-primary" href={{ route('couriers.index') }}>couriers</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('couriers.create') }}>Add courier</a>    
                </div>
            </div>
    </nav>
    
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update courier</h3>
                
                  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



                <form action="{{ route('couriers.update', $courier->id) }}" method="post">
                    @csrf
                    @method('patch')
                   
<br>
<!---Shipper Informations -->
<div class="form-group">
<h2>Shipper Informations</h2>
</div>
<!--Shipper info -->
<br>
        <!-- shipper Name -->
        <div class="form-group">
            <label for="shipper_name" style="color:blue;font-weight:bold;">Shipper Name</label>
            <input id="shipper_name" class="form-control" type="text" name="shipper_name" value="{{ $courier->shipper_name }}" required autofocus autocomplete="shipper_name" />
            <input-error :messages="$errors->get('shipper_name')" class="mt-2" />
        </div>
<br>
        <!-- shipper Email Address -->
        <div class="form-group">
            <label for="shipper_email" style="color:blue;font-weight:bold;">Shipper Email</label>
            <input id="shipper_email" class="form-control" type="email" name="shipper_email" value="{{ $courier->shipper_email }}" required autocomplete="shipper_email" />
            <input-error :messages="$errors->get('shipper_email')" class="mt-2" />
        </div>
<br>
        <!-- shipper-Address -->
        <div class="form-group">
            <label for="shipper_address" style="color:blue;font-weight:bold;">Shipper Address</label>
            <input id="shipper_address" class="form-control" type="text" name="shipper_address" value="{{ $courier->shipper_address }}" required autocomplete="shipper_address" />
            <input-error :messages="$errors->get('shipper_address')" class="mt-2" />
        </div>

      <br>  <!-- end of shipper Information -->
        
        
        

<!---Receiver Informations -->
<div class="form-group">
<h2>Receiver Informations</h2>
</div>
<!-- Receiver Informations -->
<br>
 <!-- Receiver Name -->
 <div class="form-group">
    <label for="receiver_name" style="color:blue;font-weight:bold;">Receiver Name</label>
    <input id="receiver_name" class="form-control" type="text" name="receiver_name" value="{{ $courier->receiver_name }}" required autofocus autocomplete="receiver_name" />
    <input-error :messages="$errors->get('receiver_name')" class="mt-2" />
</div>
<br>
<!-- receiver Email Address -->
<div class="form-group">
    <label for="receiver_email" style="color:blue;font-weight:bold;">Receiver Email</label>
    <input id="receiver_email" class="form-control" type="email" name="receiver_email" value="{{ $courier->receiver_email }}" required autocomplete="receiver_email" />
    <input-error :messages="$errors->get('receiver_email')" class="mt-2" />
</div>
<br>
<!-- Receiver-Address -->
<div class="form-group">
    <label for="receiver_address" style="color:blue;font-weight:bold;">Receiver Address</label>
    <input id="receiver_address" class="form-control" type="text" name="receiver_address" value="{{ $courier->receiver_address }}" required autocomplete="receiver_address" />
    <input-error :messages="$errors->get('receiver_address')" class="mt-2" />
</div>
<!-- end of Reciever Informations -->

<br>

<!--- Shipment Informations -->
<div class="form-group">
<h2>Shipment Informations</h2>
</div>



<!-- Tracking Number-->
<div class="form-group">
    <label for="tracking_number" style="color:blue;font-weight:bold;">Tracking Number</label>
    <input id="tracking_number" class="form-control" type="text" name="tracking_number" value="{{ $courier->tracking_number }}" required autocomplete="tracking_number" placeholder="enter the percel origin " />
    <input-error :messages="$errors->get('tracking_number')" class="mt-2" />
</div>
<br>
<!-- origin -->
<div class="form-group">
    <label for="origin" style="color:blue;font-weight:bold;">Origin</label>
    <input id="origin" class="form-control" type="text" name="origin" value="{{ $courier->origin }}" required autocomplete="origin" placeholder="enter the percel origin " />
    <input-error :messages="$errors->get('origin')" class="mt-2" />
</div>
<br>
<!-- destination -->
<div class="form-group">
    <label for="destination" style="color:blue;font-weight:bold;">Destination</label>
    <input id="destination" class="form-control" type="text" name="destination" value="{{ $courier->destination }}" required autocomplete="destination" placeholder="enter the percel destination " />
    <input-error :messages="$errors->get('destination')" class="mt-2" />
</div>

<br>

<!-- shipment weight -->
<div class="form-group">
    <label for="weight" style="color:blue;font-weight:bold;">Weight</label>
    <input id="weight" class="form-control" type="text" name="weight" value="{{ $courier->weight }}" required autocomplete="weight" placeholder="10kg" />
    <input-error :messages="$errors->get('weight')" class="mt-2" />
</div>
<br>
<!-- Shipment Type -->

<div class="form-group">
    <label for="freight_type" style="color:blue;font-weight:bold;">Type of Freight</label>
    <input id="freight_type" class="form-control" type="text" name="freight_type" value="{{ $courier->freight_type }}" required autocomplete="freight_type" placeholder="" />
    <input-error :messages="$errors->get('freight_type')" class="mt-2" />
</div>

<br>
<!-- Departure Date -->
<div class="form-group">
    <label for="departure_date" style="color:blue;font-weight:bold;">Departure Date</label>
    <input id="departure_date" class="form-control" type="date" name="departure_date" value="{{ $courier->departure_date }}" required autocomplete="departure_date" />
    <input-error :messages="$errors->get('departure_date')" class="mt-2" />
</div>
<br>

<!-- package -->
<div class="form-group">
    <label for="package" style="color:blue;font-weight:bold;">Package</label>
    <input id="package" class="form-control" type="text" name="package" value="{{ $courier->package }}" required autocomplete="package" placeholder="" />
    <input-error :messages="$errors->get('package')" class="mt-2" />
</div>

<br>
<!-- carrier -->
<div class="form-group">
    <label for="carrier" style="color:blue;font-weight:bold;">Carrier</label>
    <input id="carrier" class="form-control" type="text" name="carrier" value="{{ $courier->carrier }}" required autocomplete="carrier" placeholder="" />
    <input-error :messages="$errors->get('carrier')" class="mt-2" />
</div>
<br>

<!-- Shipment mode -->
<div class="form-group">
    <label for="shipment_mode" style="color:blue;font-weight:bold;">Shipment Mode</label>
    <input id="shipment_mode" class="form-control" type="text" name="shipment_mode" value="{{ $courier->shipment_mode }}" required autocomplete="shipment_mode" placeholder="" />
    <input-error :messages="$errors->get('shipment_mode')" class="mt-2" />
</div>


<br>
<!-- Payment mode -->
<div class="form-group">
    <label for="payment_mode" style="color:blue;font-weight:bold;">Payment Mode</label>
    <input id="payment_mode" class="form-control" type="text" name="payment_mode" value="{{ $courier->payment_mode }}" required autocomplete="payment_mode" placeholder="" />
    <input-error :messages="$errors->get('payment_mode')" class="mt-2" />
</div>

<br>


<!-- Type of shipment-->
<div class="form-group">
    <label for="type_of_shipment" style="color:blue;font-weight:bold;">Type of Shipment</label>
    <input id="type_of_shipment" class="form-control" type="text" name="type_of_shipment" value="{{ $courier->type_of_shipment }}" required autofocus autocomplete="type_of_shipment" placeholder="" />
    <input-error :messages="$errors->get('type_of_shipment')" class="mt-2" />
</div>
<br>


<!-- Quantity -->
<div class="form-group">
    <label for="quantity" style="color:blue;font-weight:bold;">Quantity</label>
    <input id="quantity" class="form-control" type="text" name="quantity" value="{{ $courier->quantity }}" required autocomplete="quantity" placeholder="10 parcels" />
    <input-error :messages="$errors->get('quantity')" class="mt-2" />
</div>
<br>

<!-- Expected delivery Date-->
<div class="form-group">
    <label for="expected_delivery_date" style="color:blue;font-weight:bold;">Expected Delivery Date</label>
    <input id="expected_delivery_date" class="form-control" type="date" name="expected_delivery_date" value="{{ $courier->expected_delivery_date }}" required autofocus autocomplete="expected_delivery_date" />
    <input-error :messages="$errors->get('expected_delivery_date')" class="mt-2" />
</div>
<br>

<!-- Pickup Date-->
<div class="form-group">
    <label for="pickup_date" style="color:blue;font-weight:bold;">Pickup Date</label>
    <input id="pickup_date" class="form-control" type="date" name="pickup_date" value="{{ $courier->pickup_date }}" required autofocus autocomplete="pickup_date" />
    <input-error :messages="$errors->get('pickup_date')" class="mt-2" />
</div>

<br>
<!-- Pickup Time-->
<div class="form-group">
    <label for="pickup_time" style="color:blue;font-weight:bold;">Pickup Time</label>
    <input id="pickup_time" class="form-control" type="text" name="pickup_time" value="{{ $courier->pickup_time }}" required autofocus autocomplete="pickup_time" />
    <input-error :messages="$errors->get('pickup_time')" class="mt-2" />
</div>


<br>














<!-- Status -->
<div class="form-group">
    <label for="status" style="color:blue;font-weight:bold;">Status</label>
    <input id="status" class="form-control" type="text" name="status" value="{{ $courier->status }}" required autocomplete="status" />
    <input-error :messages="$errors->get('status')" class="mt-2" />
</div>



<br>

<!-- current location -->
<div class="form-group">
    <label for="current_location" style="color:blue;font-weight:bold;">Current location</label>
    <input id="current_location" class="form-control" type="text" name="current_location" value="{{ $courier->current_location }}" required autocomplete="current_location" />
    <input-error :messages="$errors->get('current_location')" class="mt-2" />
</div>


<br>
<!-- comment -->
<div class="form-group">
     <label for="comment" style="color:blue;font-weight:bold;">Comment</label>
    <textarea
                name="comment"
                placeholder="{{ __('comment about the status of the delivery') }}"
                class="form-control" value="{{ $courier->comment }}"></textarea>
</div>


<br>
<!-- End of shipment informations -->
        
<br>
                                    
                                  



<!-- End of shipment informations -->
                    <button type="submit" class="btn btn-primary">Update courier</button>
                    
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>