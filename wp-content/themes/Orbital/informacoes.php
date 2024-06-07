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
    <section style="margin-bottom: 120px;">
        <div class="bg-empresa d-flex justify-content-center align-items-center"
            style="background-image: url('http://localhost/orbital-wp/wp-content/uploads/2024/06/informacoes-banner.png')">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 col-12">
                        <div class="bg-black-site rounded-3 p-5">
                            <h1 class="text-white mt-4 mb-4">CONHEÇA TODAS AS INFORMAÇÕES DA <b
                                    class="text-primary">ORBITAL</b></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 120px;">
        
    </section>

    <?php get_template_part('templates/content', 'representante'); ?>

    <?php
    get_footer();
