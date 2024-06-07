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
	<section style="height: 80vh" class="mt-3 mb-3">
		<div class="container d-flex align-items-center" style="height: 100%; background: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/nxr-160-home.png');     background-repeat: no-repeat;
	background-position: right;">
			<div class="col-md-6">
				<h1 class="fw-bold mt-3 mb-3">PEÇAS DE REPOSIÇÃO E ACESSÓRIOS PARA MOTOCICLETAS</h1>
				<h3 class="fs-1 text-primary fw-bold">Presente no mercado desde 2003</h3>
				<div class="row flex-row">
					<button type="button" style="width: fit-content;"
						class="btn btn-primary m-2 p-4 fs-4 rounded fw-bold">SER REPRESENTANTE</button>
					<button type="button" style="width: fit-content;"
						class="btn btn-dark m-2 p-4 fs-4 rounded fw-bold">PRODUTOS</button>
				</div>
			</div>
		</div>
	</section>

	<section style="height: 20vh" class="mt-3 mb-3">
		<div class="container d-flex justify-content-center align-items-center">
			<p class="fs-2 w-75">
				A <b class="text-primary fs-1">Orbital</b> é conhecida por seus produtos e qualidade no desenvolvimento
				de peças para motocicletas. Alcançou o reconhecimento de revendedores e motociclistas rapidamente e
				tornou-se líder no segmento.
			</p>
		</div>
	</section>

	<style>
		.bg-pecas {
			margin: 15px;
			padding: 10px;
			height: 238px;
			border-radius: 30px;
			box-shadow: 1px 1px 10px 1px;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			position: relative;
			overflow: hidden;
		}

		.abs {
			font-size: 22px;
			width: 100%;
			text-align: center;
			border-top: 2px solid blue;
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0;
			color: white;
			height: 50px;
			padding-top: 6px;
			background-color: rgba(0, 0, 0, 0.4);
		}
		.link-custom {
			color: white;
			text-decoration: none;
			transition: 1s all;
			font-weight: 800;
		}
		.link-custom:hover {
			color: whitesmoke;
			text-decoration: none;
		}
	</style>

	<section style="margin-bottom: 120px;">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-md-3 col-6">
					<div class="bg-pecas"
						style="background-image: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/rabetas-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">RABETA</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="bg-pecas"
						style="background-image: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/rear-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">REAR</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="bg-pecas"
						style="background-image: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/pedaleiras-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">PEDALEIRAS</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="bg-pecas"
						style="background-image: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/protetor-index.png');">
						<p style="font-size: 16px; font-weight: 800;" class="text-right"><a href="#">VER</a></p>
						<div class="abs">
							<a href="#" class="link-custom">PROTETOR DE MÃO</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>

<?php
get_footer();
