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
<div>
	<div class="stunning-header stunning-header-bg-green">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('home.web_design') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.webT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.webT') ?>"><?= lang ('home.services') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.web_design') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row bg-border-color medium-padding120">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/web-design-develop.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="heading">
							<h4 class="h1 heading-title"><?= lang ('web.title') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p class="heading-text">
                                <?= lang ('web.subtitle')  ?>
							</p>
						</div>
						<ul class="list list--secondary">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.webT') ?>">
                                    <?= lang ('web.s1') ?>
                                </a>
							</li>
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.webT') ?>">
                                    <?= lang ('web.s2') ?>
                                </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pt100 pb100">
		<div class="row mb60">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--standard">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box11.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="info-box-content">
						<h4 class="info-box-title text-t-none"><?= lang ('web.sec1') ?></h4>
						<p class="text">
							<?= lang ('web.sec1D') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--standard">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box12.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="info-box-content">
						<h4 class="info-box-title text-t-none"><?= lang ('web.sec2') ?></h4>
						<p class="text">
							<?= lang ('web.sec2D') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--standard">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box13.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="info-box-content">
						<h4 class="info-box-title text-t-none"><?= lang ('web.sec3') ?></h4>
						<p class="text">
							<?= lang ('web.sec3D') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--standard">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box14.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="info-box-content">
						<h4 class="info-box-title text-t-none"><?= lang ('web.sec4') ?></h4>
						<p class="text">
							<?= lang ('web.sec4D') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>