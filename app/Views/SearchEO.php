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
	<div class="stunning-header stunning-header-bg-lightgray">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title c-dark"><?= lang ('home.search_engine_optimization') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" class="c-gray" title="<?= lang ('seoPage.seoT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.seoT') ?>" class="c-gray"><?= lang ('home.services') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span class="c-primary"><?= lang ('home.search_engine_optimization') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb30">
				<img loading="lazy" src="<?= base_url () ?>/assets/img/Search-Engine-Optimization.jpg" alt="<?= lang ('seoPage.seoT') ?>">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h5 class="mb30"><?= lang ('seo.title') ?></h5>
				<p>
                    <?= lang ('seo.subtitle') ?>
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row bg-blue-color medium-padding120">
			<div class="container">
				<div class="row">
					<div class="counters-modern">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item-modern">
								<i class="seoicon-strategy"></i>
								<div class="counter-numbers-modern negative-margin c-semitransparent-white counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="83" data-from="10">83%</span>
									<div class="units">%</div>
								</div>
								<span class="counter-title-modern"><?= lang ('seo.s1') ?></span>
								<div class="counter-line-modern">
									<span class="short-line-modern bg-blue-color-light"></span>
									<span class="long-line-modern bg-blue-color-light"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item-modern">
								<i class="seoicon-pie-graph"></i>
								<div class="counter-numbers-modern negative-margin c-semitransparent-white counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="52" data-from="5">52%</span>
									<div class="units">%</div>
								</div>
								<span class="counter-title-modern"><?= lang ('seo.s2') ?></span>
								<div class="counter-line-modern">
									<span class="short-line-modern bg-blue-color-light"></span>
									<span class="long-line-modern bg-blue-color-light"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item-modern">
								<i class="seoicon-time-is-running"></i>
								<div class="counter-numbers-modern negative-margin c-semitransparent-white counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="38" data-from="1">38%</span>
									<div class="units">%</div>
								</div>
								<span class="counter-title-modern"><?= lang ('seo.s3') ?></span>
								<div class="counter-line-modern">
									<span class="short-line-modern bg-blue-color-light"></span>
									<span class="long-line-modern bg-blue-color-light"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="counter-item-modern">
								<i class="seoicon-text-paper"></i>
								<div class="counter-numbers-modern negative-margin c-semitransparent-white counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="27" data-from="1">27%</span>
									<div class="units">%</div>
								</div>
								<span class="counter-title-modern"><?= lang ('seo.s4') ?></span>
								<div class="counter-line-modern">
									<span class="short-line-modern bg-blue-color-light"></span>
									<span class="long-line-modern bg-blue-color-light"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-12">
				<div class="row mb30">
					<div class="col-lg-12">
						<h5>
                            <?= lang ('seo.title1') ?>
						</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<ul class="list list--secondary">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.seoT') ?>">
									<?= lang ('seo.subtitle1') ?>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<ul class="list list--secondary">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.seoT') ?>">
									<?= lang ('seo.subtitle2') ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
				<div class="row mb30">
					<div class="col-lg-12 col-md-12">
						<div class="heading align-center">
							<h4 class="h1 heading-title"><?= lang ('seo.service') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb60">
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="info-box--standard-bg">
							<div class="info-box-content">
								<h4 class="info-box-title"><?= lang ('seo.ser1') ?></h4>
								<p class="text">
									<?= lang ('seo.ser1D') ?>
								</p>
								<div class="info-box-image">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box15.png" alt="<?= lang ('seoPage.seoT') ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="info-box--standard-bg">
							<div class="info-box-content">
								<h4 class="info-box-title"><?= lang ('seo.ser2') ?></h4>
								<p class="text">
									<?= lang ('seo.ser2D') ?>
								</p>
								<div class="info-box-image">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box16.png" alt="<?= lang ('seoPage.seoT') ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="info-box--standard-bg">
							<div class="info-box-content">
								<h4 class="info-box-title"><?= lang ('seo.ser3') ?></h4>
								<p class="text">
									<?= lang ('seo.ser3D') ?>
								</p>
								<div class="info-box-image">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box17.png" alt="<?= lang ('seoPage.seoT') ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
						<a href="<?= base_url ('about-us-digital-marketing-agency') ?>" class="btn btn-medium btn--light-green btn-hover-shadow mb30" title="<?= lang ('seoPage.seoT') ?>">
							<span class="text"><?= lang ('home.about') ?></span>
							<span class="semicircle"></span>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--dark btn-hover-shadow mb30" title="<?= lang ('seoPage.seoT') ?>">
							<span class="text"><?= lang ('home.contact') ?></span>
							<span class="semicircle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-orange-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="heading">
							<h4 class="h1 heading-title"><?= lang ('seo.webA') ?></h4>
							<div class="heading-line">
								<span class="short-line bg-yellow-color"></span>
								<span class="long-line bg-yellow-color"></span>
							</div>
							<p class="heading-text c-white">
                                <?= lang ('seo.webAD') ?>
							</p>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/website-analysis.jpg" class="shadow-image" alt="<?= lang ('seoPage.seoT') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>