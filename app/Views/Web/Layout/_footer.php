<footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
          <!-- About -->
          <div class="block about">
            <!-- footer logo -->
            <img src="<?php echo site_url('web/'); ?>images/logo-footer.png" alt="">
            <!-- description -->
            <p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 offset-lg-1 col-md-3">
          <div class="block">
            <h4>Site Pages</h4>
            <ul>
              <li><a href="#">Boston</a></li>
              <li><a href="#">How It works</a></li>
              <li><a href="#">Deals & Coupons</a></li>
              <li><a href="#">Articls & Tips</a></li>
              <li><a href="#">Terms of Services</a></li>
            </ul>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
          <div class="block">
            <h4>Admin Pages</h4>
            <ul>
              <li><a href="#">Boston</a></li>
              <li><a href="#">How It works</a></li>
              <li><a href="#">Deals & Coupons</a></li>
              <li><a href="#">Articls & Tips</a></li>
              <li><a href="#">Terms of Services</a></li>
            </ul>
          </div>
        </div>
        <!-- Promotion -->
        <div class="col-lg-4 col-md-7">
          <!-- App promotion -->
          <div class="block-2 app-promotion">
            <a href="">
              <!-- Icon -->
              <img src="<?php echo site_url('web/'); ?>images/footer/phone-icon.png" alt="mobile-icon">
            </a>
            <p>Get the Dealsy Mobile App and Save more</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Container End -->
  </footer>
  <!-- Footer Bottom -->
  <footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
            <li><a class="fa fa-facebook" href=""></a></li>
            <li><a class="fa fa-twitter" href=""></a></li>
            <li><a class="fa fa-pinterest-p" href=""></a></li>
            <li><a class="fa fa-vimeo" href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
  </footer>

  <!-- JAVASCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <!--
  <script src="<?php //echo site_url('dashboard/'); 
                ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?php //echo site_url('dashboard/'); 
                ?>plugins/tether/js/tether.min.js"></script>
  <script src="<?php //echo site_url('dashboard/'); 
                ?>plugins/raty/jquery.raty-fa.js"></script>
  <script src="<?php //echo site_url('dashboard/'); 
                ?>plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?php //echo site_url('dashboard/'); 
                ?>plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  -->

  <script src="<?php echo site_url('web/'); ?>plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="<?php echo site_url('web/'); ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo site_url('web/'); ?>plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="<?php echo site_url('web/'); ?>plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo site_url('web/'); ?>plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="<?php echo site_url('web/'); ?>js/scripts.js"></script>

  <script src="<?php echo site_url('manager_assets/toastr/'); ?>toastr.min.js"></script>

  <?php echo $this->renderSection('scripts'); ?>