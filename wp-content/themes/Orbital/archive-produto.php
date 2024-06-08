<?php
/**
 * Template Name: Produtos Archive
 * Description: Um template para o archive de produtos.
 */

get_header(); ?>

<div id="primary" class="content-area">
            <main id="main" class="site-main">

                <header class="page-header">
                    <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
                </header><!-- .page-header -->

                <!-- Formulário de pesquisa -->
                <form method="GET" action="">
                    <label for="marca">Marca:</label>
                    <select id="marca" name="marca">
                        <option value="">Selecione uma Marca</option>
                        <?php
                        $marcas = obter_marcas_unicas();
                        foreach ($marcas as $marca): ?>
                            <option value="<?php echo esc_attr($marca); ?>" <?php selected(isset($_GET['marca']) && $_GET['marca'] == $marca); ?>>
                                <?php echo esc_html($marca); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <label for="modelo">Modelo:</label>
                    <select id="modelo" name="modelo">
                        <option value="">Selecione um Modelo</option>
                        <?php
                        $modelos = obter_modelos_unicos();
                        foreach ($modelos as $modelo): ?>
                            <option value="<?php echo esc_attr($modelo); ?>" <?php selected(isset($_GET['modelo']) && $_GET['modelo'] == $modelo); ?>>
                                <?php echo esc_html($modelo); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <label for="produto">Produto:</label>
                    <input type="text" id="produto" name="produto"
                        value="<?php echo isset($_GET['produto']) ? esc_attr($_GET['produto']) : ''; ?>" />

                    <input type="submit" value="Pesquisar" />
                </form>

                <?php
                $args = array(
                    'post_type' => 'produto',
                    'posts_per_page' => -1, // Para mostrar todos os produtos
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

                if ($query->have_posts()):

                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

                                <?php if (has_post_thumbnail()): ?>
                                    <div class="product-image w-25">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                <?php endif; ?>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                                <p><strong>Marca:</strong>
                                    <?php echo esc_html(get_post_meta(get_the_ID(), '_marca_produto', true)); ?></p>
                                <p><strong>Modelo:</strong>
                                    <?php echo esc_html(get_post_meta(get_the_ID(), '_modelo_produto', true)); ?></p>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->

                    <?php endwhile;

                    the_posts_navigation();

                else: ?>

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


            </main><!-- #main -->
        </div><!-- #primary -->

<?php get_footer(); ?>