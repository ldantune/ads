<?php echo $this->extend('Manager\Layout\main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $title ?? ''; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('styles'); ?>
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.3/r-2.4.0/datatables.min.css" rel="stylesheet" />


<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>


<div class="row">
  <div class="col-md-6">
    <div class="card shadow-lg">
      <div class="card-header">
        <h5 class="mt-4"><?php echo lang('Categories.title_index'); ?></h5>

        <button class="btn btn-primary btn-sm float-end" id="createCategoryBtn"><?php echo lang('App.btn_new'); ?></button>
      </div>

      <div class="card-body">

      <a class="btn btn-info btn-sm mt-2 mb-4" href="<?php echo route_to('categories.archived');?>"><?php echo lang('App.btn_archived'); ?></a>
        <table class="table table" id="dataTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><?php echo lang('Categories.label_name'); ?></th>
              <th scope="col"><?php echo lang('Categories.label_slug'); ?></th>
              <th scope="col"><?php echo lang('App.btn_actions'); ?></th>
            </tr>
          </thead>

        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="categoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php echo lang('Categories.title_new'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?php echo form_open(route_to('categories.create'), ['id' => 'categories-form'], ['id' => '']) ?>
      <div class="modal-body">
        
        <div class="mb-3">
          <label for="name" class="form-label"><?php echo lang('Categories.label_name'); ?></label>
          <input type="text" class="form-control" id="name" name="name">
          <span class="text-danger error-text name"></span>
        </div>

        <div class="mb-3">
          <label for="parent_id" class="form-label"><?php echo lang('Categories.label_parent_name'); ?></label>
          <span id="boxParents"></span>
          <span class="text-danger error-text parent_id"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><?php echo lang('App.btn_cancel'); ?></button>
        <button type="submit" class="btn btn-primary btn-sm"><?php echo lang('App.btn_save'); ?></button>
      </div>

      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.3/r-2.4.0/datatables.min.js"></script>

<?php echo $this->include('Manager/Categories/Scripts/_datatable_all'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_get_category_info'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_submit_modal_create_update'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_show_modal_create'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_archive_category'); ?>

<script>
  function refreshCSRFToken(token){
    $('[name="<?php echo csrf_token(); ?>"]').val(token);
    $('meta[name="<?php echo csrf_token(); ?>"]').attr('content', token);
  }
</script>

<?php echo $this->endSection(); ?>