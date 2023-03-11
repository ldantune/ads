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
        <h5 class="mt-4"><?php echo $title ?? ''; ?></h5>
      </div>

      <div class="card-body">

      <a class="btn btn-primary btn-sm mt-2 mb-4" href="<?php echo route_to('categories');?>"><?php echo lang('App.btn_back'); ?></a>
        <table class="table table" id="dataTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Slug</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>

        </table>
      </div>
    </div>
  </div>
</div>



<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.3/r-2.4.0/datatables.min.js"></script>

<?php echo $this->include('Manager/Categories/Scripts/_datatable_all_archived'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_recover_category'); ?>
<?php echo $this->include('Manager/Categories/Scripts/_delete_category'); ?>

<script>
  function refreshCSRFToken(token){
    $('[name="<?php echo csrf_token(); ?>"]').val(token);
    $('meta[name="<?php echo csrf_token(); ?>"]').attr('content', token);
  }
</script>

<?php echo $this->endSection(); ?>