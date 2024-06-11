<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <style>
            .container.mt-5.mb-5.p-5 img {
                border-radius: 15px;
            }

            .veja-tambem {
                margin-top: 40px;
            }

            .veja-tambem h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .produtos-relacionados {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }

            .produto-relacionado {
                flex: 1 1 calc(25% - 20px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 10px;
                text-align: center;
            }

            .produto-relacionado .thumbnail {
                margin-bottom: 10px;
            }

            .produto-relacionado h3 {
                font-size: 18px;
                margin: 10px 0;
            }

            .produto-relacionado a {
                text-decoration: none;
                color: inherit;
            }
        </style>


        <script>
            window.onload = () => {
                document.querySelector("#carouselExampleIndicators > div > div:nth-child(1)").classList.add('active')
            }
        </script>
        <?php while (have_posts()) : the_post(); ?>

            <?php $y = get_field('galeria'); ?>

            <section>
                <div class="container mt-5 mb-5 p-5">
                    <div class="row justify-content-around">
                        <div class="col-md-5 col-12">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-inner">
                                    <?php if (!empty($y)) : foreach ($y as $url) : if (!empty($url)) : ?>
                                                <div class="carousel-item ">
                                                    <img src="<?= $url ?>" class="d-block w-100" alt="<?= $url ?>">
                                                </div>
                                    <?php endif;
                                        endforeach;
                                    endif; ?>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/577/380?random=2" class="d-block w-100" alt="https://picsum.photos/577/380?random=2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/577/380?random=3" class="d-block w-100" alt="https://picsum.photos/577/380?random=3">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="row mt-3 mb-3">
                                <?php $i = 0;
                                if (!empty($y)) : foreach ($y as $key => $url) : if (!empty($url)) : ?>
                                            <div class="col-md-4 col-12">
                                                <img class="w-100" src="<?php echo $url; ?>" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="active" aria-current="true" aria-label="Slide 1">
                                            </div>
                                <?php $i++;
                                        endif;
                                    endforeach;
                                endif; ?>
                                <div class="col-md-4 d-none d-md-block">
                                    <img class="w-100" src="https://picsum.photos/577/380?random=2" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1">
                                </div>
                                <div class="col-md-4 d-none d-md-block">
                                    <img class="w-100" src="https://picsum.photos/577/380?random=3" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="d-flex flex-column justify-content-around align-items-center h-100">
                                <h1><?php echo the_title(); ?></h1>
                                <div class="d-flex gap-4">
                                    <p class="fs-4">Marca: <?php echo esc_html(get_post_meta(get_the_ID(), '_marca_produto', true)); ?></p>
                                    <p class="fs-4">Modelo: <?php echo esc_html(get_post_meta(get_the_ID(), '_modelo_produto', true)); ?></p>
                                </div>
                                <p class="fs-3 text-justify">Como todos os automóveis e máquinas,
                                    as motocicletas precisam de rotinas periódicas de manutenção, ocasiões nas quais pode ser necessário
                                     comprar peças de moto novas para garantir a adequação do veículo às condições ideais de circulação.</p>
                                <button type="button" style="width: fit-content;" class="btn btn-primary m-2 p-4 fs-4 rounded fw-bold">ORÇAMENTO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <p class="fs-3 text-center">
                            Neste contexto, comprar peças de moto de acordo com as necessidades de manutenção do equipamento é de crítica importância para a prevenção de acidentes, bem como para evitar a aplicação de sanções pela fiscalização de trânsito em função de más condições do veículo.
                            Assim, no caso da aplicação de uma cuidadosa rotina de manutenções preventivas, pela precoce observação de defeitos em diversos componentes, é possível comprar peças de moto antes que o veículo apresente falhas graves ou tenha mais de uma peça avariada, o que promove uma significativa economia para o proprietário.
                            <br><br>
                             
                            SITUAÇÕES EM QUE É NECESSÁRIO COMPRAR PEÇAS DE MOTO<br><br>

                            Na maioria dos casos é preciso comprar peças de moto diante da aplicação de manutenções de emergência, que ocorrem quando o veículo já está apresentando falhas que impedem sua circulação, ou que reduzam sua eficiência ou segurança. 
                            No entanto, seja em qual contexto de manutenção for, é sempre importante ter o cuidado de comprar peças de moto de boa qualidade e adequadas para o modelo em questão. Somente assim é possível solucionar de maneira eficiente os problemas de funcionamento e garantir a segurança da moto.
                            <br><br>

                            PRINCIPAIS CUIDADOS AO COMPRAR PEÇAS DE MOTO<br><br>

                            Tanto para as lojas que oferecem este produto ao consumidor final, quanto para os proprietários das motocicletas, é sempre importante ter o cuidado de comprar peças de moto que atendam aos requisitos específicos de cada modelo. Dentro deste âmbito, cabe destacar que é possível comprar peças de moto originais ou alternativas, sendo que a segunda modalidade geralmente oferece um ótimo custo-benefício, quando produzidas por fabricantes especializados, em função de seu custo acessível.
                            <br><br>

                            DIVERSIDADE DE OPÇÕES E SOLUÇÕES EM PEÇAS PARA MOTOS<br><br>

                            Com um raio de atendimento que cobre todas as regiões do Brasil, a Orbital fornece um catálogo diversificado de peças para motos, disponibilizando peças de fabricação própria que atendem às exigências dimensionais e de operação de cada modelo de motocicleta, para garantir máxima eficiência e custo-benefício aos seus clientes.
                            <br><br>
                            Para saber mais sobre Comprar peças de moto<br>
                            Ligue para 11 2085-7300 ou clique aqui e entre em contato por email.
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <?php
                    // Argumentos para a consulta
                    $args = array(
                        'post_type' => 'produto', // Tipo de post personalizado
                        'posts_per_page' => 5, // Número de produtos para exibir
                        'orderby' => 'rand', // Ordenar aleatoriamente
                        'post__not_in' => array(get_the_ID()) // Excluir o produto atual
                    );

                    // Consulta de produtos semelhantes
                    $produtos_selecionados = new WP_Query($args);

                    if ($produtos_selecionados->have_posts()) : ?>
                        <h2 class="text-primary fw-bold">Veja Também</h2>
                        <div class="row justify-content-around">
                            <?php while ($produtos_selecionados->have_posts()) : $produtos_selecionados->the_post(); ?>
                                <div class="col-md-2 col-12">
                                    <div class="bg-prod intern" style="background-image: url(' <?php the_post_thumbnail_url(); ?>')">
                                        <h3 class="title-prod"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?></a></h3>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </section>


            <div id="map" style="height: 400px;"></div>

            <script>
                var map;

                function success(pos) {

                    if (map === undefined) {
                        map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 13);
                    } else {
                        map.remove();
                        map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 13);
                    }

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
                        .bindPopup('Você está aqui !')
                        .openPopup();

                    L.marker([-23.45601, -46.46652]).addTo(map)
                        .bindPopup('Orbital Plástics Parts Peças e Acessórios Ltda')
                        .openPopup();
                }

                function error(err) {
                    var map = L.map('map').setView([-23.45601, -46.46652], 13);

                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    L.marker([-23.45601, -46.46652]).addTo(map)
                        .bindPopup('Orbital Plástics Parts Peças e Acessórios Ltda')
                        .openPopup();
                }

                var watchID = navigator.geolocation.watchPosition(success, error, {
                    enableHighAccuracy: true,
                    timeout: 5000
                });

                //navigator.geolocation.clearWatch(watchID);
            </script>



            <!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="product-image w-25">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <p><strong>Marca:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_marca_produto', true)); ?></p>
                <p><strong>Modelo:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), '_modelo_produto', true)); ?></p>
            </footer>
        </article> -->


        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>