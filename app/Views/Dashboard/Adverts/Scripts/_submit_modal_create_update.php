<script>
  $('#adverts-form').submit(function(e) {
    e.preventDefault();

    var form = this;

    $.ajax({
      url: $(form).attr('action'),
      method: $(form).attr('method'),
      data: new FormData(form),
      processData: false,
      dataType: 'JSON',
      contentType: false,
      beforeSend: function() {
        $(form).find('span.error-text').text('');
      },
      success: function(response) {

        window.refreshCSRFToken(response.token);

        if (response.success == false) {
          toastr.error('<?php echo lang('App.danger_validations'); ?>')
          $.each(response.errors, function(field, valeu) {
            $(form).find('span.' + field).text(valeu);
          });

          return;
        }

        toastr.success(response.message)
        $('#modalAdvert').modal('hide');

        $(form)[0].reset();

        $('#dataTable').DataTable().ajax.reload(null, false);

        $('.modal-title').text('<?php echo lang('Adverts.title_new'); ?>');

        $(form).attr('action', '<?php echo route_to('adverts.create.my'); ?>');
        $(form).find('input[name="id"]').val('');
        $('input[name="_method"]').remove();
      },
      error: function() {
        toaster.error('Erro ao criar/atualizar anúncio.');
      }
    });
  });
</script>
