<?= $this->extend('template/base') ?>
<?= $this->section('styles'); ?>
<link rel="stylesheet" href="<?php echo base_url ('css/login'); ?>">
<?= $this->endSection();  ?>
<?= $this->section('content'); ?>
<div>
    <?php
    $errors = [];
    if (session ()->getFlashdata ('errors') != null) :
        $errors = session ()->getFlashdata ('errors');
    endif;
    ?>
</div>
<div class="col-xs-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3">
	<form action="<?= base_url ('register') ?>" role="form" class="form-siginin" method="post">
		<?= csrf_field ()  ?>
		<div class="text-center mb-3">
			<h2 class="display-4 text-center">Please Sign Up</h2>
		</div>
		<hr class="colorgraph">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg <?= isset($errors['name']) ? 'is-invalid' : '' ?>" value="<?= old ('name') ?>" placeholder="Full Name" tabindex="1">
                    <?php if ($errors != null and isset($errors['name'])):  ?>
                        <p class="invalid-feedback">
                            <?= $errors['name'] ?>
                        </p>
                    <?php endif;  ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg <?= isset($errors['username']) ? 'is-invalid' : '' ?>" value="<?= old ('username') ?>" placeholder="Username" tabindex="2">
					<?php if ($errors != null and isset($errors['username'])):  ?>
                        <p class="invalid-feedback">
							<?= $errors['username'] ?>
                        </p>
					<?php endif;  ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg <?= isset($errors['email']) ? 'is-invalid' : '' ?>" value="<?= old ('email') ?>" placeholder="example@example.com" tabindex="3">
					<?php if ($errors != null and isset($errors['email'])):  ?>
                        <p class="invalid-feedback">
							<?= $errors['email'] ?>
                        </p>
					<?php endif;  ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg <?= isset($errors['password']) ? 'is-invalid' : '' ?>" placeholder="password" tabindex="4">
					<?php if ($errors != null and isset($errors['password'])):  ?>
                        <p class="invalid-feedback">
							<?= $errors['password'] ?>
                        </p>
					<?php endif;  ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg <?= isset($errors['password_confirmation']) ? 'is-invalid' : '' ?>" placeholder="Confirm Password" tabindex="5">
					<?php if ($errors != null and isset($errors['password_confirmation'])):  ?>
                        <p class="invalid-feedback">
							<?= $errors['password_confirmation'] ?>
                        </p>
					<?php endif;  ?>
				</div>
			</div>
		</div>
		<hr class="colorgraph">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" name="register" tabindex="6">
			</div>
            <div class="col-xs-12 col-md-6">
                <a href="<?php echo base_url ('login') ?>" class="btn btn-primary btn-block btn-lg" tabindex="7"> Login </a>
            </div>
		</div>
	</form>
</div>
<?= $this->endSection() ?>
