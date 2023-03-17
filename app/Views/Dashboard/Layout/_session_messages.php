<div class="container mt-2">
  <?php if (session()->has('success')) : ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Tudo certo!</strong> <?php echo session('success'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endif; ?>

  <?php if (session()->has('info')) : ?>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>Informação!</strong> <?php echo session('info'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endif; ?>

  <?php if (session()->has('danger')) : ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Atenção!</strong> <?php echo session('danger'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endif; ?>

  <?php if (session()->has('error')) : ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Atenção!</strong> <?php echo session('error'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <?php endif; ?>

  <?php if (session()->has('erros_model')) : ?>

    <ul>

      <?php foreach (session('erros_model') as $erro) : ?>

        <li class="text-danger"><?php echo $erro; ?></li>

      <?php endforeach; ?>
    </ul>

  <?php endif; ?>

</div>