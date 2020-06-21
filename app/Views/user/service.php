<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!--? Hero Start -->
<div class="slider-area">
	<div class="slider-height2 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap hero-cap2 text-center">
						<h2>Services</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Hero End -->
<!-- Services Area End -->
<!--? Blog Ara Start -->
<section class="home-blog-area section-padding30">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="single-team mb-60">
					<div class="team-img">
						<img src="assets/img/gallery/blog01.png" alt="">
					</div>
					<div class="team-caption">
						<h3><a href="<?= base_url() ?>/service">Web Development</a></h3>
						<p>I specialize in website design and development services. My web experiences is high-performing, feature-packed and digitally transformative, designed to be user-friendly, fully functional, very secure and able to scale as your enterprise grows.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="single-team mb-60">
					<div class="team-img">
						<img src="assets/img/gallery/blog02.png" alt="">
					</div>
					<div class="team-caption">
						<h3><a href="<?= base_url() ?>/service">Mobile Development</a></h3>
						<p>Provide an android mobile application development services so you can reach your customers on their favorite devices.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="single-team mb-60">
					<div class="team-img">
						<img src="assets/img/gallery/blog03.png" alt="">
					</div>
					<div class="team-caption">
						<h3><a href="<?= base_url() ?>/service">Video Creation</a></h3>
						<p>Provide stunning videos content and service in order to meet your requirements.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services Ara End -->

<?= $this->endSection() ?>