<?php echo $this->extend('Dashboard\Layout\main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $title ?? ''; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('styles'); ?>

<link href="https://cdn.datatables.net/v/bs4/dt-2.3.4/r-3.0.6/datatables.min.css"
    rel="stylesheet" integrity="sha384-4RIyVsN68R0SlxtgImq9mFHreSM1xPhL/bWZ10HeRCwHKSOl4hLvku8Qc6A1jstl"
    crossorigin="anonymous">




<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<!--===========================================
=            Popular deals section            =
============================================-->

<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <?php echo $this->include('Dashboard/Layout/_sidebar') ?>

            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">

                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header"><?php echo lang('Adverts.title_index') ?></h3>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <button type="button" id="createAdvertBtn" class="btn btn-main-sm add-button mb-2 float-right"><?php echo lang('App.btn_new'); ?></button>

                        <table class="table table" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo lang('Adverts.label_image'); ?></th>
                                    <th scope="col" class="nome"><?php echo lang('Adverts.label_code'); ?></th>
                                    <th scope="col" class="all"><?php echo lang('Adverts.label_title'); ?></th>
                                    <th scope="col" class="none text-center"><?php echo lang('Adverts.label_category'); ?></th>
                                    <th scope="col"><?php echo lang('Adverts.label_status'); ?></th>
                                    <th scope="col" class="none"><?php echo lang('Adverts.label_address'); ?></th>
                                    <th scope="col" class="all text-center"><?php echo lang('App.btn_actions'); ?></th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>
<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs4/dt-2.3.4/r-3.0.6/datatables.min.js"
    integrity="sha384-Q6dz5pHf0Tiq22XnCDVY6UaeaTbDibdx6uMYyxzzHPnP693oTJ76M3k+DsmVbr8d"
    crossorigin="anonymous"></script>
<?php echo $this->endSection(); ?>
