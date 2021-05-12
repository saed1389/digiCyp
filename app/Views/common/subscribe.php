<div class="container-fluid bg-green-color">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="subscribe scrollme">
					<div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
						<h4 class="subscribe-title"><?= lang ('contact.newsletter') ?></h4>
						<form class="subscribe-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="">
							<input class="input-standard-grey input-white" name="email" placeholder="<?= lang ('contact.email') ?>" type="email" required>
							<button class="subscr-btn"><?= lang ('contact.subscribe') ?>
								<span class="semicircle--right"></span>
							</button>
						</form>
						<div class="sub-title"><?= lang ('contact.subscribeD') ?></div>
					</div>
					<div class="images-block">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/subscr-gear.png" alt="<?= lang ('seoPage.homeT') ?>" class="gear">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/subscr1.png" alt="<?= lang ('seoPage.homeT') ?>" class="mail">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/subscr-mailopen.png" alt="<?= lang ('seoPage.homeT') ?>" class="mail-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>