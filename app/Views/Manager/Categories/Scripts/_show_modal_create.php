<script>

$(document).on('click', '#createCategoryBtn', function(){

  $('.modal-title').text('Criar categoria');

  $('#categoryModal').modal('show');
  $(['name=_method']).remove();
  $('#categories-form')[0].reset();
  $('#categories-form').attr('action', '<?php echo route_to('categories.create');?>');
  $('#categories-form').find('span.error-text').text('');

  var id = $(this).data('id');

  var url = '<?php echo route_to('categories.parents'); ?>';

  $.get(url, function(response){
    
    $('#boxParents').html(response.parents);
    
  }, 'json');
});

</script>