<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Courier App </title>
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

<body class="about-page">

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
        <h1>About</h1>
       
        <nav class="breadcrumbs">
          <ol>
            <li><a   href={{ route('home') }}>Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<div style="text-align: right">
    <div id="ytWidget"><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=tr&widgetTheme=dark&autoMode=true" type="text/javascript" ></script>
</div>
</div>
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('assets/img/about.jpg" class="img-fluid') }}" alt="">
           
          </div>

          <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              At Courier App, we know time is of the essence. We have
              used our legacy Truckload service in the Mid-Atlantic and Midwest regions to
              shape what our company is today. In addition to Truckload (TL) services, we
              have expanded our reach on the asset based side to include expedited
              services, reverse logistics and volume Less-Than-Truckload (LTL) shipments;
              as well as a compliment of non-asset based solutions to service our
              customers’ needs throughout North America.
              Our family-run business values hard work, respect, commitment and
              teamwork and our workplace is characterized by the high energy,
              enthusiasm and effort of our employees who thrive in this positive
              environment. We are committed to providing our customers with first-rate
              service, which starts with our employees’ dedication to our enterprise of services.
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  
                  <p>The commitment we have to safety and security is unmatched. We pride
                    ourselves on posting industry leading Compliance, Safety, Accountability
                    (CSA) scores, as well as an industry low claims ratio to give you and your
                    customers that piece of mind when your freight is in our hands. Our primary
                    obligation to our customers and our community starts with the hiring and
                    training of our team members and our pledge to put the safest drivers and
                    equipment on the road.
                    From our experienced drivers to our knowledgeable office staff, Global
                    Express Service Delivery has the desire and commitment to work hand-inhand to develop transportation solution that is truly customized to your
                     needs</p>
                </div>
              </li>
              
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Our Team<br></span>
        <h2>Our Team</h2>
        
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter Burns</h4>
                <span>CEO</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Swift Jhinson</h4>
                <span>Marketing</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Alex Anderson</h4>
                <span>Accountant</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

 
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