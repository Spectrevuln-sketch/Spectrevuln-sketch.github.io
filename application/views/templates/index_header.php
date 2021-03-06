<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/logo-rms.png">
  <!--/ favicon -->
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
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome/css/all.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">

<body>
  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div class="header-top_area d-none d-lg-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4">
              <div id="sticky-header" class="icon-logo">
                <img src="<?= base_url('assets/'); ?>img/logo-rms.png" alt="">
              </div>
            </div>
            <div class="col-xl-8 col-md-8">
              <div class="header_right d-flex align-items-center">
                <div class="short_contact_list">
                  <ul>
                    <li><a href="#"><i class="fa fa-envelope"></i><?= $mail; ?></a></li>
                    <li><a href="#"><i class="fa fa-phone"></i><?= $phone; ?></a></li>
                  </ul>
                </div>
                <div id="sticky-header" class="btn book_btn d-none d-lg-block main-header-area">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area">
        <div class="container">
          <div class="header_bottom_border">
            <div class="row align-items-center">
              <div class="col-12 d-block d-lg-none">
                <div class="logo">
                  <img src="<?= base_url('assets/'); ?>img/logo-rms.png" alt="">
                </div>
              </div>
              <div class="col-xl-9 col-lg-9">
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="<?= base_url('/'); ?>">home</a></li>
                      <li><a href="#">Service <i class="ti-angle-down"></i></a>
                        <ul class="submenu">
                          <li><a href="<?= base_url('auth/service_details'); ?>">service details</a></li>
                        </ul>
                      </li>
                      <li><a href="<?= base_url('auth/contactus'); ?>">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->