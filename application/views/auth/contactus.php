<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/gijgo.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <!-- bradcam_area  -->
  <div class="bradcam_area bradcam_bg_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Contact Us</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ bradcam_area  -->

  <!-- ================ contact section start ================= -->
  <section class="contact-section">
    <div class="container">
      <div class="d-none d-sm-block">
        <div class="d-none d-lg-block">
          <div class="row align-items-center">
            <div class="col-xl-4 col-lg">
              <div class="single_location">
                <ul>
                  <li>
                    <h2>Our Location<i class="fas fa-crosshairs fa-fw" style='font-size:30px;color:red'></i></h2>
              </div>
              <div class="map">
                <a href="https://www.google.com/maps/place/Ridho+Makmur+Sentosa/@-6.2638915,106.8664598,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f2f905759b77:0x5fd8b49fcca9f5dd!8m2!3d-6.2638968!4d106.8686485">
                  <span class="border border-secondary rounded">
                    <img src="<?= base_url('assets/img/about/googlemapspic.png'); ?>" alt="">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <hr>
        <div class="row align-items-center">
          <div class="col-12 my-5">
            <?= $this->session->flashdata('touch'); ?>
            <div class="single_touch">
              <ul>
                <li>
                  <h2>Get In Touch!<i class="far fa-paper-plane fa-fw" style='font-size:30px;color:red'></i></h2>
            </div>
          </div>
          <div class="col-lg-8">
            <form class="form-contact contact_form" action="<?= base_url('auth/contactus'); ?>" method="post" id="contact">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="massage" id="massage" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter massage'" placeholder="Enter massage" value="<?= set_value('massage'); ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" value="<?= set_value('name'); ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control valid" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" value="<?= set_value('subject'); ?>">
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
              </div>
            </form>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3><?= $addres1; ?></h3>
                <p><?= $addres2; ?></p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3><?= $phone; ?></h3>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3><?= $mail; ?></h3>
                <p>Send us your mail anytime!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
  <!-- JS here -->
  <script src="<?= base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/ajax-form.js"></script>
  <script src="<?= base_url('assets/'); ?>js/waypoints.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.counterup.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/scrollIt.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/wow.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/nice-select.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
  <script src="<?= base_url('assets/'); ?>js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="<?= base_url('assets/'); ?>js/contact.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.form.js"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.validate.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/mail-script.js"></script>
  <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  <script>
    $('#datepicker').datepicker({
      iconsLibrary: 'fontawesome',
      icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
      }
    });
    $('#datepicker2').datepicker({
      iconsLibrary: 'fontawesome',
      icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
      }

    });
  </script>




</body>

</html>