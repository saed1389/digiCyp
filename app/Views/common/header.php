<header class="header" id="site-header">
	<a href="#" id="top-bar-js" class="top-bar-link" title="<?= lang ('seoPage.homeT') ?>">
		<i class="seosight-icon seoicon-arrow-to-bottom"></i>
	</a>
	<div class="container">
		<div class="header-content-wrapper">
			<div class="logo">
				<a href="<?= base_url () ?>" class="full-block-link" title="<?= lang ('seoPage.homeT') ?>"></a>
				<img loading="lazy" src="<?= base_url () ?>/assets/img/digicyp-logo.png" alt="Digital Cyprus">
				<div class="logo-text">
					<div class="logo-title">Digital Cyprus</div>
					<div class="logo-sub-title"><?= lang ('topBar.slogan') ?></div>
				</div>
			</div>
			<nav id="primary-menu" class="primary-menu">
				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title"><?= lang ('home.menu') ?></span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                        <svg width="1000px" height="1000px">
                            <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                            <path id="pathE" d="M 300 500 L 700 500"></path>
                            <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                        </svg>
                    </span>
				</a>
				<ul class="primary-menu-menu">
					<li class="menu-item-has-children">
						<a href="<?= base_url () ?>" title="<?= lang ('seoPage.homeT') ?>"><?php echo lang ('Home.home') ?></a>
					</li>
                    <li class="menu-item-has-children">
                        <a href="<?= base_url ('about-us-digital-marketing-agency') ?>" title="<?= lang ('seoPage.aboutT') ?>"><?php echo lang ('Home.about') ?></a>
                    </li>
					<li class="">
						<a href="<?= base_url ('digital-marketing-services') ?>" title="<?= lang ('seoPage.serviceT') ?>"><?php echo lang ('Home.services') ?></a>
						<ul class="dropdown">
							<li class="megamenu-item-info">
								<h5 class="megamenu-item-info-title"><?php echo lang ('Home.list_services') ?></h5>
								<p class="megamenu-item-info-text"><?php echo lang ('Home.choose_service') ?></p>
							</li>
							<li class="hover-ver2">
								<a href="<?= base_url ('local-SEO') ?>" title="<?= lang ('seoPage.localT') ?>"><i class="seoicon-pin-map"></i>
									<?php echo lang ('Home.local_seo') ?>
								</a>
							</li>
							<li class="hover-ver2">
								<a href="<?= base_url ('Email-Marketing') ?>" title="<?= lang ('seoPage.emailT') ?>"><i class="seoicon-mail-send"></i>
									<?php echo lang ('Home.email_marketing') ?>
								</a>
							</li>
							<li class="hover-ver2">
								<a href="<?= base_url ('Social-Media-Marketing') ?>" title="<?= lang ('seoPage.socialT') ?>"><i class="seoicon-chat-comment"></i>
									<?php echo lang ('Home.social_media_marketing') ?>
								</a>
							</li>
							<li class="menu-item-has-children hover-ver2">
								<a href="<?= base_url ('search-engine-optimization-seo')  ?>" title="<?= lang ('seoPage.seoT') ?>">
									<i class="seoicon-search"></i>
									    <?php echo lang ('Home.search_engine_optimization') ?>
								</a>
							</li>
							<li class="hover-ver2">
								<a href="<?= base_url ('Website-Design') ?>" title="<?= lang ('seoPage.webT') ?>"><i class="seoicon-button"></i>
									<?php echo lang ('Home.web_design') ?>
								</a>
							</li>
                            <li class="hover-ver2">
                                <a href="<?= base_url ('Video-Editing-Services') ?>" title="<?= lang ('seoPage.videoT') ?>"><i class="seoicon-shapes-play"></i>
									<?= lang ('home.edit') ?>
                                </a>
                            </li>
						</ul>
					</li>
                    <li class="menu-item-has-children">
                        <a href="<?= base_url ('references') ?>" title="<?= lang ('seoPage.homeT') ?>"><?php echo lang ('Home.references') ?></a>
                    </li>
					<li class="">
						<a href="<?= base_url ('blog') ?>" title="<?= lang ('seoPage.homeT') ?>"><?= lang ('home.blog')  ?></a>
					</li>
					<li class="">
						<a href="<?= base_url ('contact') ?>" title="<?= lang ('seoPage.homeT') ?>"><?= lang ('home.contact') ?></a>
					</li>
				</ul>
			</nav>
			<ul class="nav-add">
				<li class="search search_main">
					<a href="#" class="js-open-search" title="<?= lang ('seoPage.homeT') ?>">
						<i class="seoicon-loupe"></i>
					</a>
				</li>
			</ul>
			<div class="user-menu open-overlay">
				<a href="#" class="user-menu-content  js-open-aside" title="<?= lang ('seoPage.homeT') ?>">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>
	</div>
</header>