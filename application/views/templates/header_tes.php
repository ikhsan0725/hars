<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Sistem Informasi Penggajian Selkom Group">
	<meta name="keywords" content="Sistem Informasi Penggajian Selkom Group">
	<meta name="author" content="Jihad">
	<title><?= $title ?> - Hammilton Anxiety Rating Scale (HARS)</title>
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/frontend/images/hars/unand.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/frontend/images/hars/unand.png">
	<link
		href="<?= base_url() ?>assets/css/fonts/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
		rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/forms/switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/charts/chartist.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/charts/chartist-plugin-tooltip.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/tables/datatable/datatables.min.css">

	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/daterange/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.date.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/vendors/css/pickers/pickadate/default.time.css">

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/forms/selects/select2.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/easy-autocomplete/easy-autocomplete.min.css">
	<link rel="stylesheet"
		  href="<?= base_url() ?>assets/css/plugins/easy-autocomplete/easy-autocomplete.themes.min.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/colors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/components.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/fonts/line-awesome/1.1/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/feather/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/simple-line-icons/style.min.css">
	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/css/core/menu/menu-types/vertical-menu.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pages/chat-application.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pages/dashboard-analytics.min.css">
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/css/plugins/pickers/daterange/daterange.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/animate/animate.min.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
	<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
	  data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<nav
	class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light d-print-none">
	<div class="navbar-wrapper">
		<div class="navbar-container content">
			<div class="collapse navbar-collapse show" id="navbar-mobile">
				<ul class="nav navbar-nav mr-auto float-left">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a
							class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
								class="ft-menu font-large-1"></i></a></li>
					<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
															  href="#"><i class="ft-menu"></i></a></li>
					<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
								class="ficon ft-maximize"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion d-print-none menu-shadow " data-scroll-to-active="true"
	 data-img="<?= base_url() ?>assets/images/backgrounds/02.jpg">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url('tes') ?>">
					<img class="brand-logo"
						 alt="Chameleon admin logo"
						 src="<?= base_url() ?>assets/frontend/images/hars/unand.png"/>
					<h3 class="brand-text">HARS</h3></a></li>
			<li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
		</ul>
	</div>
	<div class="navigation-background"></div>
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'data') echo 'active' ?>"><a
					href="<?= base_url('data') ?>"><i class="ft-calendar"></i><span class="menu-title"
																					 data-i18n="">Data Diri</span></a>
			</li>
			<li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title"
																			 data-i18n="">Pertanyaan</span></a>
				<ul class="menu-content">
					<li class="<?php if ($this->uri->segment(1) == 'q1') echo 'active' ?>"><a class="menu-item"
																									href="<?= base_url('q1') ?>"><i
								class="ft-award"> </i> Pertanyaan Ke-1</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q2') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q2') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-2</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q3') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q3') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-3</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q4') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q4') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-4</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q5') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q5') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-5</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q6') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q6') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-6</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q7') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q7') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-7</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q8') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q8') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-8</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q9') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q9') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-9</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q10') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q10') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-10</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q11') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q11') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-11</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q12') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q12') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-12</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q13') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q13') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-13</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'q14') echo 'active' ?>"><a class="menu-item"
																								   href="<?= base_url('q14') ?>"><i
								class="ft-award"></i> Pertanyaan Ke-14</a>
					</li>
				</ul>
			</li>
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'hasil') echo 'active' ?>"><a
					href="<?= base_url('hasil') ?>"><i class="ft-file"></i><span class="menu-title"
																					   data-i18n="">Hasil</span></a>
			</li>
			<!-- <li class=" nav-item <?php if ($this->uri->segment(1) == 'gaji') echo 'active' ?>"><a
					href="<?= base_url('gaji') ?>"><i class="icon-wallet"></i><span class="menu-title"
																					data-i18n="">Gaji</span></a>
			</li>
			<li class=" nav-item <?php if ($this->uri->segment(1) == 'pinjam') echo 'active' ?>"><a
					href="<?= base_url('pinjam') ?>"><i class="ft-calendar"></i><span class="menu-title"
																					  data-i18n="">Pinjaman</span></a>
			</li>
			<li class=" nav-item"><a href="<?= base_url('laporan') ?>"><i class="ft-file"></i><span
						class="menu-title"
						data-i18n="">Laporan</span></a>
			</li> -->
		</ul>
	</div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-wrapper-before"></div>
		<div class="content-header row">
		</div>
		<div class="content-body"><!-- Revenue, Hit Rate & Deals -->
