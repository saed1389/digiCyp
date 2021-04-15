<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		
		<a href="<?= base_url (); ?>" class="navbar-brand text-uppercase"><img src="<?php echo base_url ('images/logo.png') ?>" class="mb-0" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="<?= base_url ('home'); ?>" class="nav-link">Home <span class="sr-only">(Current)</span></a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url ('register'); ?>" class="nav-link">Register </a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url ('login'); ?>" class="nav-link">Login </a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url ('logout'); ?>" class="nav-link">Logout </a>
				</li>
			</ul>
		</div>
	</div>
</nav>