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
	<div class="stunning-header stunning-header-bg-orange">
		<div class="stunning-header-content">
            <h1 class="stunning-header-title"><strong><?= lang ('home.email_marketing') ?></strong></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.emailT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.emailT') ?>"><?= lang ('home.services') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.email_marketing') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row pt120">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="heading align-center mb60">
					<h4 class="h1 heading-title"><?= lang ('email.slogan') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text">
                       <?= lang ('email.sloganD') ?>
					</p>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<img loading="lazy" src="<?= base_url () ?>/assets/img/marketing.png" alt="<?= lang ('seoPage.emailT') ?>">
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<h5 class="mb30">
                            <?= lang ('email.d1') ?>
						</h5>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<ul class="list list--secondary">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.emailT') ?>">
                                    <?= lang ('email.d2') ?>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<ul class="list list--secondary">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.emailT') ?>">
									<?= lang ('email.d3') ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row pt80 pb80 bg-boxed-blue">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 table-cell">
						<div class="heading">
							<h4 class="h1 heading-title c-white no-margin"><?= lang ('email.tellUs') ?></h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 table-cell">
						<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.emailT') ?>">
							<span class="text"><?= lang ('home.contact')?></span>
							<span class="semicircle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt120 mb30">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="heading align-center">
					<h4 class="heading-title h1"><?= lang ('email.emailService') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text">
                        <?= lang ('email.emailServiceD') ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row mb30">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--modern">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box25.png" alt="<?= lang ('seoPage.emailT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('email.emailStrategy') ?></h5>
						<p class="text">
							<?= lang ('email.emailStrategyD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--modern">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box26.png" alt="<?= lang ('seoPage.emailT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('email.emailTemp') ?></h5>
						<p class="text">
                            <?= lang ('email.emailTempD') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb60">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--modern">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box27.png" alt="<?= lang ('seoPage.emailT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('email.emailTracing') ?></h5>
						<p class="text">
							<?= lang ('email.emailTracingD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="info-box--modern">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box28.png" alt="<?= lang ('seoPage.emailT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('email.emailMarketing') ?></h5>
						<p class="text">
							<?= lang ('email.emailMarketingD') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pb120">
			<div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
				<a href="<?= base_url ('about-us-digital-marketing-agency') ?>" class="btn btn-medium btn--blue btn-hover-shadow mb30" title="<?= lang ('seoPage.emailT') ?>">
					<span class="text"><?= lang ('home.about') ?></span>
					<span class="semicircle"></span>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--yellow btn-hover-shadow" title="<?= lang ('seoPage.emailT') ?>">
					<span class="text"><?= lang ('home.contact') ?></span>
					<span class="semicircle"></span>
				</a>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>