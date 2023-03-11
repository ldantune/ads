<?php echo $this->extend('Manager\Layout\main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $title ?? ''; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('styles'); ?>

<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<h1 class="mt-4"><?php echo $title ?? ''; ?></h1>

<?php echo $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>

<?php echo $this->endSection(); ?>