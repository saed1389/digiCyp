<!DOCTYPE html>
<html lang="<?php if (session('lang') == 'en'){
    echo "en-EN";
}else if (session('lang') == 'tr') {
    echo "tr-TR";
} else { echo "en-EN"; } ?>">
<head lang="<?php if (session('lang') == 'en'){
	echo "en-EN";
}else if (session('lang') == 'tr') {
	echo "tr-TR";
} else { echo "en-EN"; } ?>" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <link rel="alternate" hreflang="<?php if (session('lang') == 'en'){
		echo "en-EN";
	}else if (session('lang') == 'tr') {
		echo "tr-TR";
	} else { echo "en-EN"; } ?>" href="<?= base_url () ?>">
    <title><?= lang ('seoPage.homeT') ?></title>
    <meta name="description" content="<?= lang ('seoPage.homeD') ?>"/>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <link rel="shortcut icon" href="<?= base_url ()?>/assets/img/favicon.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="online marketing, digital marketing, online marketing agency, digital agency, online marketing agency cyprus, web design, web development, web design cyprus, website design cyprus, sem, seo, seo cyprus, ppc, online marketing cyprus, google campaigns, ppc campaigns" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="canonical" href="<?= base_url () ?>">
    <meta name="googlebot" content="all,index,follow">
    <meta name="robots" content="all,index,follow">
    <meta property="og:locale" content="<?php if (session('lang') == 'en'){
		echo "en_EN";
	}else if (session('lang') == 'tr') {
		echo "tr-TR";
	} else { echo "en-EN"; } ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= lang ('seoPage.homeT') ?>"/>
    <meta property="og:description" content="<?= lang ('seoPage.homeD') ?>"/>
    <meta property="og:url" content="<?= base_url () ?>"/>
    <meta property="og:site_name" content="DigiCyp"/>
    <meta property="og:image" content="<?= base_url () ?>/assets/img/digicyp-log.png">
    <meta property="og:image:secure_url" content="<?= base_url () ?>/assets/img/digicyp-log.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="250" />
    <meta property="twitter:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="<?= lang ('seoPage.homeD') ?>"/>
    <meta name="twitter:title" content="<?= lang ('seoPage.homeT') ?>"/>
    <meta name="twitter:site" content="@digicyp"/>
    <meta name="twitter:url" content="<?= base_url () ?>"/>
    <meta name="twitter:creator" content="@digicyp"/>
    <meta name="twitter:image" content="<?= base_url () ?>/assets/img/digicyp-log.png">
    <meta name="generator" content="<?= base_url () ?>"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/crumina-fonts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/grid.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/base.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/layouts.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/modules.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/widgets-styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/primary-menu.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url () ?>/assets/css/magnific-popup.css">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Digital Cyprus",
            "url" : "https://www.digicyp.com",
            "sameAs" : [
                "https://www.facebook.com/digicyp",
                "https://www.instagram.com/digicyp"]
        }
    </script>
</head>
<body class="" itemscope itemtype="http://schema.org/WebPage">
<?= $this->include('common/top_bar');  ?>
<?= $this->include('common/header');  ?>
<?= $this->include('common/rightSide')  ?>
<div class="content-wrapper">
	<div class="container-full-width">
		<div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">
			<div class="swiper-wrapper">
				<div class="swiper-slide bg-border-color">
					<div class="container">
						<div class="row table-cell">
							<div class="col-lg-12">
								<div class="slider-content align-center">
									<h1 class="slider-content-title" data-swiper-parallax="-100"><?= lang ('home.sliderH1')  ?></h1>
									<h5 class="slider-content-text c-gray" data-swiper-parallax="-200"><?= lang ('home.slider1') ?></h5>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="<?= base_url ('search-engine-optimization-seo') ?>" title="<?= lang ('seoPage.homeT') ?>" class="btn btn-medium btn--dark btn-hover-shadow">
											<span class="text"><?= lang ('home.readMore') ?></span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/slider1.png" alt="Digital Cyprus">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-5 table-cell">
								<div class="slider-content">
									<h3 class="slider-content-title" data-swiper-parallax="-100">
										<span class="c-dark"><?= lang ('home.local_seo')  ?></span>
										<?= lang ('home.sliderSeo') ?>
                                    </h3>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="<?= base_url ('local-SEO') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.readMore')  ?></span>
											<span class="semicircle"></span>
										</a>
										<a href="<?= base_url ('digital-marketing-services') ?>" class="btn btn-small btn--primary" data-swiper-parallax="-300" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.list_services')  ?></span>
											<i class="seoicon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-7 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/slider2.png" alt="<?= lang ('seoPage.homeT') ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-secondary-color main-slider-bg-dark">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-6 table-cell">
								<div class="slider-content">
									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100"><?= lang ('home.social_media_marketing')  ?></h3>
									<h5 class="slider-content-text" data-swiper-parallax="-200"><?= lang ('home.sliderSocial') ?></h5>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="<?= base_url ('Social-Media-Marketing') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.readMore')  ?></span>
											<span class="semicircle"></span>
										</a>
										<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn-border" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.contact')  ?></span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/slider3.png" alt="<?= lang ('seoPage.homeT') ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-orange-color main-slider-bg-dark">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-12">
								<div class="slider-content align-center">
									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100"><?= lang ('home.email_marketing')  ?></h3>
									<h5 class="slider-content-text" data-swiper-parallax="-200"><?= lang ('home.sliderEmail') ?></h5>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="<?= base_url ('Email-Marketing') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.readMore') ?></span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/slider4.png" alt="<?= lang ('seoPage.homeT') ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide bg-green-color main-slider-bg-dark">
					<div class="container table">
						<div class="row table-cell">
							<div class="col-lg-6 table-cell">
								<div class="slider-content">
									<h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100"><?= lang ('home.web_design') ?></h3>
									<h5 class="slider-content-text" data-swiper-parallax="-200">
                                        <?= lang ('home.customWebsiteDesignD')  ?>
									</h5>
									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">
										<a href="<?= base_url ('Website-Design') ?>" class="btn btn-medium btn--dark btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.readMore')  ?></span>
											<span class="semicircle"></span>
										</a>
										<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn-border btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
											<span class="text"><?= lang ('home.contact') ?></span>
											<span class="semicircle"></span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/slider5.png" alt="<?= lang ('seoPage.homeT') ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<svg class="btn-next btn-next-black">
				<use xlink:href="#arrow-right"></use>
			</svg>
			<svg class="btn-prev btn-prev-black">
				<use xlink:href="#arrow-left"></use>
			</svg>
			<div class="slider-slides">
				<a href="#" class="slides-item bg-border-color main-slider-bg-light" title="<?= lang ('seoPage.homeT') ?>">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title"><?= lang ('home.search_engine_optimization') ?></h4>
						</div>
						<div class="slides-number">01</div>
					</div>
				</a>
				<a href="#" class="slides-item bg-primary-color" title="<?= lang ('seoPage.homeT') ?>">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title"><?= lang ('home.local_seo') ?></h4>
						</div>
						<div class="slides-number">02</div>
					</div>
				</a>
				<a href="#" class="slides-item bg-secondary-color" title="<?= lang ('seoPage.homeT') ?>">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title"><?= lang ('home.social_media_marketing') ?></h4>
						</div>
						<div class="slides-number">03</div>
					</div>
				</a>
				<a href="#" class="slides-item bg-orange-color" title="<?= lang ('seoPage.homeT') ?>">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title"><?= lang ('home.email_marketing') ?></h4>
						</div>
						<div class="slides-number">04</div>
					</div>
				</a>
				<a href="#" class="slides-item bg-green-color" title="<?= lang ('seoPage.homeT') ?>">
					<div class="content">
						<div class="text-wrap">
							<h4 class="slides-title"><?= lang ('home.web_design') ?></h4>
						</div>
						<div class="slides-number">05</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="container info-boxes pt100 pb100">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box1.png" alt="<?= lang ('seoPage.localT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.localSearchStrategy') ?></h5>
						<p class="text">
                            <?= lang ('home.localSearchStrategyD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box2.png" alt="Maps Search Optimization">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.mapsSearchOptimization') ?></h5>
						<p class="text">
                            <?= lang ('home.mapsSearchOptimizationD')  ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box3.png" alt="Link Building & Content">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.linkBuildingContent') ?></h5>
						<p class="text">
                            <?= lang ('home.linkBuildingContentD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box4.png" alt="Paid Search Advertising">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.paidSearchAdvertising') ?></h5>
						<p class="text">
                            <?= lang ('home.paidSearchAdvertisingD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box5.png" alt="<?= lang ('seoPage.webT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.customWebsiteDesign') ?></h5>
						<p class="text">
                            <?= lang ('home.customWebsiteDesignD') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="<?= base_url () ?>/assets/img/info-box6.png" alt="<?= lang ('emailT') ?>">
					</div>
					<div class="info-box-content">
						<h5 class="info-box-title"><?= lang ('home.customEmailDesign') ?></h5>
						<p class="text">
                            <?= lang ('home.customEmailDesignD') ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="seo-score scrollme">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
							<div class="seo-score-content align-center">
								<div class="heading align-center">
									<h4 class="h1 heading-title"><?= lang ('home.yourSeoScore') ?></h4>
									<p class="heading-text"><?= lang ('home.CheckYourSEO') ?></p>
								</div>
								<div class="seo-score-form">
									<form class="seo-score-form input-inline crumina-submit" data-nonce="crumina-submit-form-nonce" data-type="standard" action="">
										<div class="row">
											<div class="col-lg-8 no-padding col-md-12 col-xs-12 col-sm-12">
												<input name="site" class="input-dark site" placeholder="<?= lang ('home.webURL') ?>" required>
											</div>
											<div class="col-lg-4 no-padding col-md-12 col-xs-12 col-sm-12">
												<input name="email" class="input-dark e-mail" placeholder="<?= lang ('home.yourEmail') ?>" type="email" required>
											</div>
										</div>
										<button class="btn btn-medium btn--green btn-hover-shadow">
											<span class="text"><?= lang ('home.checkUp') ?></span>
											<span class="semicircle"></span>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="images">
					<img loading="lazy" src="<?= base_url () ?>/assets/img/seoscore1.png" alt="<?= lang ('seoPage.homeT') ?>">
					<img loading="lazy" src="<?= base_url () ?>/assets/img/seoscore2.png" alt="<?= lang ('seoPage.homeT') ?>">
					<img loading="lazy" src="<?= base_url () ?>/assets/img/seoscore3.png" alt="<?= lang ('seoPage.homeT') ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-12">
				<div class="offers">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
							<div class="heading">
								<h4 class="h1 heading-title">
                                <?= lang ('home.aboutTitle') ?>
                                </h4>
								<div class="heading-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="heading">
								<p class="heading-text">
                                    <?= lang ('home.aboutHead') ?>
								</p>
							</div>
							<ul class="list list--secondary">
								<li>
									<i class="seoicon-check"></i>
									<a href="<?= base_url ('Search-Engine-Optimization') ?>" title="<?= lang ('home.aboutSection1') ?>"><?= lang ('home.aboutSection1') ?></a>
								</li>
								<li>
									<i class="seoicon-check"></i>
                                    <a href="<?= base_url ('Website-Design') ?>" title="<?= lang ('home.aboutSection2') ?>"><?= lang ('home.aboutSection2') ?></a>
								</li>
								<li>
									<i class="seoicon-check"></i>
                                    <a href="<?= base_url ('Video-Editing-Services') ?>" title="<?= lang ('home.aboutSection3') ?>"><?= lang ('home.aboutSection3') ?></a>
								</li>
								<li>
									<i class="seoicon-check"></i>
                                    <a href="<?= base_url ('Social-Media-Marketing') ?>" title="<?= lang ('home.aboutSection4') ?>"><?= lang ('home.aboutSection4') ?></a>
								</li>
							</ul>
							<a href="<?= base_url ('digital-marketing-services') ?>" class="btn btn-medium btn-border c-primary" title="<?= lang ('seoPage.homeT') ?>">
								<span class="text"><?= lang ('home.readMore') ?></span>
								<span class="semicircle"></span>
							</a>
							<a href="<?= base_url ('contact') ?>" class="btn btn-medium btn--primary btn-hover-shadow" title="<?= lang ('seoPage.homeT') ?>">
								<span class="text"><?= lang ('home.contact') ?></span>
								<span class="semicircle"></span>
							</a>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="offers-thumb">
								<img loading="lazy" src="<?= base_url () ?>/assets/img/offers1.png" alt="<?= lang ('seoPage.homeT') ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="recent-post-slider medium-padding120">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="heading">
						<h4 class="h1 heading-title"><?= lang ('home.lastBlog')  ?></h4>
						<a href="<?= base_url ('blog') ?>" class="read-more" title="<?= lang ('seoPage.homeT') ?>"><?= lang ('readBlog') ?>
							<i class="seoicon-right-arrow"></i>
						</a>
						<div class="heading-line">
							<span class="short-line"></span>
							<span class="long-line"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="theme-module news-slider-module">
				<div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">
					<div class="swiper-pagination"></div>
					<div class="swiper-wrapper">
                        <!--
						<div class="swiper-slide">
							<article class="hentry post">
								<time class="post__date published " datetime="2016-01-30 12:00:00">
									January 30, 2016
								</time>
								<div class="post__content">
									<h2 class="post__title entry-title">
										<a href="15_blog_details.html">Qemonstraverunt legere lius</a>
									</h2>
									<p class="post__text">Sequitur mutationem consuetudium lectorum quam nunc putamus.</p>
								</div>
								<div class="post__author author vcard">
									<div class="post-avatar">
										<img loading="lazy" src="/assets/img/post-author1.png" alt="author">
									</div>
									<span class="post__author-name fn"> Admin <a class="post__author-link">Admin</a></span>
								</div>
							</article>
						</div>
                        -->
					</div>
				</div>
			</div>
		</div>
	</div>

    <?= $this->include('common/subscribe') ?>
    
	<div class="section">
		<div class="client-carousel medium-padding120">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
						<div class="heading align-center">
							<h4 class="h1 heading-title"><?= lang ('home.client') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p class="heading-text"><?= lang ('home.clientD') ?> </p>
						</div>
					</div>
				</div>
				<div class="theme-module clients-slider-module">
					<div class="swiper-container pagination-bottom" data-show-items="4">
						<div class="swiper-wrapper">
                            <div class="swiper-slide client-item">
								<a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/ref/big35.png" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
								</a>
							</div>
                            
                            <div class="swiper-slide client-item">
                                <a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/atlas.png" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/eflatuncafe-logo.png" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/fusun.png" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/gallery-arya.jpg" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="<?= base_url ('references') ?>" class="client-image" title="<?= lang ('seoPage.homeT') ?>">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/hakmer.png" alt="<?= lang ('seoPage.homeT') ?>" class="hover">
                                </a>
                            </div>
                            
						</div>
						<svg class="btn-next">
							<use xlink:href="#arrow-right"></use>
						</svg>
						<svg class="btn-prev">
							<use xlink:href="#arrow-left"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->include('common/footer')  ?>

<script src="<?= base_url () ?>/assets/js/jquery-3.4.1.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/crum-mega-menu.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/swiper.jquery.min.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/waypoints.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.drawsvg.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery-countTo.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.mousewheel.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.mCustomScrollbar.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/imagesLoaded.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.magnific-popup.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.matchHeight.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/segment.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/bootstrap.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery-circle-progress.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/Headroom.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/smooth-scroll.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/jquery.nice-select.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/fastClick.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/form-actions.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/velocity.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/time-line.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/ScrollMagic.min.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/animation.velocity.min.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/ajax-pagination.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/donut-chart.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/isotope.pkgd.min.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/photo-gallery.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/ion.rangeSlider.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/leaflet.js"></script>
<script src="<?= base_url () ?>/assets/js/js-plugins/MarkerClusterGroup.js"></script>
<script src="<?= base_url () ?>/assets/js/main.js"></script>
<script src="<?= base_url () ?>/assets/modules/forms/src/js/jquery.validate.min.js"></script>
<script src="<?= base_url () ?>/assets/modules/forms/src/js/sweetalert2.all.js"></script>
<script src="<?= base_url () ?>/assets/modules/forms/src/js/scripts.js"></script>
</body>
</html>