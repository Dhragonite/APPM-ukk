@section('style')
<meta content="" name="description">
<meta content="" name="keywords">

  <!-- Favicons -->
<link href="{{ asset('maundy') }}/assets/img/favicon.png" rel="icon">
<link href="{{ asset('maundy') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('maundy') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('maundy') }}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="{{ asset('maundy') }}/assets/css/style.css" rel="stylesheet">

@endsection

@section('content')
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Aplikasi Pelaporan Pengaduan Masyarakat</h1>
      <p>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</p>
      <p>Sebelum melakukan pelaporan silahkan melakukan login/register terlebih dahulu</p>
      

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Illo velit quae dolorem voluptate pireda notila set. Corrupti voluptatum tempora iste ratione deleniti corrupti nostrum ut</p>
        </div>

        <div class="row mt-2">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
@endsection

@section('script')
 <!-- Vendor JS Files -->
<script src="{{ asset('maundy') }}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{ asset('maundy') }}/assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
<script src="{{ asset('maundy') }}/assets/js/main.js"></script>
@endsection

