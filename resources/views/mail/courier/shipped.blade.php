<x-mail::message>
    <img src="{{ asset('assets/img/header.png') }}" class="img" alt="header">
    
Hello <b style="color:blue;"> {{ $courier['receiver_name'] }}</b>,

your percel has been shipped. You can track it using the code below. Your Tracking Code is <b style="color:blue;"> 
{{ $courier['tracking_number'] }}</b>

below is the your shippment details:
<x-mail::table>
    
    
<h2>Shipper Informations</h2>
<table>
  <tr>
    <th>Shipper Name</th>  <td>{{ $courier['shipper_name'] }}</td>
    </tr>
    <tr>
    <th>Shipper Email</th><td>{{ $courier['shipper_email'] }}</td>
    </tr>
    <tr>
   <th>Shipper Address</th><td>{{ $courier['shipper_address'] }}</td>
  </tr>
 
  </table>
  
  
  <table>
  
  <h2>Receiver Informations</h2>
   <tr>
    <th>Receiver Name</th><td>{{ $courier['receiver_name'] }}</td>
    </tr>
    <tr>
    <th>Receiver Email</th><td>{{ $courier['receiver_email'] }}</td>
    </tr>
    <tr>
    <th>Receiver Email</th> <td>{{ $courier['receiver_address'] }}</td>
   
  </tr>
  
  </table>
  
  
  <table>
  <h2>Shipment Informations</h2>
  
  
   <tr>
    <th>Tracking Number</th> <td>{{ $courier['tracking_number'] }}</td>
    </tr>
    <tr>
    <th>Origin</th> <td>{{ $courier['origin'] }}</td>
    </tr>
    <tr>
    <th>Destination</th><td>{{ $courier['destination'] }}</td>
   
  </tr>
  
  
   <tr>
    <th>Weight</th><td>{{ $courier['weight'] }}</td>
    </tr>
    <tr>
    <th>Type of Freight</th><td>{{ $courier[ 'freight_type'] }}</td>
    </tr>
    <tr>
    <th>Depature Date</th> <td>{{ $courier['departure_date'] }}</td>
   
  </tr>
 
  
   <tr>
    <th>Package</th><td>{{ $courier['package'] }}</td>
    </tr>
    <tr>
    <th>Carrier</th><td>{{ $courier['carrier'] }}</td>
    </tr>
    <tr>
    <th>Shipment Mode</th><td>{{ $courier['shipment_mode'] }}</td>
   
  </tr>
  
  
   <tr>
    <th>Payment Mode</th><td>{{ $courier['payment_mode'] }}</td>
    </tr>
    <tr>
    <th>Type of Shipment</th><td>{{ $courier['type_of_shipment'] }}</td>
    </tr>
    <tr>
    <th>Quantity</th><td>{{ $courier['quantity'] }}</td>
   
  </tr>
  
  
  
  
   <tr>
    <th>Expected Delivery Date</th><td>{{ $courier['expected_delivery_date'] }}</td>
    </tr>
    <tr>
    <th>Pickup Date</th><td>{{ $courier['pickup_date'] }}</td>
    </tr>
    <tr>
    <th>Pickup Time</th><td>{{ $courier['pickup_time'] }}</td>
   
  </tr>
 
  
   <tr>
    <th>Status</th><td>{{ $courier['status'] }}</td>
    </tr>
    <tr>
    <th>Current Location</th> <td>{{ $courier['current_location'] }}</td>
    </tr>
    <tr>
    <th>Comment</th><td>{{ $courier['comment'] }}</td>
   
  </tr>
 
</table>

    
    </x-mail::table>


<x-mail::button :url="'percel_checking'">
Track Your Percel
</x-mail::button>

Thank your for choosing us!!!!

<br>
{{ config('app.name') }}
</x-mail::message>
