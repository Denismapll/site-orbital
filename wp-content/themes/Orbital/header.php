<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (!get_option('site_icon')) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- LEAFLET -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<style>
	.nav-link {
		font-size: 13px;
	}
</style>
<header>
	<nav class="navbar navbar-expand-lg bg-body-tertiary pl-4 pr-4 m-0">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo home_url() ?>">
				<img class="w-75" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/orbital-logo.png" alt="" srcset="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php echo wp_nav_menu(array(
					'container' => false,
					'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
					'add_li_class'  => 'nav-item',
					'link_class' => 'nav-link'

				)); ?>

				<div class="d-flex flex-column justify-content-center align-items-center m-3">
					<p style="margin: 0; font-size: 12px;">Ligue Agora</p>
					<p style="margin: 0; font-size: 12px;">(11) 2085-7300</p>
				</div>

				<form role="search" method="get" class="search-form d-flex" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="search" class="search-field form-control me-2" placeholder="<?php echo esc_attr_x('Search', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" aria-label="Search" />
					<button type="submit" class="search-submit btn btn-outline-success"><?php echo esc_html_x('Search', 'submit button'); ?></button>
				</form>

			</div>
		</div>
	</nav>
</header>