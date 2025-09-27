<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="<?php echo csrf_token(); ?>" content="<?php echo csrf_hash(); ?>" class="csrf" />
  <title><?php echo $this->renderSection('title'); ?> <?php echo ' - ' . env('APP_NAME') ?> </title>

  <!-- PLUGINS CSS STYLE -->
  <link href="<?php echo site_url('web/'); ?>plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="<?php echo site_url('web/'); ?>plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo site_url('web/'); ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="<?php echo site_url('web/'); ?>plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="<?php echo site_url('web/'); ?>plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="<?php echo site_url('web/'); ?>plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="<?php echo site_url('web/'); ?>plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="<?php echo site_url('web/'); ?>plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="<?php echo site_url('web/'); ?>css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="<?php echo site_url('web/'); ?>img/favicon.png" rel="shortcut icon">


  <?php echo $this->renderSection('styles'); ?>
</head>

<body class="body-wrapper">


  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg  navigation">
            <a class="navbar-brand" href="index.html">
              <img src="<?php echo site_url('web/'); ?>images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo route_to('web.home') ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo route_to('pricing') ?>">Nossos planos</a>
                </li>
                <?php if (auth()->check()) : ?>
                  <?php if (!auth()->user()->isSuperadmin()) : ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo route_to('dashboard') ?>">Dashboard</a>
                    </li>
                  <?php else : ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo route_to('manager') ?>">Manager</a>
                    </li>
                  <?php endif; ?>

                <?php endif; ?>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <!-- Dropdown list -->
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="category.html">Category</a>
                    <a class="dropdown-item" href="single.html">Single Page</a>
                    <a class="dropdown-item" href="store-single.html">Store Single</a>
                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                    <a class="dropdown-item" href="user-profile.html">User Profile</a>
                    <a class="dropdown-item" href="submit-coupon.html">Submit Coupon</a>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="single-blog.html">Single Post</a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Listing <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <!-- Dropdown list -->
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>

              <ul class="navbar-nav ml-auto mt-10">
                <?php if (!auth()->check()) : ?>
                  <li class="nav-item">
                    <a class="nav-link login-button" href="<?php echo route_to('login') ?>">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link login-button" href="<?php echo route_to('register') ?>">Registre-se</a>
                  </li>

                <?php else : ?>
                  <li class="nav-item">
                    <form method="POST" action="<?= route_to('logout') ?>">
                      <?php echo csrf_field(); ?>
                      <button class="nav-link login-button" href="#" type="submit">Sair</button>
                    </form>

                  </li>
                <?php endif; ?>
                <li class="nav-item">
                  <a class="nav-link add-button" href="<?php echo route_to('dashboard') ?>"><i class="fa fa-plus-circle"></i> Criar anÃƒÂºncio</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!--===============================
=            Hero Area            =
================================-->

  <section class="hero-area bg-1 text-center overly">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Header Contetnt -->
          <div class="content-block">
            <h1>Buy & Sell Near You </h1>
            <p>Join the millions who buy and sell from each other <br> everyday in local communities around the world</p>
            <div class="short-popular-category-list text-center">
              <h2>Popular Category</h2>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href=""><i class="fa fa-bed"></i> Hotel</a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fa fa-grav"></i> Fitness</a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fa fa-car"></i> Cars</a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fa fa-cutlery"></i> Restaurants</a>
                </li>
                <li class="list-inline-item">
                  <a href=""><i class="fa fa-coffee"></i> Cafe</a>
                </li>
              </ul>
            </div>

          </div>
          <!-- Advance Search -->
          <div class="advance-search">
            <form action="#">
              <div class="row">
                <!-- Store Search -->
                <div class="col-lg-6 col-md-12">
                  <div class="block d-flex">
                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <div class="block d-flex">
                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
                    <!-- Search Button -->
                    <button class="btn btn-main">SEARCH</button>
                  </div>
                </div>
              </div>
            </form>

          </div>

        </div>
      </div>
    </div>
    <!-- Container End -->
  </section>

  <!--===================================
=            Client Slider            =
====================================-->
  <?php echo $this->include('Web/Layout/_session_messages'); ?>

  <?php echo $this->renderSection('content'); ?>

  <!--============================
=            Footer            =
=============================-->
  <?php echo $this->include('Web/Layout/_footer'); ?>
  <?php echo $this->renderSection('scripts'); ?>
</body>

</html>