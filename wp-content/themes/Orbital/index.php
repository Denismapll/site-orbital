<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<body>
	<section style="height: 80vh" class="mt-3 mb-3" data-aos="fade-down"
     data-aos-easing=""
     data-aos-duration="1000">
		<div class="container d-flex align-items-center" style="height: 100%; background: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/nxr-160-home.png');     background-repeat: no-repeat;
	background-position: right;">
			<div class="col-md-6">
				<h1 class="fw-bold mt-3 mb-3">PEÇAS DE REPOSIÇÃO E ACESSÓRIOS PARA MOTOCICLETAS</h1>
				<h3 class="fs-1 text-primary fw-bold">Presente no mercado desde 2003 </h3>
				<div class="row flex-row">
					<button type="button" style="width: fit-content;" class="btn btn-primary m-2 p-4 fs-4 rounded fw-bold">SER REPRESENTANTE</button>
					<button type="button" style="width: fit-content;" class="btn btn-dark m-2 p-4 fs-4 rounded fw-bold">PRODUTOS</button>
				</div>
			</div>
		</div>
	</section>

	<section style="height: 20vh" class="mt-3 mb-3" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
		<div class="container d-flex justify-content-center align-items-center">
			<p class="fs-2 w-75">
				A <b class="text-primary fs-1">Orbital</b> é conhecida por seus produtos e qualidade no desenvolvimento
				de peças para motocicletas. Alcançou o reconhecimento de revendedores e motociclistas rapidamente e
				tornou-se líder no segmento.
			</p>
		</div>
	</section>

	<section style="margin-bottom: 120px;" >
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-md-3 col-6" data-aos="fade-down"
     data-aos-easing=""
     data-aos-duration="2000"
		 data-aos-delay="200">
					<div class="bg-pecas" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/rabetas-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">RABETA</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6" data-aos="fade-down"
     data-aos-easing=""
     data-aos-duration="2000"
		 data-aos-delay="400">
					<div class="bg-pecas" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/rear-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">REAR</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6" data-aos="fade-down"
     data-aos-easing=""
     data-aos-duration="2000"
		 data-aos-delay="600">
					<div class="bg-pecas" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/pedaleiras-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">PEDALEIRAS</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6" data-aos="fade-down"
     data-aos-easing=""
     data-aos-duration="2000"
		 data-aos-delay="800">
					<div class="bg-pecas" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/protetor-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">PROTETOR DE MÃO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="margin-bottom: 120px;">
		<div class="container">
			<div class="col-12" data-aos="fade-right">
				<h3>Nossos Produtos</h3>
				<h1 class="text-primary fw-bold">EM DESTAQUE</h1>
				<p style="text-align: right;"><a style="color: black; text-decoration: none" href="#">Ver Todos<br><img style="width: 12px;" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/seta-direita.png" alt="" srcset=""></a></p>
			</div>
			<div class="row">
				<div class="col-md-4 col-12" style="padding: 20px;" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200">
					<div class="bg-destaques" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/roldana.jpg')">
						<div class="abs-destaques">
							<a href="#" class="link-custom" style="color: white;">Roldana <br> Para Moto</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12" style="padding: 20px;" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400">
					<div class="bg-destaques" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/pedal.jpg')">
						<div class="abs-destaques">
							<a href="#" class="link-custom" style="color: white;">Pedal <br> Para Moto</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12" style="padding: 20px;" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="600">
					<div class="bg-destaques" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/carcaca.jpg')">
						<div class="abs-destaques">
							<a href="#" class="link-custom" style="color: white;">Carcaca <br> Para Moto</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="height: 70vh; margin-bottom: 120px;" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
		<div class="container" style="height: 100%; background: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/cg-160.png');     background-repeat: no-repeat;
	background-position: center; background-size: contain">
			<div class="col-md-6" data-aos-delay="600" data-aos="zoom-out-right">
				<h1 class="fw-bold mt-3">Como todos os automóveis e máquinas,</h1>
				<h3> as motocicletas precisam de rotinas periódicas de manutenção, ocasiões nas quais pode ser
					necessário comprar peças de moto novas para garantir a adequação do veículo às condições ideais de
					circulação.</h3>
			</div>
		</div>
	</section>

	<section data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="col-12">
				<h1 class="text-primary fw-bold">NOVIDADE</h1>
				<h3 class="fw-bold mb-5">Na Orbital</h3>
			</div>
			<div class="row" style="min-height: 400px;">
				<div class="col-md-8 col-12">
					<div class="row p-3">
						<div class="col-md-6 col-12 p-3"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<a href="#">
								<div class="bg-novidade" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/novidade1.png');">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-12 p-3"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
							<a href="#">
								<div class="bg-novidade" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/novidade2.png');">
								</div>
							</a>
						</div>
					</div>
					<div class="row p-3">
						<div class="col-md-6 col-12 p-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
							<a href="#">
								<div class="bg-novidade" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/novidade3.png');">
								</div>
							</a>
						</div>
						<div class="col-md-6 col-12 p-3"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
							<a href="#">
								<div class="bg-novidade" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/novidade4.png');">
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12" style="padding-bottom: 10px;"  data-aos="fade-up" data-aos-duration="2000">
					<div class="bg-saibamais" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/saiba-mais.png');">
						<div style="min-height: 450px;" class="bg-black-site text-center d-flex flex-column justify-content-around align-items-center h-100">
							<h1>SAIBA MAIS</h1>
							<h2>Veja o Nosso<br>Catálogo</h2>
							<button class="btn btn-primary m-2 p-3 fs-4 rounded-4 fw-bold">CATÁLOGO</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('templates/content', 'representante'); ?>

	<?php
	get_footer();
