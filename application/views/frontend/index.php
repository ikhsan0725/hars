<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<!--- basic page needs
    ================================================== -->
	<meta charset="utf-8">
	<title>Hammilton Anxiety Rating Scale (HARS)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/base.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/vendor.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/main.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/slideshow.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/member.css">

	<!-- script
    ================================================== -->
	<script src="<?= base_url() ?>assets/frontend/js/modernizr.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/pace.min.js"></script>

	<!-- favicons
    ================================================== -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/frontend/images/hars/unand.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url() ?>assets/frontend/images/hars/unand.png" type="image/x-icon">

</head>

<body id="top">

	<!-- header
================================================== -->
	<header class="s-header">

			<div class="header-logo">
				<a class="site-logo" href="<?= base_url()?>">
					<img src="<?= base_url()?>assets/frontend/images/hars/unand.png" alt="Homepage">
				</a>
			</div>
		<!-- end header-logo -->

		<nav class="header-nav">

			<a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

			<div class="header-nav__content">
				<h3>Menu</h3>

				<ul class="header-nav__list">
					<li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
					<li><a class="smoothscroll" href="#gallery" title="istilah">Istilah</a></li>
					<li><a href="<?= base_url('tes') ?>" title="lakukan tes">Lakukan Tes</a></li>
					<!-- <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li> -->
					<li><a href="<?= base_url('login') ?>" title="login">Login</a></li>
				</ul>

				<!--			<p>Perspiciatis hic praesentium nesciunt. Et neque a dolorum <a href='#0'>voluptatem</a> porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit.</p>-->

				<ul class="header-nav__social">
					<li>
						<a href="#0"><i class="fab fa-whatsapp"></i></a>
					</li>
					<li>
						<a href="#0"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="#0"><i class="fa fa-envelope"></i></a>
					</li>					
				</ul>

			</div> <!-- end header-nav__content -->

		</nav> <!-- end header-nav -->

		<a class="header-menu-toggle" href="#0">
			<span class="header-menu-icon"></span>
		</a>

	</header> <!-- end s-header -->


	<!-- home
================================================== -->
	<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?= base_url() ?>assets/frontend/images/hars/background.png" data-natural-width=3000 data-natural-height=2000 data-position-y=top>

		<div class="shadow-overlay"></div>

		<div class="home-content">

			<div class="row home-content__main">
				<h1>
					ANXIETY <br>
				</h1>

				<p class="h1">
				Rasa cemas atau anxiety adalah hal yang normal dirasakan ketika seseorang menghadapi situasi atau mendengar berita yang menimbulkan rasa takut atau khawatir.
				<br>
				~Alodokter
				</p>
				<!-- Glow Over 
				============== -->
				<style>
						.glow-on-hover {
							width: 220px;
							height: 50px;
							border: none;
							outline: none;
							color: #111;
							background: #111;
							cursor: pointer;
							position: relative;
							z-index: 0;
							border-radius: 10px;
						}

						.glow-on-hover:before {
							content: '';
							background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
							position: absolute;
							color: #fff;
							top: -2px;
							left:-2px;
							background-size: 400%;
							z-index: -1;
							filter: blur(5px);
							width: calc(100% + 4px);
							height: calc(100% + 4px);
							animation: glowing 20s linear infinite;
							opacity: 0;
							transition: opacity .3s ease-in-out;
							border-radius: 10px;
						}

						.glow-on-hover:active {
							color: #000
						}

						.glow-on-hover:active:after {
							background: transparent;
						}

						.glow-on-hover:hover:before {
							opacity: 1;
						}

						.glow-on-hover:after {
							z-index: -1;
							content: '';
							position: absolute;
							width: 100%;
							height: 100%;
							background: #fff;
							left: 0;
							top: 0;
							border-radius: 10px;
						}

						@keyframes glowing {
							0% { background-position: 0 0; }
							50% { background-position: 400% 0; }
							100% { background-position: 0 0; }
						}
					</style>
					<!-- end Glow over -->

						<a href="<?= base_url('tes') ?>"><button type="button" class="glow-on-hover" style="justify-content: center;">
							<strong>Lakukan Tes!</strong>
						</button></a>
			</div> <!-- end home-content__main -->
					
		</div> <!-- end home-content -->

		<ul class="home-sidelinks">
			<li><a class="smoothscroll" href="#gallery">Istilah<span>Lebih Mengenal</span></a></li>
			<li><a class="smoothscroll" href="#location">Tentang Kami<span>Membership</span></a></li>
			<!-- <li><a class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li> -->
		</ul> <!-- end home-sidelinks -->

		<!-- <ul class="home-social">
			<li class="home-social-title">
			</li>
			<li><a href="#0">
					<i class="fab fa-facebook"></i>
					<span class="home-social-text">Facebook</span>
				</a></li>
			<li><a href="#0">
					<i class="fab fa-twitter"></i>
					<span class="home-social-text">Twitter</span>
				</a></li>
			<li><a href="#0">
					<i class="fab fa-linkedin"></i>
					<span class="home-social-text">LinkedIn</span>
				</a></li>
		</ul>  -->
		<!-- end home-social -->

		<a href="#gallery" class="home-scroll smoothscroll">
			<span class="home-scroll__text">Lihat lebih banyak</span>
			<span class="home-scroll__icon"></span>
		</a> <!-- end home-scroll -->

	</section> <!-- end s-home -->


	<!-- about
================================================== -->
	<!-- end s-about -->


	<!-- services
================================================== -->
	<section id='gallery' class="s-services light-gray">

		<div class="row section-header" data-aos="fade-up">
			<div class="col-full">
				<h3 class="subhead" style="text-align: center;">ISTILAH</h3>
				<!--			<h1 class="display-1">We have everything you need to launch and grow a successful digital business.</h1>-->
			</div>
		</div> <!-- end section-header -->

		<div class="row" data-aos="fade-up">
			<div class="col-full">
				<!-- Slideshow container -->
				<div class="slideshow-container">

					<!-- Full-width images with number and caption text -->
					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)" style="background-color: rgba(0, 0, 0, 0.7)">1 / 4</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/amenorrhoea.jpg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Amenorrhoea</b>, Kondisi tidak terjadinya menstruasi atau haid. Kondisi ini bisa dibagi menjadi amenorrhea primer dan sekunder. Amenorrhea perlu ditangani, karena bisa menjadi tanda dari penyakit yang serius, seperti tumor kelenjar pituitari.</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">2 / 4</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/anxiety.jpg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Anxietas</b>, Rasa cemas atau anxiety adalah hal yang wajar, terutama jika dalam tekanan atau kondisi tertentu. Namun, jika rasa cemas dan khawatir menjadi tidak terkendali, berlebihan, bahkan sampai mengganggu aktivitas sehari-hari, maka hal ini bisa menjadi tanda gangguan kecemasan umum.</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">3 / 4</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/....jpg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Ejakulasi Praecocks</b>, ...</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">4 / 4</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/....jpg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Ereksi</b>, ...</div>
					</div>

					<!-- <div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">5 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/namira.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Namira Ponsel</b>, Jalan Suka Karya, Kecamatan Tampan</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">6 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/selkom.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Selkom Ponsel</b>, Jalan Terubuk, Kecamatan Marpoyan Damai</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">7 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/sk.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>SK Ponsel</b>, Jalan Duyung, Kecamatan Marpoyan Damai</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">8 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/syafian.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Syafian Ponsel</b>, Jalan Suka Karya Ujung, Tarai Bangun</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">9 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/syafitra.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Syafitra Ponsel</b>, Jalan Suka Karya, Kecamatan Tampan</div>
					</div>

					<div class="mySlides fade" style="width: 100%">
						<div class="numbertext" style="background-color: rgba(0, 0, 0, 0.7)">10 / 10</div>
						<img src="<?= base_url() ?>assets/frontend/images/hars/syahdan.jpeg" style="width: 100%; height: 650px; margin: 0 auto">
						<div class="text" style="background-color: rgba(0, 0, 0, 0.7)"><b>Syahdan Ponsel</b>, Jalan Duyung, Kecamatan Marpoyan Damai</div>
					</div> -->

					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<!-- <span class="dot" onclick="currentSlide(5)"></span>
					<span class="dot" onclick="currentSlide(6)"></span>
					<span class="dot" onclick="currentSlide(7)"></span>
					<span class="dot" onclick="currentSlide(8)"></span>
					<span class="dot" onclick="currentSlide(9)"></span>
					<span class="dot" onclick="currentSlide(10)"></span> -->
				</div>
			</div>
		</div> <!-- end about-desc -->

	</section>
	<!-- end s-services -->


	<!-- works
================================================== -->
	<section id='location' class="s-works">

		<div class="row section-header" data-aos="fade-up">
			<div class="col-full">
				<h3 class="subhead" style="text-align: center;">TENTANG KAMI</h3>
				<!--			<h1 class="display-1">These are some of our recent design projects and we are so excited to show them to you.</h1>-->
			</div>
		</div> <!-- end section-header -->

		<div class="row masonry-wrap">
			<div class="masonry">
				<div class="masonry__brick" data-aos="fade-up">

					<div class="responsive-container-block container">
						<div class="responsive-container-block">
							<div class="responsive-cell-block wk-desk-2 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
								<div class="card">
									<div class="team-image-wrapper">
										<img src="<?= base_url() ?>assets/frontend/images/hars/pertama.png"
											class="team-member-image" />
									</div>
									<p class="text-blk name">Kontak Pertama
									</p>
									<p class="text-blk position">...
									</p>
									<p class="text-blk feature-text">...
									</p>
									<div class="social-icons">
										<a href="https://www.instagram.com" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.twitter.com" target="_blank">
											<i class="fab fa-whatsapp"></i>
										</a>
										<a href="https://www.facebook.com" target="_blank">
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="responsive-cell-block wk-desk-2 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
								<div class="card">
									<div class="team-image-wrapper">
										<img src="<?= base_url() ?>assets/frontend/images/hars/kedua.png"
											class="team-member-image" />
									</div>
									<p class="text-blk name">Kontak Kedua
									</p>
									<p class="text-blk position">...
									</p>
									<p class="text-blk feature-text">...
									</p>
									<div class="social-icons">
									<a href="https://www.instagram.com" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.twitter.com" target="_blank">
											<i class="fab fa-whatsapp"></i>
										</a>
										<a href="https://www.facebook.com" target="_blank">
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="responsive-cell-block wk-desk-2 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
								<div class="card">
									<div class="team-image-wrapper">
										<img src="<?= base_url() ?>assets/frontend/images/hars/ketiga.png"
											class="team-member-image" />
									</div>
									<p class="text-blk name">Kontak Ketiga
									</p>
									<p class="text-blk position">...
									</p>
									<p class="text-blk feature-text">...
									</p>
									<div class="social-icons">
									<a href="https://www.instagram.com" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.twitter.com" target="_blank">
											<i class="fab fa-whatsapp"></i>
										</a>
										<a href="https://www.facebook.com" target="_blank">
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="responsive-cell-block wk-desk-2 wk-ipadp-4 wk-tab-6 wk-mobile-12 card-container">
								<div class="card">
									<div class="team-image-wrapper">
										<img src="<?= base_url() ?>assets/frontend/images/hars/keempat.png"
											class="team-member-image" />
									</div>
									<p class="text-blk name">Kontak Keempat
									</p>
									<p class="text-blk position">...
									</p>
									<p class="text-blk feature-text">...
									</p>
									<div class="social-icons">
										<a href="https://www.instagram.com" target="_blank">
											<i class="fab fa-instagram"></i>
										</a>
										<a href="https://www.twitter.com" target="_blank">
											<i class="fab fa-whatsapp"></i>
										</a>
										<a href="https://www.facebook.com" target="_blank">
											<i class="fa fa-envelope"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					

				</div> <!-- end masonry__brick -->

			</div> <!-- end masonry -->
		</div> <!-- end masonry-wrap -->


	</section> <!-- end s-works -->


	<!-- stats
================================================== -->


	<!-- contact
================================================== -->
	<section id="contact" class="s-contact">

		<div class="row section-header" data-aos="fade-up">
			<div class="col-full">
				<h3 class="subhead subhead--light">Kontak Kami</h3>
			</div>
		</div> <!-- end section-header -->

		<div class="row">
			<div class="col-full contact-main" data-aos="fade-up">
				<p>
					<a href="mailto:#0" class="contact-email">mail@ikhsanayatul.me</a>
					<span class="contact-number">+62 822-4156-3226</span>
				</p>
			</div> <!-- end contact-main -->
		</div> <!-- end row -->

		<div class="row">

			<div class="col-five tab-full contact-secondary" data-aos="fade-up">
				<h3 class="subhead subhead-light">Alamat</h3>

				<p class="contact-address">
					Jalan Uka<br>
					<br>
				</p>
			</div> <!-- end contact-secondary -->

			<div class="col-five tab-full contact-secondary" data-aos="fade-up">
				<h3 class="subhead subhead--light">Ikuti Kami</h3>

				<ul class="contact-social">
					<li>
					<a href="https://www.instagram.com" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					</li>
					<li>
						<a href="https://www.facebook.com" target="_blank">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com" target="_blank">
							<i class="fa fa-envelope"></i>
						</a>
					</li>
				</ul> <!-- end contact-social -->

				<div class="contact-subscribe">
					<form id="mc-form" class="group mc-form" novalidate="true">
						<input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
						<input type="submit" name="subscribe" value="Subscribe">
						<label for="mc-email" class="subscribe-message"></label>
					</form>
				</div> <!-- end contact-subscribe -->
			</div> <!-- end contact-secondary -->

		</div> <!-- end row -->

		<div class="row">
			<div class="col-full cl-copyright">
				<span>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | <a href="http://wikidevia.digtive.id/" target="_blank">...</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>

		<div class="cl-go-top">
			<a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
		</div>

	</section> <!-- end s-contact -->


	<!-- photoswipe background
================================================== -->
	<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">

			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>

		</div>

	</div> <!-- end photoSwipe background -->


	<!-- preloader
================================================== -->
	<div id="preloader">
		<div id="loader">
		</div>
	</div>

	<!-- Java Script
================================================== -->
	<script src="<?= base_url() ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/plugins.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/main.js"></script>
	<script type="text/javascript">
		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>

</body>

</html>
