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
	<div class="stunning-header stunning-header-bg-olive">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title"><?= lang ('ref.head') ?></h1>
			<ul class="breadcrumbs">
				<li class="breadcrumbs-item">
					<a href="<?= base_url () ?>" title="<?= lang ('seoPage.refT') ?>"><?= lang ('home.home') ?></a>
					<i class="seoicon-right-arrow"></i>
				</li>
				<li class="breadcrumbs-item active">
					<span><?= lang ('ref.head') ?></span>
					<i class="seoicon-right-arrow"></i>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row medium-padding120">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="heading align-center">
					<h4 class="h1 heading-title"><?= lang ('ref.title') ?></h4>
					<div class="heading-line">
						<span class="short-line"></span>
						<span class="long-line"></span>
					</div>
					<p class="heading-text">
						<?= lang ('ref.subtitle') ?>
					</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="clients-grid">
					<ul class="cat-list-bg-style align-center sorting-menu">
						<li class="cat-list__item active" data-filter="*"><a href="#" class="" title="<?= lang ('seoPage.refT') ?>"><?= lang ('ref.item1') ?></a></li>
						<li class="cat-list__item" data-filter=".webDesign"><a href="#" class="" title="<?= lang ('ref.item2') ?>"><?= lang ('ref.item2') ?></a></li>
						<li class="cat-list__item" data-filter=".seo"><a href="#" class="" title="<?= lang ('ref.item3') ?>"><?= lang ('ref.item3') ?></a></li>
						<li class="cat-list__item" data-filter=".smm"><a href="#" class="" title="<?= lang ('ref.item4') ?>"><?= lang ('ref.item4') ?></a></li>
						<li class="cat-list__item" data-filter=".video"><a href="#" class="" title="<?= lang ('ref.item5') ?>"><?= lang ('ref.item5') ?></a></li>
						<li class="cat-list__item" data-filter=".email"><a href="#" class="" title="<?= lang ('ref.item6') ?>"><?= lang ('ref.item6') ?></a></li>
					</ul>
					<div class="row sorting-container" id="clients-grid" data-layout="masonry">
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
							<div class="client-item-style2 col-3 bg-border-color mb30">
								<div class="client-image">
									<img loading="lazy" src="<?= base_url () ?>/assets/img/ref/ankara.png" alt="<?= lang ('seoPage.refT') ?>">
								</div>
								<h5 class="clients-item-title">Asya Nakliyat</h5>
								<p class="clients-item-text">
                                    Asya Nakliyat firması olarak yılların vermiş olduğu deneyim ve tecrübelerden yararlanarak 20 yılın katmış olduğu değer ile sizlere kaliteli,..
								</p>
								<div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://www.ankaraasyanakliyat.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
									<span class="semicircle"></span>
									<i class="seoicon-right-arrow"></i>
								</div>
							</div>
						</div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img style="background-color:#576b6f" loading="lazy" src="<?= base_url () ?>/assets/img/ref/arzu.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">ARZU GENCE</h5>
                                <p class="clients-item-text">
                                    Hacettepe Üniversitesi GSF İç Mimarlık Ana Sanat Dalı Lisans Mimar Sinan Üniversitesi GSF İç Mimarlık Ana Sanat Dalı Yüksek Lisans öğrenimini 2002’de..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://arzugence.com" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo email">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/atlas.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Atlas Tadilat</h5>
                                <p class="clients-item-text">
                                    İzmir ve çevresi illerde, 20 senenin verdiği güven ve tecrübe ile inşaat sektöründe faaliyet yürütmekteyiz..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://www.atlas-tadilat.com" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/bergama.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Bergama Ortodonti</h5>
                                <p class="clients-item-text">
                                    1976 yılında İzmir`de doğdum. İlk,orta ve lise öğrenimimi Bergama`da tamamladım...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://bergamaortodonti.com" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign smm seo email video">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/big35.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Big 35 Ajans</h5>
                                <p class="clients-item-text">
                                    BİLGİ TEKNOLOJİLERİ VE İLETİŞİM KURUMU TARAFINDAN SERTİFİKA LI TOPLU SMS SİSTEMİ...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://big35ajans.com" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/big-econsultancy.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Big e Consultancy</h5>
                                <p class="clients-item-text">
                                    Bige Arıkan was born in Istanbul in 1995. She is an undergraduate at Özyeğin University where she studies Management Information Systems (MIS )...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://big-econsultancy.co.uk/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email video">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/didben.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Didban Bazar</h5>
                                <p class="clients-item-text">
                                    پس از کسب تجارب گوناگون در زمینه آنالیز و معامله ی بازارهای مالی بورس و ارز بر آن شدیم تا تجربیات خویش را به هموطنان عزیزمان انتقال دهیم...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://www.xn----ymcbabc9bayi0tl3d.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/eflatuncafe-logo.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Eflatun Cafe</h5>
                                <p class="clients-item-text">
                                    Bizler gülümseyen insanlar uğurlayabilmek için; sohbetlerimizle, dostluğumuzla bir nefes olabilmek adına Eflatun Cafe’yi yaratmış bulunmaktayız....
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://eflatuncafe.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/egemdis.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">EGEM DİŞ</h5>
                                <p class="clients-item-text">
                                    Özel Egem Ağız ve Diş Sağlığı Polikliniği 2010 yılında kurulmuş olup ağız ve diş sağlığının tüm branşlarında hizmet vermektedir...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://egemdis.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img style="background-color: #576b6f" loading="lazy" src="<?= base_url () ?>/assets/img/ref/ems.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">EMS GRUP</h5>
                                <p class="clients-item-text">
                                    Önce sizi dinliyor, isteğiniz doğrultusunda evinizin ihtiyacı olan doğru çözümü uygun maliyetle sunuyoruz...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://emsgrup.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/fusun.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Fusun İrem TOTU</h5>
                                <p class="clients-item-text">
                                    Dr. F. İrem TOTU 1977 yılında İzmir’de doğdu. İlköğrenimini 1983-1988 yılları arasında Necatibey İlköğretim Okulu’nda,...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://fusuniremtotu.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email video">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/gallery-arya.jpg" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Gallery Arya</h5>
                                <p class="clients-item-text">
                                    Gallery Arya, after 1975's experience in the art world, art, art and society, new understanding in art, especially the art economy and artist economy,..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://gallery-arya.com" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/global.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">GLOBAL LEARNING VILLAGE</h5>
                                <p class="clients-item-text">
                                    GLV provides fulfilling education to students who are interested in achieving specific language objectives...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://globallearningvillage.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/guz.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">KUZEYEGE GÖZ DAL MERKEZİ</h5>
                                <p class="clients-item-text">
                                    Kuzeyege Göz Hastalıkları Dal Merkezi'nin hedef ve ilkeleri tanıda ve tedavide doğruluk ve güvenilirliktir...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://www.kuzeyegegoz.com.tr/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/hakmer.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Hakmer</h5>
                                <p class="clients-item-text">
                                    Hakmer (Hüseyin Avni Kelesoglu), one of the first Marble companies in Turkey, started its operations in 1967 at the Istanbul gunnery Aga....
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://hakmer.com.tr/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/impek.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Impeks Technic Glass</h5>
                                <p class="clients-item-text">
                                    Roma Dönemi'nden itibaren, hemen hemen tüm cam eşyaların üretiminde taş, maden ve seramik eşyalar taklit edilmiştir...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://impekstecnicglass.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/izmir-gas.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Kombi Servisi Izmir</h5>
                                <p class="clients-item-text">
                                    İzmir klima Kombi Servisi alanında deneyimli ekip ve profesyonel kadromuzla tüm izmir bölge...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://kombi-servisi-izmir.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/karsiyaka-plastik-logo.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Karşıyaka Plastik</h5>
                                <p class="clients-item-text">
                                    Karşıyaka Plastik; bireysel ve kurumsal pazardaki müşterilerinin ihtiyaçlarını dikkatle değerlendirerek kaliteli ürünler...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://karsiyakaplastik.com.tr/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/kibris-ilan.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Kibris Ilan</h5>
                                <p class="clients-item-text">
                                    ...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://xn--kbrs-ilan-vpbc.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/kibrismezat.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Kibris Mezat</h5>
                                <p class="clients-item-text">
                                    is a powerful & fully-featured penny auction that lets create the ultimate profitable online auction website..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://kibrismezat.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/kktc-sigorta.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">KKTC Sigorta</h5>
                                <p class="clients-item-text">
                                    Münevver ZORALİ Sigorta Acenteliği..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://kktc-sigorta.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/konil-sons.jpg" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Konil Sons Trading Ltd.</h5>
                                <p class="clients-item-text">
                                    Konil & Sons Trading Ltd. is giving service to private companies, grocery stores, fast food, serving companies,..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://konilsons.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/levent.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">DİŞ HEKİMİ LEVENT ÜNAL</h5>
                                <p class="clients-item-text">
                                    2008 yılında kurulmuş olan,ağız ve diş sağlığının tüm branşlarında hizmet veren,..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://dishekimileventunal.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/maya-plastic.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Maya Plastic</h5>
                                <p class="clients-item-text">
                                    Maya Production Platform including the latest technology works with the highest capacity. With the awareness of global conditions,..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://mayaplastic.co.uk" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm email">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/paziresh.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">پذیرش دانشجو قبرس</h5>
                                <p class="clients-item-text">
                                    متقاضیان ایرانی مقاطع کارشناسی و کارشناسی ارشد که از طریق این وب سایت برای پذیرش اقدام نمایند..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://www.xn-----ctdfsqfigudd8p0b6a39eh4b.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/sultan.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Dr. Sultan ÖLMEZ</h5>
                                <p class="clients-item-text">
                                    “Orthodontics is not just my profession, but my passion. I love what I do from start to finish, bu t definitely the most rewarding part of my work is the beatiful smiles at the end of the journey!”..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://sultanolmez.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/uygun.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Uygun Ağız ve Diş Sağlığı Polikliniği</h5>
                                <p class="clients-item-text">
                                    “Orthodontics is not just my profession, but my passion. I love what I do from start to finish, bu t definitely the most rewarding part of my work is the beatiful smiles at the end of the journey!”..
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="http://uygundis.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign seo smm">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/yaren-butik.jpg" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Yaren Boutique</h5>
                                <p class="clients-item-text">
                                    2019 yılının Mart ayında başlamış olduğumuz bu yolda zorluklar yaşamış olsak da, bizler için ve sizlere sunduğumuz hizmet açısından her zaman memnuniyetiniz ön plandaydı...
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://byyarentukellbutik.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item webDesign">
                            <div class="client-item-style2 col-3 bg-border-color mb30">
                                <div class="client-image">
                                    <img loading="lazy" src="<?= base_url () ?>/assets/img/ref/yorgun.png" alt="<?= lang ('seoPage.refT') ?>">
                                </div>
                                <h5 class="clients-item-title">Yorgun Zeytincilik</h5>
                                <p class="clients-item-text">
                                    Altınova nın tanınmış köklü Çiftçi ailesinin bir ferdi olarak rahmetli babam Malik YORGUN un 1973 de vefatının ardından payıma düşen azınlık miktarda zeytinlikle tarım sektörüne giriş yaptım....
                                </p>
                                <div class="btn btn-medium btn-border c-primary">
                                    <span class="text"><a href="https://byyarentukellbutik.com/" target="_blank"><?= lang ('ref.visit') ?></a></span>
                                    <span class="semicircle"></span>
                                    <i class="seoicon-right-arrow"></i>
                                </div>
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