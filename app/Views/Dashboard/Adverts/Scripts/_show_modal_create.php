<script>
    $(document).on('click', '#createAdvertBtn', function() {
        $('.modal-title').text('<?php echo lang('Adverts.title_new'); ?>');
        $('#modalAdvert').modal('show');

        $('input[name="_method"]').remove();
        $('#adverts-form')[0].reset();
        $('#adverts-form').attr('action', '<?php echo route_to('adverts.create'); ?>');
        $('#adverts-form').find('span.error-text').text('');

        //TODO: Load Categories and Situations
    });
</script>
