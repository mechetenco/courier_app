<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Percel Details - Courier App </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  
</head>

<body class="get-a-quote-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a   href={{ route('home') }} class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{ asset('assets/img/logo.png') }}" alt=""> 
        <h1 class="sitename">Courier App</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a   href={{ route('home') }}>Home<br></a></li>
          <li><a href="{{ route('about') }}" class="active">About</a></li>
          <li><a href="{{ route('service') }}">Services</a></li>
          
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('percel_checking') }}">Track Percel</a>

    </div>
    
    <script src="//code.tidio.co/dbnebbmff8jtdkp51mdhykbivcs3kidl.js" async></script>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Percel Details</h1>
        
        <nav class="breadcrumbs">
          <ol>
            <li><a   href={{ route('home') }}>Home</a></li>
            <li class="current">Percel Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    
    <div style="text-align: right">
    <div id="ytWidget"><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=tr&widgetTheme=dark&autoMode=true" type="text/javascript" ></script>
</div>
</div>
    
    <div class="container mt-5">
        <div class="row">
            @forelse ($courier as $courier)
                <div class="col-sm">
                    <div class="card">
                       
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
                            <label for="departure_date" style="color:blue;font-weight:bold;">Departure Date</label>
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
                             <label for="status" style="color:blue;font-weight:bold;">Status</label>
                            
                        <p class="card-text">{{ $courier->status }}</p>
                    </div>
                    
                    
                    
                    <div class="card-body">
                               <label for="current_location" style="color:blue;font-weight:bold;">Current location</label>
                        <p class="card-text">{{ $courier->current_location }}</p>
                    </div>
                    
                        <div class="card-body">
                             <label for="comment" style="color:blue;font-weight:bold;">Comment</label>
                        <p class="card-text">{{ $courier->comment }}</p>
                    </div>

                    @empty
                    <div class="card-body">Courier Not Found.</div>
                    @endforelse
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                   
                                </div>
                                <div class="col-sm">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
    </div>
</main>

<footer id="footer" class="footer dark-background">
  
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-about">
        <a   href={{ route('home') }} class="logo d-flex align-items-center">
          <span class="sitename">Courier App</span>
        </a>
        
        <div class="social-links d-flex mt-4">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About us</a></li>
          <li><a href="{{ route('service') }}">Services</a></li>
         
        </ul>
      </div>

      

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        
       
        <p>United Kingdom</p>
        
        <p><strong>Email:</strong> <span>support@global-express-service-delivery.com</span></p>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Courier App</strong> <span>All Rights Reserved</span></p>
    
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>