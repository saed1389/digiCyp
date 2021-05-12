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
	<div class="stunning-header stunning-header-bg-violet">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('home.services') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.services') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row pt120 pb30">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="services-main">
					<div class="heading">
						<h4 class="h1 heading-title"><?= lang ('service.title') ?></h4>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
						<p class="heading-text">
                            <?= lang ('service.headingText') ?>
						</p>
					</div>
					<a href="<?= base_url ('about') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.serviceT') ?>">
						<span class="text"><?= lang ('home.about') ?></span>
						<span class="semicircle"></span>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="servises-item bg-violet-color">
					<div class="servises-item__thumb">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/services1.png" alt="<?= lang ('seoPage.serviceT') ?>">
					</div>
					<div class="servises-item__content">
						<h4 class="servises-title"><?= lang ('home.search_engine_optimization') ?></h4>
						<p class="servises-text">
                            <?= lang ('home.localSearchStrategyD') ?>
						</p>
					</div>
					<a href="<?= base_url ('Search-Engine-Optimization') ?>" class="read-more"><i class="seoicon-right-arrow"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="servises-item bg-primary-color">
					<div class="servises-item__thumb">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/services2.png" alt="service digiCyp Cyprus">
					</div>
					<div class="servises-item__content">
						<h4 class="servises-title"><?= lang ('home.local_seo') ?></h4>
						<p class="servises-text">
                            <?= lang ('home.mapsSearchOptimizationD') ?>
						</p>
					</div>
					<a href="<?= base_url ('local-SEO') ?>" class="read-more" title="<?= lang ('seoPage.serviceT') ?>"><i class="seoicon-right-arrow"></i></a>
				</div>
			</div>
		</div>
		<div class="row pb120">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="servises-item bg-secondary-color">
					<div class="servises-item__thumb">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/services3.png" alt="<?= lang ('seoPage.serviceT') ?>">
					</div>
					<div class="servises-item__content">
						<h4 class="servises-title"><?= lang ('home.social_media_marketing') ?></h4>
						<p class="servises-text">
                            <?= lang ('home.sliderSocial') ?>
						</p>
					</div>
					<a href="<?= base_url ('Social-Media-Marketing') ?>" class="read-more" title="<?= lang ('seoPage.serviceT') ?>"><i class="seoicon-right-arrow"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="servises-item bg-orange-color">
					<div class="servises-item__thumb">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/services4.png" alt="<?= lang ('seoPage.serviceT') ?>">
					</div>
					<div class="servises-item__content">
						<h4 class="servises-title"><?= lang ('home.email_marketing') ?></h4>
						<p class="servises-text">
                            <?= lang ('home.customWebsiteDesignD') ?>
						</p>
					</div>
					<a href="<?= base_url ('Email-Marketing') ?>" class="read-more"><i class="seoicon-right-arrow"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="servises-item bg-green-color">
					<div class="servises-item__thumb">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/services5.png" alt="<?= lang ('seoPage.serviceT') ?>">
					</div>
					<div class="servises-item__content">
						<h4 class="servises-title"><?= lang ('home.web_design') ?></h4>
						<p class="servises-text">
                            <?= lang ('home.customEmailDesignD') ?>
						</p>
					</div>
					<a href="<?= base_url ('Website-Design') ?>" class="read-more" title="<?= lang ('seoPage.serviceT') ?>"><i class="seoicon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row bg-border-color medium-padding120">
			<div class="container">
				<div class="row pb30">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features1.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('local-SEO') ?>" class="features-title"><?= lang ('service.localSeo') ?></a>
								<p class="features-text">
                                    <?= lang ('service.localSeoD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('local-SEO') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features2.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('Search-Engine-Optimization') ?>" title="<?= lang ('seoPage.serviceT') ?>" class="features-title"><?= lang ('service.map') ?></a>
								<p class="features-text">
                                    <?= lang ('service.mapD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('Search-Engine-Optimization') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features3.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('Social-Media-Marketing') ?>" class="features-title" title="<?= lang ('seoPage.serviceT') ?>"><?= lang ('service.link') ?></a>
								<p class="features-text">
                                    <?= lang ('service.linkD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('Social-Media-Marketing') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features4.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('Video-Editing-Services') ?>" class="features-title" title="<?= lang ('seoPage.serviceT') ?>"><?= lang ('service.edit') ?></a>
								<p class="features-text">
                                    <?= lang ('service.editD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('Video-Editing-Services') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features6.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('Website-Design') ?>" class="features-title" title="<?= lang ('seoPage.serviceT') ?>"><?= lang ('service.web') ?></a>
								<p class="features-text">
                                    <?= lang ('service.webD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('Website-Design') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="features-item">
							<div class="features-item__thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/features5.png" alt="<?= lang ('seoPage.serviceT') ?>">
							</div>
							<div class="features-content">
								<a href="<?= base_url ('Email-Marketing') ?>" class="features-title" title="<?= lang ('seoPage.serviceT') ?>"><?= lang ('service.email') ?></a>
								<p class="features-text">
									<?= lang ('service.emailD') ?>
								</p>
							</div>
							<a class="read-more" href="<?= base_url ('Email-Marketing') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?= lang('home.readMore') ?>
								<i class="seoicon-right-arrow"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb120 pt120">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading">
					<h4 class="h1 heading-title"><?= lang ('service.product') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text c-dark">
                        <?= lang ('service.productD') ?>
					</p>
				</div>
			</div>
		</div>
		<div class="row pb30">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<ul class="list list--secondary">
					<li>
						<i class="seoicon-check"></i>
						<a href="javascript: void (0)" title="<?= lang ('seoPage.serviceT') ?>">
                            <?= lang ('service.p1') ?>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<ul class="list list--secondary">
					<li>
						<i class="seoicon-check"></i>
						<a href="javascript: void (0)" title="<?= lang ('seoPage.serviceT') ?>">
							<?= lang ('service.p2') ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb30">
				<a href="<?= base_url ('about-us-digital-marketing-agency') ?>" class="btn btn-medium btn--blue" title="<?= lang ('seoPage.serviceT') ?>">
					<span class="text"><?= lang ('home.about') ?></span>
					<span class="semicircle"></span>
				</a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb30">
				<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--yellow" title="<?= lang ('seoPage.serviceT') ?>">
					<span class="text"><?= lang ('home.contact') ?></span>
					<span class="semicircle"></span>
				</a>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>