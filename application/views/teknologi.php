<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/logo.png'?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url().'theme/favicon.ico'?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/animate.css'?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/icomoon.css'?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.css'?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>">

	<!-- Modernizr JS -->


	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="<?php echo base_url().''?>">
				<img src="" alt="">
				Layanan Perpustakaan<span>.</span></a></h1>
				<nav rol="navigation">
					<ul>
						<li><a href="<?php echo base_url().''?>">Home</a></li>
                        <li><a href="<?php echo base_url().'visi'?>">Visi & Misi</a></li>
						<li><a href="<?php echo base_url().'info'?>">Info Layanan</a></li>
						<li><a href="<?php echo base_url().'about'?>">Sejarah</a></li>
						<li class="cta"><a href="<?php echo base_url().'auth'?>">Get started</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>


	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?php echo base_url().'theme/images/slide_1.jpeg'?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Visi dan Misi Dinas Kearsipan Dan Daerah Jawa Tengah.</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?php echo base_url().'theme/images/foto2.jpg'?>);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>visi dan misi dalam sebuah perusahaan dapat berfungsi untuk meningkatkan motivasi tenaga kerja atau karyawan dalam bekerja.</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-about animate-box">
		<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
			<h2>Tentang Perpustakaan</h2>
			<p>Perpustakaan Daerah Jawa Tengah (PERWIL SEMARANG)
            Badan Arsip dan Perpustakaan Pemerintah Provinsi Jawa Tengah.
            Alamat: Jalan Sriwijaya No 29A Semarang
            Nomor Telepon: 024 8317963 No Fax 024 8440479

            Tempat ini aslinya bernama Perpustakaan Daerah, Perpusda Jawa Tengah meski lebih banyak warga menyebutnya sebagai Perwil Semarang, perpustakaan ini berada satu area dengan Taman Budaya Raden Saleh, sebelah Wonderia.</p>
		</div>
		<div class="container">
			<div class="col-md-6">
				<figure>
					<img src="<?php echo base_url().'theme/images/foto5.jpg'?>" alt="Free HTML5 Template" class="img-responsive">
				</figure>
			</div>
			<div class="col-md-6">
				<h3>Visi</h3>
				<ul>
					<li>MENUJU JAWA TENGAH YANG SEJAHTERA DAN BERDIKARI.</li>
				</ul>
				<h3>Misi</h3>
				<ul>
					<li>Mewujudkan Penyelenggaraan Pemerintahan Provinsi Jawa Tengah yang Bersih, Jujur dan Transparan, “ Mboten Korupsi Mboten Ngapusi ”.</li>
					<li>Meningkatkan Kualitas Pelayanan Publik untuk Memenuhi Kebutuhan Dasar Masyarakat.</li>
				</ul>
			</div>
		</div>
	</div>


	<div id="fh5co-why-us" class="animate-box">
		<div class="container">
			<div class="row">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>LAYANAN</h2>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'assets/images/donasi.png'?>" class="img-responsive"></span>
					<h3>DONASI BUKU</h3>
					<p>Layanan ini dihadirkan untuk memudahkan anda dalam mendonasikan buku.</p>
					<p><a href="<?php echo base_url().'donasi'?>" class="btn btn-primary btn-outline with-arrow" target="_blank">Akses disini<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'assets/images/usulan.png'?>" class="img-responsive"></span>
					<h3>USULAN BUKU</h3>
					<p>Layanan ini dihadirkan untuk memudahkan anda dalam mengusulkan buku.</p>
					<p><a href="<?php echo base_url().'usulan'?>" target="_blank" class="btn btn-primary btn-outline with-arrow">Akses disini<i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block">
					<span class="icon"><img src="<?php echo base_url().'assets/images/aduan.png'?>" class="img-responsive"></span>
					<h3>ADUAN MASYARAKAT</h3>
					<p>Layanan ini dihadirkan untuk anda dalam mengadukan keluhan anda.</p>
					<p><a href="<?php echo base_url().'aduan'?>" class="btn btn-primary btn-outline with-arrow">Akses disini<i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="animate-box text-center">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31680.4159717406!2d110.425041!3d-7.00316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b626bcac435%3A0xc5ce4e5fed879ac9!2sPerpustakaan%20Provinsi%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1668704392573!5m2!1sid!2sid" width="70%" height="450" style="border:5px solid #333" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="text-center"></iframe>
    </div>
	
	<?php $this->load->view('footer');?>



	


	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>

	</body>
</html>
