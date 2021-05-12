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
<div class="content-wrapper">
	
	<div class="stunning-header stunning-header-bg-lightviolet">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('home.blog') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('home.blog') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<main class="main">
				
				</main>
			</div>
			<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
				<aside aria-label="sidebar" class="sidebar sidebar-right">
					<div class="widget">
						<form class="w-search">
							<input class="search input-standard-grey" required="required" placeholder="<?= lang ('blog.search') ?>" type="search">
							<button class="icon">
								<i class="seoicon-loupe"></i>
							</button>
						</form>
					</div>
					<div class="widget w-post-category">
						<div class="heading">
							<h4 class="heading-title"><?= lang ('blog.postCategory') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>
						<div class="post-category-wrap">
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.local_seo') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.email_marketing') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.social_media_marketing') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.search_engine_optimization') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.web_design') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
							<div class="category-post-item">
								<span class="post-count">0</span>
								<a href="#" class="category-title" title="<?= lang ('seoPage.blogT') ?>"><?= lang ('home.edit') ?>
									<i class="seoicon-right-arrow"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="widget w-about">
						<div class="heading">
							<h4 class="heading-title">
                                <?= lang ('blog.about') ?>
                            </h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p>
                                <?= lang ('blog.aboutD') ?>
							</p>
						</div>
						<a href="<?= base_url ('about-us-digital-marketing-agency') ?>" class="btn btn-small btn-border c-primary" title="<?= lang ('seoPage.blogT') ?>">
							<span class="text"><?= lang ('home.about') ?></span>
							<i class="seoicon-right-arrow"></i>
						</a>
					</div>
					<div class="widget w-request bg-boxed-red">
						<div class="w-request-content">
							<img loading="lazy" src="<?= base_url () ?>/assets/img/request.png" alt="<?= lang ('seoPage.blogT') ?>">
							<h4 class="w-request-content-title"><?= lang ('home.contact') ?></h4>
							<p class="w-request-content-text">
                                <?= lang ('blog.contact') ?>
							</p>
							<a href="<?= base_url ('contact') ?>" class="btn btn-small btn--dark btn-hover-shadow" title="<?= lang ('seoPage.blogT') ?>">
								<span class="text"><?= lang ('home.contact') ?></span>
							</a>
						</div>
					</div>
					<div class="widget w-latest-news">
						<div class="heading">
							<h4 class="heading-title"><?= lang ('blog.lNews') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>
						<div class="latest-news-wrap">
						
						</div>
						<a href="<?= base_url ('blog') ?>" class="btn btn-small btn--dark btn-hover-shadow" title="<?= lang ('seoPage.blogT') ?>">
							<span class="text"><?= lang ('blog.allNews') ?></span>
							<i class="seoicon-right-arrow"></i>
						</a>
					</div>
					<div class="widget w-follow">
						<div class="heading">
							<h4 class="heading-title"><?= lang ('blog.follow') ?></h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
						</div>
						<div class="w-follow-wrap">
							<div class="w-follow-item facebook-bg-color">
								<a href="#" class="w-follow-social__item table-cell" title="<?= lang ('seoPage.blogT') ?>">
									<i class="seoicon-social-facebook"></i>
								</a>
								<a href="#" class="w-follow-title table-cell" title="<?= lang ('seoPage.blogT') ?>">Facebook
									<span class="w-follow-add">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
								</a>
							</div>
							<div class="w-follow-item twitter-bg-color">
								<a href="#" class="w-follow-social__item table-cell" title="<?= lang ('seoPage.blogT') ?>">
									<i class=" seoicon-social-twitter"></i>
								</a>
								<a href="#" class="w-follow-title table-cell" title="<?= lang ('seoPage.blogT') ?>">Instagram
									<span class="w-follow-add active">
                                        <i class="seoicon-cross plus"></i>
                                        <i class="seoicon-check-bold check"></i>
                                    </span>
								</a>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>

<?= $this->include('common/subscribe') ?>

<?= $this->endSection() ?>
