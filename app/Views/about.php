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
<div class="stunning-header stunning-header-bg-lightblue">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title"><strong><?= lang ('home.about') ?></strong></h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="<?= base_url () ?>" title="<?= lang ('seoPage.aboutT') ?>" ><?= lang ('home.home') ?></a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span><?= lang ('home.about') ?></span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row pt120">
        <div class="col-lg-12">
            <div class="heading mb30">
                <h4 class="h1 heading-title"><?= lang ('about.title') ?></h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <h5 class="heading-subtitle">
                    <?= lang ('about.subtitle') ?>
                </h5>
            </div>
        </div>
        <div class="col-lg-6">
            <p>
                <?= lang ('about.t1') ?>
            </p>
        </div>
        <div class="col-lg-6">
            <p>
                <?= lang ('about.t2') ?>
            </p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-orangedark-color">
        <div class="our-vision scrollme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title"><?= lang ('about.vision') ?></h4>
                            <div class="heading-line">
                                <span class="short-line bg-yellow-color"></span>
                                <span class="long-line bg-yellow-color"></span>
                            </div>
                            <p class="heading-text c-white">
	                            <?= lang ('about.visionD') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img loading="lazy" src="<?= base_url () ?>/assets/img/elements.png" class="elements" alt="<?= lang ('seoPage.aboutT') ?>">
            <img loading="lazy" src="<?= base_url () ?>/assets/img/eye.png" class="eye" alt="<?= lang ('seoPage.aboutT') ?>">
        </div>
    </div>
</div>
<?= $this->include('common/subscribe') ?>
<?= $this->endSection() ?>