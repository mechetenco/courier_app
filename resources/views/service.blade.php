<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - Courier App </title>
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
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

 
</head>

<body class="services-page">

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
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('service') }}" class="active">Services</a></li>
          
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
        <h1>Services</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a   href={{ route('home') }}>Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<div style="text-align: right">
    <div id="ytWidget"><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=tr&widgetTheme=dark&autoMode=true" type="text/javascript" ></script>
</div>
</div>
     <!-- Featured Services Section -->
     <section id="featured-services" class="featured-services section">
  
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
            <div>
              <h4 class="title">Packaged goods transport</h4>
              <p class="description">Focuses on the packaging requirements of goods in transit, in particular for items traveling overland by road. </p>
              
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
            <div>
              <h4 class="title">Multimodial Transport</h4>
              <p class="description">Combined rail transport is particularly well suited to the shipping of hazardous goods since it reduces risk.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
            <div>
              <h4 class="title">Warehousing and Storage</h4>
              <p class="description">Courier App is able to offer heated or unheated warehous solutions both for short-term and for log-term storage.</p>
              
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->


    <!-- Services Section -->
    <section id="services" class="services section">
  
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Services<br></span>
        <h2>Our ServiceS</h2>
        
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-1.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3>Warehousing and storage</h3>
              <p>Courier App is able to offer heated or unheated
                warehouse solutions both for short-term and for long-term storage</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-2.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Logistics solutions</a></h3>
              <p>Smart and sustainable business requires the skills of logistics experts who
                are able to think ahead.
                </p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-3.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Cargo</a></h3>
              <p>We deliver all kinds of cargo at the lowest cost possible</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-4.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Trucking</a></h3>
              <p>We have trucks that deliver at all locations across the globe</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-5.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3>Packaged goods transport</h3>
              <p>Focuses on the packaging requirements of goods in transit, in particular
                for items traveling overland by road or rail.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/service-6.jpg') }}" alt="" class="img-fluid">
              </div>
              <h3><a href="#" class="stretched-link">Warehousing</a></h3>
              <p>Courier App is able to offer heated or unheated
                warehouse solutions both for short-term and for long-term storage.
                </p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">
  
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Features</span>
        <h2>Our Features</h2>
        
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/features-1.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Packaged goods transport.</h3>
            <p class="fst-italic">
              We have developed a network of correspondents in groupage and full loads that allows us to move and store your
goods throughout Europe.
Countries like Germany, France, Portugal, United Kingdom, Italy and Benelux have been the first to consolidate in
recent years to provide services with Poland, Czech Rep., Russia, Slovenia, Hungary and the Baltic countries;
offering daily departures for some of them and weekly departures for others.
Our technical and human teams are prepared for transporting conventional goods as well as ADR classified
chemicals and goods requiring temperature control during transport; being able to offer storage solutions for
such goods.
We offer outsourcing of logistics services to our clients, from their production chain to delivery to the final destination.
            </p>
            
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/img/features-2.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Forwarding services</h3>
            <p class="fst-italic">
              With our complex network of branches and agents in Europe and overseas, we can provide you with global freight
              forwarding services. Goods are transported by road, rail, water, and air. Agents trained in air safety ensure the
              smooth handling of the air freight.
              From the order confirmation, to project cargo , through to customs clearance, our competent multilingual team
              will be happy to advise you personally. We are certified to ISO 9001:2008 and ISO 14001:2004.
            </p>
            
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="{{ asset('assets/img/features-3.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Multimodal transport</h3>
            <p>When it comes to multimodal transport services, Courier App has connections you can trust.
              Our customers have been placing their trust in the experience and quality standards of Global Express Service
              Delivery’s Multimodal Transport Services department for the past 5 years. The Multimodal Transport Services
              department handles national and international transports, mainly by rail or inland waterway. The Multimodal
              Transport Services department not only optimises the transport chains to the North Ports and the West Ports, but
              also to the South Ports. The integration of all Courier App locations means that the majority of
              transported containers are delivered or collected using our own trucks. This guarantees consistently high quality
              of the supply chain.
              Our customers in this transport segment appreciate the advantage of having only one “port of call”.
              </p>
            
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
            <img src="{{ asset('assets/img/features-4.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
            <h3>Sea and air freight</h3>
            <p class="fst-italic">
              By using a combination of sea and air freight, you bring added flexibility to
your supply chain. Agility helps companies find the right cost-time balance,
maximizing the affordability of ocean movements and the speed of air
shipments. We have partnerships with the world’s most reliable sea and air
carriers, so we can offer seamless shipping from origin to destination, for one
rate, under a single document.
Our freight professionals identify the forwarding and logistics services that
are best to help you meet your objectives. With personal service and a
broader range of freight products, we make sure your supply chain finds the best balance between urgency and cost.
            </p>
            
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Features Section -->

   
      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section dark-background">
  
        <img src="{{ asset('assets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-1.jpeg') }}" class="testimonial-img" alt="">
                  <h3>Hakim Musa</h3>
                  <h4>Business Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Courier App is great to work with. They have
                      many locations, competitive rates, and their staff is excellent will go
                      above and beyond for their partners. I look forward to working with
                      them in the future. Thank you!</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                  <h3>Sara Mark</h3>
                  <h4>Fashion Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>We have always found them to be highly professional and reliable,
                      and have assisted us in delivering a high standard service to our
                      customers. Courier App have been a valuable
                       supplier and will continue to be so.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                  <h3>Jenat Owen</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>We have been doing business with Courier App
                      for many years and I would say the thing I like most about Global
                      Express Service Delivery is the staff. Whenever I get rates, request a
                      load from dispatch or deal with sales, everyone is always courteous
                       and quick to respond to our needs.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                  <h3>Harry Kim</h3>
                  <h4>Exporter</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>I hauled my first load with Courier App in the
                      early 1990’s. I have continued to work with Global Express Service
                      Delivery because of the great job they do for me! The Ohio II office
                      has been committed to keeping me rolling consistently with the
                      best available freight they can offer. I look forward to continued
                      success with my Courier App partnership.
                      </span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                  <h3>Tylor Koman</h3>
                  <h4>Ceo</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Thank you for delivering the chairs to us so quickly. Your delivery
                      guys were most helpful and courteous. You have been a pleasure to
                      deal with and we will not hesitate to use your services again or
                      recommend you.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section><!-- /Testimonials Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="40532" data-purecounter-duration="1" class="purecounter"></span>
          <p>Customers</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="91" data-purecounter-duration="1" class="purecounter"></span>
          <p>Offices</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="73" data-purecounter-duration="1" class="purecounter"></span>
          <p>Country</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="5200" data-purecounter-duration="1" class="purecounter"></span>
          <p>Workers</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->
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