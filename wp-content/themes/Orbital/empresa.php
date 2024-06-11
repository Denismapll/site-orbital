<?php

/**
 * Template Name: Empresa
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

<body>
    <section style="margin-bottom: 120px;" data-aos="fade-down" data-aos-easing="" data-aos-duration="1000">
        <div class="bg-empresa d-flex justify-content-center align-items-center" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/empresa-bg.jpg')">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 col-12">
                        <div class="bg-black-site rounded-3 p-5">
                            <h3 class="text-primary fw-bold">DESDE 2003</h3>
                            <h1 class="text-white mt-4 mb-4">SOMOS CONHECIDOS POR NOSSOS PRODUTOS</h1>
                            <p class="text-white fs-3">E qualidade no desenvolvimento de peças para motocicletas.
                                Alcançou o reconhecimento de revendedores e motociclistas rapidamente e tornou-se
                                líder no segmento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 120px;">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-none d-md-block" data-aos="fade-right" data-aos-easing="" data-aos-duration="1000">
                        <div class="bg-conheca" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2024/06/fan-conheca.png')">
                        </div>
                    </div>
                    <div class="col-md-6 col-12" data-aos="fade-left" data-aos-easing="" data-aos-duration="1000">
                        <div class="h-100">
                            <div class="conheca-ajuste d-flex justify-content-center align-items-center flex-column rounded-3 h-100">
                                <div class="cont bg-white rounded-3 p-5">
                                    <h2 class="text-primary text-center">Conheça nossa empresa</h2>
                                    <p class="text-black fs-3">Presente no mercado desde 2003, a Orbital é
                                        conhecida por
                                        seus
                                        produtos e qualidade no desenvolvimento de peças para motocicletas. Alcançou o
                                        reconhecimento de revendedores e motociclistas rapidamente e tornou-se líder no
                                        segmento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom: 120px;">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-3 col-12 mt-3 mb-3" data-aos="fade-down" data-aos-easing="" data-aos-duration="2000" data-aos-delay="300">
                    <div class="missao">
                        <div class="missao-cont d-flex flex-column justify-content-around align-items-center text-center p-5">
                            <img class="mb-2" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/icon-missao.png" alt="" srcset="">
                            <h2 class="text-primary mb-5 fw-bold">MISSÃO</h2>
                            <p class="fs-4">
                                A missão da Orbital é produzir peças de acordo com a demanda do mercado, respeitando o
                                padrão de qualidade da marca e garantindo a satisfação de revendedores e clientes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-3 mb-3" data-aos="fade-down" data-aos-easing="" data-aos-duration="2000" data-aos-delay="600">
                    <div class="visao">
                        <div class="visao-cont d-flex flex-column justify-content-around align-items-center text-center p-5">
                            <img class="mb-2" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/icon-visao.png" alt="" srcset="">
                            <h2 class="text-primary mb-5 fw-bold">VISÃO</h2>
                            <p class="fs-4">
                                Ser reconhecida como uma empresa sólida, de confiança e que agregue valor e qualidade
                                aos seus produtos </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 mt-3 mb-3" data-aos="fade-down" data-aos-easing="" data-aos-duration="2000" data-aos-delay="900">
                    <div class="valores">
                        <div class="valores-cont d-flex flex-column justify-content-around align-items-center text-center p-5">
                            <img class="mb-2" src="<?= wp_upload_dir()['baseurl'] ?>/2024/06/icon-valores.png" alt="" srcset="">
                            <h2 class="text-primary mb-5 fw-bold">VALORES</h2>
                            <p class="fs-4">
                                A Orbital tem valores éticos, preza pela transparência, respeito e responsabilidade
                                desde o desenvolvimento de seus produtos até o seu público final. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('templates/content', 'representante'); ?>

    <?php
    get_footer();
