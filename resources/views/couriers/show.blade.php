<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>courier</title>
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
    <div class="container mt-5">
        <div class="row">
           
                <div class="col-sm">
                    <div class="card">
                        
                          <h2>Shipment History</h2>
<table class="table">
    <thead>
        <tr>
             <th scope="col">Pickup Date</th>
             <th scope="col">Pickup Time</th>
             <th scope="col">Current Location</th>
            <th scope="col">Status</th>
            <th scope="col">Comment</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courier->histories as $history)
            <tr>
                <td>{{ $history->pickup_date }}</td>
                <td>{{ $history->pickup_time }}</td>
                 <td>{{ $history->current_location }}</td>
                  <td>{{ $history->status }}</td>
                   <td>{{ $history->comment }}</td>
                <td>{{ $history->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
                        
                        
                        
                        <!---Shipper Informations -->
<div class="form-group">
<h2>Shipper Informations</h2>
</div>
                       
                        <div class="card-body">
                           <label for="shipper_name" style="color:blue;font-weight:bold;">Shipper Name</label>
                        <p class="card-text">{{ $courier->shipper_name }}</p>
                    </div>
                        <div class="card-body">
                           <label for="shipper_email" style="color:blue;font-weight:bold;">Shipper Email</label>
                        <p class="card-text">{{ $courier->shipper_email }}</p>
                    </div>
                        <div class="card-body">
                            <label for="shipper_address" style="color:blue;font-weight:bold;">Shipper Address</label>
                        <p class="card-text">{{ $courier->shipper_address }}</p>
                    </div>
                    
                    
                    
                    <!---Receiver Informations -->
<div class="form-group">
<h2>Receiver Informations</h2>
</div>
                        <div class="card-body">
                           <label for="receiver_name" style="color:blue;font-weight:bold;">Receiver Name</label>
                        <p class="card-text">{{ $courier->receiver_name }}</p>
                    </div>
                        <div class="card-body">
                             <label for="receiver_email" style="color:blue;font-weight:bold;">Receiver Email</label>
                        <p class="card-text">{{ $courier->receiver_email }}</p>
                    </div>
                        <div class="card-body">
                             <label for="receiver_address" style="color:blue;font-weight:bold;">Receiver Address</label>
                        <p class="card-text">{{ $courier->receiver_address }}</p>
                    </div>
                    
                    
                    
<!--- Shipment Informations -->
<div class="form-group">
    
  
    
    
    
<h2>Shipment Informations</h2>
</div>
                        <div class="card-body">
                             <label for="tracking_number" style="color:blue;font-weight:bold;">Tracking Number</label>
                        <p class="card-text">{{ $courier->tracking_number }}</p>
                    </div>
                    
                    
                        <div class="card-body">
                           <label for="origin" style="color:blue;font-weight:bold;">Origin</label>
                        <p class="card-text">{{ $courier->origin }}</p>
                    </div>
                        <div class="card-body">
                            <label for="destination" style="color:blue;font-weight:bold;">Destination</label>
                        <p class="card-text">{{ $courier->destination }}</p>
                    </div>
                        <div class="card-body">
                           <label for="weight" style="color:blue;font-weight:bold;">Weight</label>
                        <p class="card-text">{{ $courier->weight }}</p>
                    </div>
                        <div class="card-body">
                            <label for="freight_type" style="color:blue;font-weight:bold;">Type of Freight</label>
                        <p class="card-text">{{ $courier->freight_type }}</p>
                    </div>
                        
                        <div class="card-body">
                            <label for="departure_date">Departure Date</label>
                        <p class="card-text">{{ $courier->departure_date }}</p>
                    </div>
                        <div class="card-body">
                            <label for="package" style="color:blue;font-weight:bold;">Package</label>
                        <p class="card-text">{{ $courier->package }}</p>
                    </div>
                        <div class="card-body">
                             <label for="carrier" style="color:blue;font-weight:bold;">Carrier</label>
                        <p class="card-text">{{ $courier->carrier }}</p>
                    </div>
                    
                    
                     <div class="card-body">
                             <label for="shipment_mode" style="color:blue;font-weight:bold;">Shipment Mode</label>
                        <p class="card-text">{{ $courier->shipment_mode }}</p>
                    </div>
                    
                    
                     <div class="card-body">
                             <label for="payment_mode" style="color:blue;font-weight:bold;">Payment Mode</label>
                        <p class="card-text">{{ $courier->payment_mode }}</p>
                    </div>
                    
                     <div class="card-body">
                             <label for="type_of_shipment" style="color:blue;font-weight:bold;">Type of Shipment</label>
                        <p class="card-text">{{ $courier->type_of_shipment }}</p>
                    </div>
                    
                    
                    <div class="card-body">
                             <label for="quantity" style="color:blue;font-weight:bold;">Quantity</label>
                        <p class="card-text">{{ $courier->quantity }}</p>
                    </div>
                    
                    
                    <div class="card-body">
                              <label for="expected_delivery_date" style="color:blue;font-weight:bold;">Expected Delivery Date</label>
                        <p class="card-text">{{ $courier->expected_delivery_date }}</p>
                    </div>
                    
                    
                    
                    
                      <div class="card-body">
                               <label for="pickup_date" style="color:blue;font-weight:bold;">Pickup Date</label>
                        <p class="card-text">{{ $courier->pickup_date }}</p>
                    </div>
                    
                    
                    
                      <div class="card-body">
                              <label for="pickup_time" style="color:blue;font-weight:bold;">Pickup Time</label>
                        <p class="card-text">{{ $courier->pickup_time }}</p>
                    </div>
                    
                        <div class="card-body">
                            <label for="status">Courier Status</label>
                        <p class="card-text">{{ $courier->status }}</p>
                    </div>
                    
                    
                    
                    <div class="card-body">
                               <label for="current_location" style="color:blue;font-weight:bold;">Current location</label>
                        <p class="card-text">{{ $courier->current_location }}</p>
                    </div>
                    
                        <div class="card-body">
                        <p class="card-text">{{ $courier->comment }}</p>
                    </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('couriers.edit', $courier->id) }}"
                                        class="btn btn-primary btn-sm">UPDATE</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('couriers.destroy', $courier->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')<br><br><br>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
    </div>
</body>

</html>