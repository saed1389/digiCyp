<?= $this->extend('template/base'); ?>
<?= $this->section('title')  ?>
<?= $title ?>
<?= $this->endSection()  ?>
<?= $this->section('description') ?>
<?= $description ?>
<?= $this->endSection() ?>
<?= $this->section('description1') ?>
<?= $description ?>
<?= $this->endSection() ?>
<?= $this->section('title1')  ?>
<?= $title ?>
<?= $this->endSection() ?>
<?= $this->section('description2') ?>
<?= $description ?>
<?= $this->endSection() ?>
<?= $this->section('title2')  ?>
<?= $title ?>
<?= $this->endSection()  ?>
<?= $this->section('content') ?>
	<div class="stunning-header stunning-header-bg-blue">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('contact.contactInfo') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.contactT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('contact.contactInfo') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row pt120 pb80">
			<div class="col-lg-12">
				<div class="heading">
					<h4 class="h1 heading-title"><?= lang ('contact.getTouch') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text">
                        <?= lang ('contact.getTouchD') ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding80 bg-border-color contacts-shadow">
			<div class="container">
				<div class="row">
					<div class="contacts">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/contact7.png" alt="<?= lang ('seoPage.contactT') ?>">
								<div class="content">
									<a href="javascript: void (0)" class="title" title="<?= lang ('seoPage.contactT') ?>"><?= lang ('footer.address') ?></a>
									<p class="sub-title"></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/contact8.png" alt="<?= lang ('seoPage.contactT') ?>">
								<div class="content">
									<a href="mailto:info@digicyp.com" class="title" title="<?= lang ('seoPage.contactT') ?>">info@digicyp.com</a>
									<p class="sub-title"><?= lang ('footer.onlineSupport') ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="contacts-item">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/contact9.png" alt="<?= lang ('seoPage.contactT') ?>">
								<div class="content">
									<a href="tel:+90 548 865 1912" class="title" title="<?= lang ('seoPage.contactT') ?>">+90 548 865 1912</a>
									<p class="sub-title"><?= lang ('topBar.Mon_Fri') ?> 09:00 - 20:00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="contact-form medium-padding120">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h4 class="heading-title"><?= lang ('contact.haveQuestion') ?></h4>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text"><?= lang ('contact.haveQuestionD') ?></p>
					</div>
				</div>
			</div>
			<form class="contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>
                            <input class="input-standard-grey" name="website" type="text" placeholder="<?= lang ('contact.webURL') ?>" required>
                        </label>
                    </div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>
                            <input name="name" class="input-standard-grey" placeholder="<?= lang ('contact.name') ?>" type="text" required>
                        </label>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>
                            <input name="email" class="input-standard-grey" placeholder="<?= lang ('contact.email') ?>" type="email" required>
                        </label>
                    </div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>
                            <input name="phone" class="input-standard-grey" placeholder="<?= lang ('contact.phone') ?>" type="tel" required>
                        </label>
                    </div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>
                            <textarea name="message" class="input-standard-grey" placeholder="<?= lang ('contact.details') ?>"></textarea>
                        </label>
                    </div>
				</div>
				<div class="row">
					<div class="submit-block table">
						<div class="col-lg-3 table-cell">
							<button class="btn btn-small btn--primary">
								<span class="text"><?= lang ('contact.submit') ?></span>
							</button>
						</div>
						<div class="col-lg-5 table-cell">
							<div class="submit-block-text">
								<?= lang ('contact.submitAnswer') ?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>
