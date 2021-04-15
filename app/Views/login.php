<?= $this->extend('template/base') ?>
<?= $this->section('styles'); ?>
<link rel="stylesheet" href="<?php echo base_url ('css/login'); ?>">
<?= $this->endSection();  ?>

<?= $this->section('content'); ?>

<div class="col-xs-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3">
    <div>
		<?php if (session ()->getFlashdata ('message') != null):  ?>
            <div class="alert alert-danger">
                <p><?= session ()->getFlashdata ('message') ?></p>
            </div>
		<?php endif; ?>
    </div>
	<form action="<?= base_url ('login') ?>" role="form" class="form-siginin" method="post">
		<?= csrf_field ()  ?>
		<div class="text-center mb-3">
			<h2 class="display-4 text-center">Please Login</h2>
			<?php if (session ()->getFlashdata ('error') != null):  ?>
                <div class="alert alert-danger">
                    <p><?= session ()->getFlashdata ('error') ?></p>
                </div>
			<?php endif; ?>
		</div>
		<hr class="colorgraph">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<input type="email" name="email" id="inputEmail" class="form-control" value="<?= old ('email') ?>" placeholder="Email Address" required autofocus>
					<label for="inputEmail">Email Address</label>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="password" required>
					<label for="inputPassword">Password</label>
				</div>
			</div>
			
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<input type="submit" value="Login" class="btn btn-primary btn-block btn-lg" name="register" tabindex="6">
			</div>
		</div>
	</form>
</div>
<?= $this->endSection(); ?>
