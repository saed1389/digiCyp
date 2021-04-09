<?= $this->extend('template/base')  ?>
<?= $this->section('title')  ?>
<?= $title  ?>
<?= $this->endSection()  ?>
<?= $this->section('content') ?>
<div class="col-md-3">
    <?= $this->include('partials/sidebar-left') ?>
</div>
<div class="col-md-6">
    <h1>Contact Via <?= $email  ?></h1>
</div>
<div class="col-md-3">
	<?= $this->include('partials/sidebar-right') ?>
</div>
<?= $this->endSection()  ?>

