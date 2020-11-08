<?php
/**
 * Blue Resume functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blue_Resume
 */

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'blueresume_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blueresume_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Blue Resume, use a find and replace
		 * to change 'blueresume' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blueresume', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Top left', 'blueresume' ),
				'menu-2' => esc_html__( 'Top right', 'blueresume' ),
				'menu-3' => esc_html__( 'Mobile menu', 'blueresume' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'blueresume_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'blueresume_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blueresume_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blueresume_content_width', 640 );
}
add_action( 'after_setup_theme', 'blueresume_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blueresume_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blueresume' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blueresume' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blueresume_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blueresume_scripts() {
	wp_enqueue_style( 'google-fonts-style', "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic", array(), _S_VERSION );
	wp_enqueue_style( 'my-fonts-style', get_template_directory_uri()."/assets/fonts/style.css", array(), _S_VERSION );
	wp_enqueue_style( 'my-main-style', get_template_directory_uri()."/assets/css/style.css", array(), _S_VERSION );

	wp_enqueue_style( 'blueresume-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'blueresume-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blueresume-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    wp_enqueue_script( 'jquery-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js", array(), _S_VERSION, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri()."/assets/js/script.js", array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'blueresume_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/carbon.php';

/**
 * Удалить атрибут type у scripts и styles
 */
add_action( 'template_redirect', function () {
    ob_start( function ( $buffer ) {
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
        $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );

        return $buffer;
    } );
} );

// `Disable Emojis` Plugin Version: 1.7.2
if ( 'Отключаем Emojis в WordPress' ) {

    /**
     * Disable the emoji's
     */
    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
        add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
    }

    add_action( 'init', 'disable_emojis' );

    /**
     * Filter function used to remove the tinymce emoji plugin.
     *
     * @param array $plugins
     *
     * @return   array             Difference betwen the two arrays
     */
    function disable_emojis_tinymce( $plugins ) {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
        }

        return array();
    }

    /**
     * Remove emoji CDN hostname from DNS prefetching hints.
     *
     * @param array $urls URLs to print for resource hints.
     * @param string $relation_type The relation type the URLs are printed for.
     *
     * @return array                 Difference betwen the two arrays.
     */
    function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
        if ( 'dns-prefetch' == $relation_type ) {
            // Strip out any URLs referencing the WordPress.org emoji location
            $emoji_svg_url_bit = 'https://s.w.org/images/core/emoji/';
            foreach ( $urls as $key => $url ) {
                if ( strpos( $url, $emoji_svg_url_bit ) !== false ) {
                    unset( $urls[ $key ] );
                }
            }
        }

        return $urls;
    }
}

/**
 * Отключить стандартный текстовый редактор постов
 */
function disable_content_editor() {
    remove_post_type_support( 'page', 'editor' );
    remove_post_type_support( 'post', 'editor' );
}

add_action( 'admin_init', 'disable_content_editor' );

/**
 * Вывести колонку "ID" в админке
 */
add_action( 'admin_init', 'admin_area_ID' );
function admin_area_ID() {
    // для таксономий (рубрик, меток и т.д.)
    foreach ( get_taxonomies() as $taxonomy ) {
        add_action( "manage_edit-${taxonomy}_columns", 'tax_add_col' );
        add_filter( "manage_edit-${taxonomy}_sortable_columns", 'tax_add_col' );
        add_filter( "manage_${taxonomy}_custom_column", 'tax_show_id', 10, 3 );
    }
    add_action( 'admin_print_styles-edit-tags.php', 'tax_id_style' );
    function tax_add_col( $columns ) {
        return $columns + array( 'tax_id' => 'ID' );
    }

    function tax_show_id( $v, $name, $id ) {
        return 'tax_id' === $name ? $id : $v;
    }

    function tax_id_style() {
        print '<style>#tax_id{width:4em}</style>';
    }

    // для постов и страниц
    add_filter( 'manage_posts_columns', 'posts_add_col', 5 );
    add_action( 'manage_posts_custom_column', 'posts_show_id', 5, 2 );
    add_filter( 'manage_pages_columns', 'posts_add_col', 5 );
    add_action( 'manage_pages_custom_column', 'posts_show_id', 5, 2 );
    add_action( 'admin_print_styles-edit.php', 'posts_id_style' );
    function posts_add_col( $defaults ) {
        $defaults['wps_post_id'] = __( 'ID' );

        return $defaults;
    }

    function posts_show_id( $column_name, $id ) {
        if ( $column_name === 'wps_post_id' ) {
            echo $id;
        }
    }

    function posts_id_style() {
        print '<style>#wps_post_id{width:4em}</style>';
    }
}


function getPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );

        return "0 просмотров";
    }

    return $count . ' просмотр';
}

function setPostViews( $postID ) {
    $count_key = 'post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    } else {
        $count ++;
        update_post_meta( $postID, $count_key, $count );
    }
}


/**
 * Убрать теги p и br в Contact Form 7
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );