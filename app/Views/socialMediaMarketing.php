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
	<div class="stunning-header stunning-header-bg-red">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('home.social_media_marketing') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('home.services') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.social_media_marketing') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="heading mb30">
							<h4 class="h1 heading-title"><?= lang ('sMedia.socialMedia') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<h5 class="heading-subtitle">
								<?= lang ('sMedia.socialMediaD') ?>
							</h5>
						</div>
						<ul class="list list--secondary mb60">
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('sMedia.s1') ?>
								</a>
							</li>
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('sMedia.s2') ?>
								</a>
							</li>
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('sMedia.s3') ?>
								</a>
							</li>
							<li>
								<i class="seoicon-check"></i>
								<a href="javascript: void (0)" title="<?= lang ('seoPage.socialT') ?>"><?= lang ('sMedia.s4') ?>
								</a>
							</li>
						</ul>
						<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--dark btn-hover-shadow mb30" title="<?= lang ('seoPage.socialT') ?>">
							<span class="text"><?= lang ('home.contact') ?></span>
							<span class="semicircle"></span>
						</a>
					</div>
					<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/social-photo.png" alt="<?= lang ('seoPage.socialT') ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt120">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="heading mb60">
					<h4 class="h1 heading-title"><?= lang ('sMedia.proTools') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb60">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="pie-chart-item">
					<div class="pie-chart" data-value="0.43" data-start-color="#b9750f" data-end-color="#fc9700">
						<div class="content"><span>43</span>%</div>
					</div>
					<div class="pie-chart-content">
						<h4 class="pie-chart-content-title"><?= lang ('sMedia.pro1') ?></h4>
						<p class="pie-chart-content-text">
							<?= lang ('sMedia.pro1D') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="pie-chart-item">
					<div class="pie-chart" data-value="0.68" data-start-color="#298355" data-end-color="#3cb879">
						<div class="content"><span>68</span>%</div>
					</div>
					<div class="pie-chart-content">
						<h4 class="pie-chart-content-title"><?= lang ('sMedia.pro2') ?></h4>
						<p class="pie-chart-content-text">
							<?= lang ('sMedia.pro2D') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb60">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="pie-chart-item">
					<div class="pie-chart" data-value="0.9" data-start-color="#3b8d8c" data-end-color="#4cc3c1">
						<div class="content"><span>90</span>%</div>
					</div>
					<div class="pie-chart-content">
						<h4 class="pie-chart-content-title"><?= lang ('sMedia.pro3') ?></h4>
						<p class="pie-chart-content-text">
							<?= lang ('sMedia.pro3D') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="pie-chart-item">
					<div class="pie-chart" data-value="0.86" data-start-color="#cc481d" data-end-color="#f15927">
						<div class="content"><span>86</span>%</div>
					</div>
					<div class="pie-chart-content">
						<h4 class="pie-chart-content-title"><?= lang ('sMedia.pro4') ?></h4>
						<p class="pie-chart-content-text">
							<?= lang ('sMedia.pro4D') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row bg-boxed-primary pt120">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="heading align-center mb60">
							<h4 class="h1 heading-title c-white"><?= lang ('sMedia.smp') ?> </h4>
							<div class="heading-line">
								<span class="short-line bg-yellow-color"></span>
								<span class="long-line bg-yellow-color"></span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="info-box--standard-centered">
							<div class="info-box-image">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box18.png" alt="<?= lang ('seoPage.socialT') ?>">
							</div>
							<div class="info-box-content">
								<h4 class="info-box-title"><?= lang ('sMedia.smp1') ?></h4>
								<p class="text c-white">
									<?= lang ('sMedia.smp1D') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/social-photo2.png" alt="<?= lang ('seoPage.socialT') ?>">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="info-box--standard-centered">
							<div class="info-box-image">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box19.png" alt="<?= lang ('seoPage.socialT') ?>">
							</div>
							<div class="info-box-content">
								<h4 class="info-box-title"><?= lang ('sMedia.smp2') ?></h4>
								<p class="text c-white">
									<?= lang ('sMedia.smp2D') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>