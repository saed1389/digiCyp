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
	<title><?= $this->renderSection('title') ?></title>
    <meta name="description" content="<?= $this->renderSection('description') ?>"/>
	<meta charset="UTF-8">
    <meta name="author" content="Digital Cyprus"/>
    <meta name="owner" content="Digital Cyprus"/>
    <meta name="publisher" content="Digital Cyprus"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="copyright" content="Digital Cyprus"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="online marketing, digital marketing, online marketing agency, digital agency, online marketing agency cyprus, web design, web development, web design cyprus, website design cyprus, sem, seo, seo cyprus, ppc, online marketing cyprus, google campaigns, ppc campaigns" />
    <link rel="shortcut icon" href="<?= base_url ()?>/assets/img/favicon.png" type="image/x-icon"/>
    <link rel="canonical" href="<?= base_url () ?>">
    <meta name="googlebot" content="all,index,follow">
    <meta name="robots" content="all,index,follow">
    <meta property="og:locale" content="<?php if (session('lang') == 'en'){
	    echo "en_EN";
    }else if (session('lang') == 'tr') {
	    echo "tr-TR";
    } else { echo "en-EN"; } ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= $this->renderSection('title1') ?>"/>
    <meta property="og:description" content="<?= $this->renderSection('description1') ?>"/>
    <meta property="og:url" content="<?= base_url () ?>"/>
    <meta property="og:site_name" content="DigiCyp"/>
    <meta property="og:image" content="<?= base_url () ?>/assets/img/digicyp-log.png">
    <meta property="og:image:secure_url" content="<?= base_url () ?>/assets/img/digicyp-log.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="250" />
    <meta property="twitter:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="<?= $this->renderSection('description2') ?>"/>
    <meta name="twitter:title" content="<?= $this->renderSection('title2') ?>"/>
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
<body itemscope itemtype="http://schema.org/WebPage">
<?= $this->include('common/topBar')  ?>
<?= $this->include('common/header');  ?>
<?= $this->include('common/rightSide'); ?>
<div class="content-wrapper">
	<?= $this->renderSection('content')  ?>
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