<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="<?php echo csrf_token(); ?>" content="<?php echo csrf_hash(); ?>" class="csrf" />
  <title><?php echo $this->renderSection('title'); ?> <?php echo ' - ' . env('APP_NAME') ?> </title>

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

  <link href="<?php echo site_url('manager_assets/toastr/'); ?>toastr.min.css" rel="stylesheet" />


  <style>
    .btn-sm {
      padding: 6px 20px;
      font-size: .875rem;
      line-height: 1.5;
      border-radius: .2rem;
    }
  </style>

  <?php echo $this->renderSection('styles'); ?>
</head>

<body class="body-wrapper">

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg  navigation">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <?php echo $language ?> <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <!-- Dropdown list -->
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?php echo $urls->url_en ?>">English</a>
                    <a class="dropdown-item" href="<?php echo $urls->url_es ?>">Españhol</a>
                    <a class="dropdown-item" href="<?php echo $urls->url_pt_br ?>">Português Brasil</a>
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
                <?php endif; ?>
                <li class="nav-item">
                  <a class="nav-link add-button" href="<?php echo route_to('dashboard') ?>"><i class="fa fa-plus-circle"></i> Criar anúncio</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="page-search">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Advance Search -->
          <div class="advance-search">
            <form>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="inputtext4" placeholder="What are you looking for">
                </div>
                <div class="form-group col-md-3">
                  <input type="text" class="form-control" id="inputCategory4" placeholder="Category">
                </div>
                <div class="form-group col-md-3">
                  <input type="text" class="form-control" id="inputLocation4" placeholder="Location">
                </div>
                <div class="form-group col-md-2">

                  <button type="submit" class="btn btn-primary">Search Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php echo $this->include('Dashboard/Layout/_session_messages'); ?>

  <?php echo $this->renderSection('content'); ?>


  <!--============================
=            Footer            =
=============================-->
  <?php echo $this->include('Dashboard/Layout/_footer_main'); ?>
  <?php echo $this->renderSection('scripts'); ?>
</body>

</html>