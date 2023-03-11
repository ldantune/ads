<script>
  $(document).on('click', '#archiverCategoryBtn', function() {
    var id = $(this).data('id');

    var url = '<?php echo route_to('categories.archive'); ?>';

    $.post(url, {
      '<?php echo csrf_token(); ?>': $('meta[name="<?php echo csrf_token(); ?>"]').attr('content'),
      _method: 'PUT',
      id: id

    }, function(response) {
      window.refreshCSRFToken(response.token);
      toastr.success(response.message);

      $('#dataTable').DataTable().ajax.reload(null, false);

    }, 'json').fail(function() {
      toastr.error('Error backend')
    });
  });
</script>