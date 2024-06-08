<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="product-image w-25">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <p><strong>Marca:</strong> <?php echo esc_html( get_post_meta( get_the_ID(), '_marca_produto', true ) ); ?></p>
                <p><strong>Modelo:</strong> <?php echo esc_html( get_post_meta( get_the_ID(), '_modelo_produto', true ) ); ?></p>
            </footer><!-- .entry-footer -->
        </article><!-- #post-## -->


    <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
