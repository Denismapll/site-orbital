<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
//require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

		// Main jQuery.
		wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	}

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}


function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  $atts['class'] = $args->link_class;
	}
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


  // Função para registrar o Custom Post Type "Produtos"
function registrar_cpt_produtos() {
    $labels = array(
        'name'               => _x( 'Produtos', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Produto', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Produtos', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Produto', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'produto', 'textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Produto', 'textdomain' ),
        'new_item'           => __( 'Novo Produto', 'textdomain' ),
        'edit_item'          => __( 'Editar Produto', 'textdomain' ),
        'view_item'          => __( 'Ver Produto', 'textdomain' ),
        'all_items'          => __( 'Todos os Produtos', 'textdomain' ),
        'search_items'       => __( 'Procurar Produtos', 'textdomain' ),
        'parent_item_colon'  => __( 'Produtos Pais:', 'textdomain' ),
        'not_found'          => __( 'Nenhum produto encontrado.', 'textdomain' ),
        'not_found_in_trash' => __( 'Nenhum produto encontrado na lixeira.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'produtos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'produto', $args );
}
add_action( 'init', 'registrar_cpt_produtos' );

// Função para adicionar metaboxes personalizadas ao CPT "Produtos"
function adicionar_meta_boxes_produtos() {
    add_meta_box(
        'produtos_detalhes',
        __( 'Detalhes do Produto', 'textdomain' ),
        'renderizar_meta_box_produtos',
        'produto',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'adicionar_meta_boxes_produtos' );


// Função para obter todas as marcas únicas
function obter_marcas_unicas() {
    global $wpdb;
    $query = "
        SELECT DISTINCT meta_value 
        FROM $wpdb->postmeta 
        WHERE meta_key = '_marca_produto' 
        ORDER BY meta_value ASC";
    return $wpdb->get_col($query);
}

// Função para obter todos os modelos únicos
function obter_modelos_unicos() {
    global $wpdb;
    $query = "
        SELECT DISTINCT meta_value 
        FROM $wpdb->postmeta 
        WHERE meta_key = '_modelo_produto' 
        ORDER BY meta_value ASC";
    return $wpdb->get_col($query);
}

// Função para renderizar o conteúdo da metabox
function renderizar_meta_box_produtos($post) {
    // Recuperar os valores dos campos personalizados, se existirem
    $marca = get_post_meta( $post->ID, '_marca_produto', true );
    $modelo = get_post_meta( $post->ID, '_modelo_produto', true );

    // Obter todas as marcas e modelos únicos
    $marcas = obter_marcas_unicas();
    $modelos = obter_modelos_unicos();

    // Campos personalizados
    echo '<label for="marca_produto">' . __( 'Marca', 'textdomain' ) . '</label>';
    echo '<select id="marca_produto" name="marca_produto">';
    echo '<option value="">' . __( 'Selecione uma Marca', 'textdomain' ) . '</option>';
    foreach ( $marcas as $opcao_marca ) {
        echo '<option value="' . esc_attr( $opcao_marca ) . '" ' . selected( $marca, $opcao_marca, false ) . '>' . esc_html( $opcao_marca ) . '</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<input type="text" id="nova_marca_produto" name="nova_marca_produto" value="" placeholder="' . __( 'Ou insira uma nova marca', 'textdomain' ) . '" />';
    echo '<br><br>';
    
    echo '<label for="modelo_produto">' . __( 'Modelo', 'textdomain' ) . '</label>';
    echo '<select id="modelo_produto" name="modelo_produto">';
    echo '<option value="">' . __( 'Selecione um Modelo', 'textdomain' ) . '</option>';
    foreach ( $modelos as $opcao_modelo ) {
        echo '<option value="' . esc_attr( $opcao_modelo ) . '" ' . selected( $modelo, $opcao_modelo, false ) . '>' . esc_html( $opcao_modelo ) . '</option>';
    }
    echo '</select>';
    echo '<br><br>';
    echo '<input type="text" id="novo_modelo_produto" name="novo_modelo_produto" value="" placeholder="' . __( 'Ou insira um novo modelo', 'textdomain' ) . '" />';
}

// Função para salvar os campos personalizados
function salvar_meta_box_produtos($post_id) {
    // Verificar nonce para garantir que o formulário foi enviado da nossa página
    if ( ! isset( $_POST['marca_produto'] ) || ! isset( $_POST['modelo_produto'] ) ) {
        return $post_id;
    }

    // Verificar se o usuário tem permissão para editar o post
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    // Atualizar os valores dos campos personalizados no banco de dados
    $marca = sanitize_text_field( $_POST['marca_produto'] );
    $nova_marca = sanitize_text_field( $_POST['nova_marca_produto'] );
    $modelo = sanitize_text_field( $_POST['modelo_produto'] );
    $novo_modelo = sanitize_text_field( $_POST['novo_modelo_produto'] );

    if ( ! empty( $nova_marca ) ) {
        $marca = $nova_marca;
    }

    if ( ! empty( $novo_modelo ) ) {
        $modelo = $novo_modelo;
    }

    update_post_meta( $post_id, '_marca_produto', $marca );
    update_post_meta( $post_id, '_modelo_produto', $modelo );
}
add_action( 'save_post', 'salvar_meta_box_produtos' );