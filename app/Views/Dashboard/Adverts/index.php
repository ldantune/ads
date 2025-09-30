<?php echo $this->extend('Dashboard\Layout\main'); ?>

<?php echo $this->section('title'); ?>
<?php echo lang('Adverts.title_index'); ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('styles'); ?>

<link href="https://cdn.datatables.net/v/bs4/dt-2.3.4/r-3.0.6/datatables.min.css"
    rel="stylesheet" integrity="sha384-4RIyVsN68R0SlxtgImq9mFHreSM1xPhL/bWZ10HeRCwHKSOl4hLvku8Qc6A1jstl" crossorigin="anonymous">






<style>
    .dt-search .form-control {
        height: 30px !important;
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }
</style>



<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <?php echo $this->include('Dashboard/Layout/_sidebar') ?>

            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">

                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header"><?php echo lang('Adverts.title_index') ?></h3>

                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" id="createAdvertBtn" class="btn btn-main-sm add-button mb-4 float-right">
                                <?php echo lang('App.btn_new'); ?>
                            </button>
                        </div>
                        <div class="col-md-12">

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
        </div>
    </div>
</section>

<?php echo $this->include('Dashboard/Adverts/_modal_advert'); ?>

<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>


<script src="https://cdn.datatables.net/v/bs4/dt-2.3.4/r-3.0.6/datatables.min.js"
    integrity="sha384-Q6dz5pHf0Tiq22XnCDVY6UaeaTbDibdx6uMYyxzzHPnP693oTJ76M3k+DsmVbr8d" crossorigin="anonymous"></script>



<?php echo $this->include('Dashboard/Adverts/Scripts/_datatable_all'); ?>
<?php echo $this->include('Dashboard/Adverts/Scripts/_get_my_advert'); ?>
<?php echo $this->include('Dashboard/Adverts/Scripts/_show_modal_create'); ?>
<?php echo $this->include('Dashboard/Adverts/Scripts/_submit_modal_create_update'); ?>

<script src="<?php echo site_url('manager_assets/mask/'); ?>app.js"></script>
<script src="<?php echo site_url('manager_assets/mask/'); ?>jquery.mask.min.js"></script>

<script>
    function refreshCSRFToken(token) {
        $('[name="<?php echo csrf_token(); ?>"]').val(token);
        $('meta[name="<?php echo csrf_token(); ?>"]').attr('content', token);
    }
</script>
<?php echo $this->endSection(); ?>
