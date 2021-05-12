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
	<div class="stunning-header stunning-header-bg-breez">
		<div class="stunning-header-content">
            <h1 class="stunning-header-title"><strong><?= lang ('home.local_seo') ?></strong></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.localT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
					<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.localT') ?>"><?= lang ('home.services') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.local_seo') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row pt120">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="heading align-center pb120">
							<h4 class="h1 heading-title"><?= lang ('localSEO.localD') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="local-seo">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<img loading="lazy" src="<?= base_url () ?>/assets/img/local-seo-digicyp.png" alt="<?= lang ('seoPage.localT') ?>" class="shadow-image">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row medium-padding120 bg-border-color">
			<div class="container">
				<div class="row align-center">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="h5 c-gray pt100">
                            <?= lang ('localSEO.description') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mb30">
				<img loading="lazy" src="<?= base_url () ?>/assets/img/local-seo3.jpg" alt="local-seo cyprus">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="heading">
					<h3 class="h3 heading-title"><?= lang ('localSEO.title') ?></h3>
					<p>
						<?= lang ('localSEO.description1') ?>
					</p>
				</div>
				<a href="<?= base_url ('contact') ?>" title="<?= lang ('seoPage.localT') ?>" class="btn btn-medium btn--light-green btn-hover-shadow">
					<span class="text"><?= lang ('home.contact') ?></span>
					<span class="semicircle"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row medium-padding120 bg-orange-color">
			<div class="container">
				<div class="row mb30">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="heading align-center">
							<h4 class="h1 heading-title"><?= lang ('localSEO.professionalTool') ?></h4>
							<div class="heading-line">
								<span class="short-line bg-yellow-color"></span>
								<span class="long-line bg-yellow-color"></span>
							</div>
							<p class="heading-text c-white"><?= lang ('localSEO.professionalToolD') ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="info-box--standard">
							<div class="info-box-image">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box23.png" alt="<?= lang ('seoPage.localT') ?>">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title"><?= lang ('localSEO.keywordResearch') ?></h5>
								<p class="text c-white">
                                    <?= lang ('localSEO.keywordResearchD') ?>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="info-box--standard">
							<div class="info-box-image">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box24.png" alt="<?= lang ('seoPage.localT') ?>">
							</div>
							<div class="info-box-content">
								<h5 class="info-box-title"><?= lang ('localSEO.awesomeTeam') ?></h5>
								<p class="text c-white">
                                    <?= lang ('localSEO.awesomeTeamD') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>