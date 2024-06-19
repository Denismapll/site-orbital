<?php

/**
 * Template Name: Contato
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
        <div class="bg-empresa d-flex justify-content-center align-items-center"
            style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/bg-contato.png')">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-12 col-12 row justify-content-center">
                        <div class="bg-black-site rounded-3 p-3 col-md-6 col-12 text-center">
                            <h1 class="text-white mt-4 mb-4 fw-bold">ENTRE EM CONTATO</h1>
                            <h1 class="text-primary fw-bold">CONOSCO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-form1 {
            position: relative;
            top: -30px;
        }

        .bg-form2 {
            position: relative;
            top: -50px;
        }
    </style>

    <section style="margin-bottom: 120px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-12 rounded-4 bg-form1 bg-white"  style="box-shadow: 1px 1px 10px -1px black;">
                    <div class="h-100 rounded-3 p-4">
                        <h1 class="text-center fw-bold mt-5">Deixe sua Mensangem</h1>
                        <?php  the_post() ;echo the_content();?>
                        teste
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-5 col-12 rounded-4 bg-form2">
                    <div class="rounded-3 p-4 text-white" style="background: #2885ed;">
                        <div class="row">
                            <div class="col-md-6 col-12 p-2 d-flex justify-content-center align-items-center gap-4">
                                <img class="w-25" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/phone.png" alt=""
                                    srcset="">
                                <div class="d-flex justify-content-around h-100 align-items-center flex-column">
                                    <p class="m-0 fs-5">11 2085-7300</p>
                                    <p class="m-0 fs-5">11 97424-4283</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 p-2 d-flex justify-content-center align-items-center gap-4">
                                <img class="w-25" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/email.png" alt=""
                                    srcset="">
                                <div class="d-flex justify-content-around h-100 align-items-center flex-column">
                                    <p class="m-0 fs-5">contato@orbital.com.br</p>
                                    <p class="m-0 fs-5">comercial@orbital.com.br</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/content', 'representante'); ?>

    <?php
    get_footer();
