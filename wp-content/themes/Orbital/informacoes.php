<?php

/**
 * Template Name: Informações
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

<body>
    <section data-aos="fade-down" data-aos-easing="" data-aos-duration="1000">
        <div class="bg-empresa d-flex justify-content-center align-items-center" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/informacoes-banner.png')">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 col-12">
                        <div class="bg-black-site rounded-3 p-5">
                            <h1 class="text-white mt-4 mb-4">CONHEÇA TODAS AS INFORMAÇÕES DA <b class="text-primary">ORBITAL</b></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 120px;">

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-center pos-top fs-5">

                        <!-- Formulário de pesquisa -->
                        <form method="GET" action="" class="form-info rounded-4 col-md-8 col-12 row">

                            <div class="d-flex mt-3 mb-3 col-md-6 col-12 p-0">
<!-- 
                                <span class="input-group-text fs-4" id="inputGroup-sizing-default">Marca:</span> -->
                                <select id="marca" name="marca" style="color: black; margin-right: 5px;" class="form-select fs-4">
                                    <option value="">Selecione uma Marca</option>
                                    <?php
                                    $marcas = obter_marcas_unicas();
                                    foreach ($marcas as $marca) : ?>
                                        <option value="<?php echo esc_attr($marca); ?>" <?php selected(isset($_GET['marca']) && $_GET['marca'] == $marca); ?>>
                                            <?php echo esc_html($marca); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>


                                <!-- <span class="input-group-text fs-4" id="inputGroup-sizing-default">Modelo:</span> -->
                                <select id="modelo" name="modelo" style="color: black" class="form-select fs-4">
                                    <option value="">Selecione um Modelo</option>
                                    <?php
                                    $modelos = obter_modelos_unicos();
                                    foreach ($modelos as $modelo) : ?>
                                        <option value="<?php echo esc_attr($modelo); ?>" <?php selected(isset($_GET['modelo']) && $_GET['modelo'] == $modelo); ?>>
                                            <?php echo esc_html($modelo); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="d-flex col-md-6 col-12 mt-3 mb-3 pl-1 gap-2">

                                <input placeholder="Busque um produto" class="form-control fs-4" style="color: black" type="text" id="produto" name="produto" value="<?php echo isset($_GET['produto']) ? esc_attr($_GET['produto']) : ''; ?>" />

                                <input type="submit" value="Buscar" class="btn btn-primary"/>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <?php
                        $args = array(
                            'post_type' => 'produto',
                            'posts_per_page' => -1, // Para mostrar todos os produtos
                            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                        );

                        // Array para armazenar todas as condições de filtro
                        $meta_query = array('relation' => 'AND');

                        // Verificar e adicionar a condição de filtro da marca
                        if (isset($_GET['marca']) && !empty($_GET['marca'])) {
                            $meta_query[] = array(
                                'key' => '_marca_produto',
                                'value' => sanitize_text_field($_GET['marca']),
                                'compare' => '='
                            );
                        }

                        // Verificar e adicionar a condição de filtro do modelo
                        if (isset($_GET['modelo']) && !empty($_GET['modelo'])) {
                            $meta_query[] = array(
                                'key' => '_modelo_produto',
                                'value' => sanitize_text_field($_GET['modelo']),
                                'compare' => '='
                            );
                        }

                        // Verificar e adicionar a condição de filtro do produto
                        if (isset($_GET['produto']) && !empty($_GET['produto'])) {
                            $args['s'] = sanitize_text_field($_GET['produto']);
                        }

                        // Adicionar o meta_query na consulta principal
                        if (!empty($meta_query)) {
                            $args['meta_query'] = $meta_query;
                        }

                        $query = new WP_Query($args);
                        $i = 100;
                        if ($query->have_posts()) :

                            while ($query->have_posts()) :
                                $query->the_post(); ?>

                                <div class="col-md-3 col-12" data-aos="fade-down" data-aos-easing="" data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>">
                                    <div class="bg-prod" style="background-image: url(' <?php the_post_thumbnail_url(); ?>')">
                                        <h3 class="title-prod"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?></a></h3>
                                    </div>
                                </div>


                                <!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="product-image w-25">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </header> -->



                            <?php
                                if ($i > 400) {
                                    $i = 100;
                                } else {
                                    $i += 100;
                                }
                            endwhile;

                            custom_pagination($query->max_num_pages, 2);



                        else : ?>

                            <article class="no-results not-found">
                                <header class="page-header">
                                    <h1 class="page-title"><?php _e('Nothing Found', 'textdomain'); ?></h1>
                                </header><!-- .page-header -->

                                <div class="page-content">
                                    <p><?php _e('It seems we can’t find what you’re looking for. Perhaps searching can help.', 'textdomain'); ?>
                                    </p>
                                    <?php get_search_form(); ?>
                                </div><!-- .page-content -->
                            </article><!-- .no-results -->

                        <?php endif; ?>

                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

        <!-- <div class="container">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="bg-prod" style="background-image: url('http://localhost/orbital/site-orbital/wp-content/uploads/2024/06/ev3.png')">
                        <h3 class="title-prod"><a href="#"> Teste</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-prod" style="background-image: url('http://localhost/orbital/site-orbital/wp-content/uploads/2024/06/ev3.png')">
                        <h3 class="title-prod"><a href="#"> Teste</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-prod" style="background-image: url('http://localhost/orbital/site-orbital/wp-content/uploads/2024/06/ev3.png')">
                        <h3 class="title-prod"><a href="#"> Teste</a></h3>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="bg-prod" style="background-image: url('http://localhost/orbital/site-orbital/wp-content/uploads/2024/06/ev3.png')">
                        <h3 class="title-prod"><a href="#"> Teste</a></h3>
                    </div>
                </div>
            </div>
        </div> -->

    </section>

    <?php get_template_part('templates/content', 'representante'); ?>

    <?php
    get_footer();
