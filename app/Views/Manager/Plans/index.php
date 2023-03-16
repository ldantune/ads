<?php echo $this->extend('Manager\Layout\main'); ?>

<?php echo $this->section('title'); ?>
<?php echo lang('Plans.title_index'); ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('styles'); ?>
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.3/r-2.4.0/datatables.min.css" rel="stylesheet" />


<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>


<div class="row">
  <div class="col-md-12">
    <div class="card shadow-lg">
      <div class="card-header">
        <h5 class="mt-4"><?php echo lang('Plans.title_index'); ?></h5>

        <button class="btn btn-primary btn-sm float-end" id="createPlanBtn"><?php echo lang('App.btn_new'); ?></button>
      </div>

      <div class="card-body">

      <a class="btn btn-info btn-sm mt-2 mb-4" href="<?php echo route_to('plans.archived');?>"><?php echo lang('App.btn_archived'); ?></a>
        <table class="table table" id="dataTable">
          <thead>
            <tr>
              <th scope="col"><?php echo lang('Plans.label_code'); ?></th>
              <th scope="col"><?php echo lang('Plans.label_name'); ?></th>
              <th scope="col"><?php echo lang('Plans.label_is_highlighted'); ?></th>
              <th scope="col"><?php echo lang('Plans.label_details'); ?></th>
              <th scope="col"><?php echo lang('App.btn_actions'); ?></th>
            </tr>
          </thead>

        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<?php echo $this->include('Manager/Plans/_modal_plan'); ?>



<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.3/r-2.4.0/datatables.min.js"></script>
<script src="<?php echo site_url('manager_assets/mask/'); ?>app.js"></script>
<script src="<?php echo site_url('manager_assets/mask/'); ?>jquery.mask.min.js"></script>

<?php echo $this->include('Manager/Plans/Scripts/_datatable_all'); ?>
<?php echo $this->include('Manager/Plans/Scripts/_submit_modal_create_update'); ?>
<?php echo $this->include('Manager/Plans/Scripts/_show_modal_create'); ?>
<?php echo $this->include('Manager/Plans/Scripts/_get_plan_info'); ?>

<?php //echo $this->include('Manager/Plans/Scripts/_archive_category'); ?>

<script>
  function refreshCSRFToken(token){
    $('[name="<?php echo csrf_token(); ?>"]').val(token);
    $('meta[name="<?php echo csrf_token(); ?>"]').attr('content', token);
  }
</script>

<?php echo $this->endSection(); ?>