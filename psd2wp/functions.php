<?php
/**
 * PSD to WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PSD_to_WP
 */

if ( ! function_exists( 'psd2wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function psd2wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PSD to WP, use a find and replace
		 * to change 'psd2wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'psd2wp', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'psd2wp' ),
			'menu-2' => esc_html__( 'Header Small', 'psd2wp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'psd2wp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'psd2wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function psd2wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'psd2wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'psd2wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function psd2wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'psd2wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'psd2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	//Custom Widgets for Footer Section
	register_sidebar( array(
		'name'          => esc_html__( 'footer widget 1', 'psd2wp' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'psd2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer widget 2', 'psd2wp' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'psd2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer widget 3', 'psd2wp' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'psd2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer widget 4', 'psd2wp' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'psd2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'psd2wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function psd2wp_scripts() {

	wp_enqueue_style( 'psd2wp-fontawesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '', '' );

	wp_enqueue_style( 'psd2wp-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '', '' );

	wp_enqueue_style( 'psd2wp-style', get_stylesheet_uri() );
	
	// deregister Jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '', false );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '', false );

	wp_enqueue_script( 'psd2wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'psd2wp-bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '', true );

	wp_enqueue_script( 'psd2wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//Owl Carousel
	wp_enqueue_style( 'psd2wp-owl', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'psd2wp-owl-theme', get_template_directory_uri() . '/css/owl.theme.default.css' );
	wp_enqueue_script( 'psd2wp-owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', false );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'psd2wp_scripts' );

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
 * Register Custom Post Type Services on Home page
 */
require get_template_directory() . '/inc/services.php';

/**
 * Register Custom Post Type Portfolio on Home page
 */
require get_template_directory() . '/inc/portfolio.php';

/**
 * Register Custom Post Type Brands on Home page
 */
require get_template_directory() . '/inc/brands.php';

//Custom Ajax Search
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( array( 'posts_per_page' => 5, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'post' ) );
    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

            <a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a>

        <?php endwhile;
		wp_reset_postdata();  
	else: 
		echo '<h3>No Results Found</h3>';
    endif;

    die();
}
// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetchResults(){
	var keyword = jQuery('#searchInput').val();
	if(keyword == ""){
		jQuery('#datafetch').html("");
	} else {
		jQuery.ajax({
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			type: 'post',
			data: { action: 'data_fetch', keyword: keyword  },
			success: function(data) {
				jQuery('#datafetch').html( data );
			}
		});
	}
    

}
</script>

<?php
}

// Used For Ragistration

function add_ajax_file(){
	wp_enqueue_script( 'my-ajax' , get_template_directory_uri(). '/js/custom.js' , array('jquery'), null, false);
	wp_localize_script( 'my-ajax', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
}
add_action( 'wp_enqueue_scripts' , 'add_ajax_file' );


// Logout
add_filter( 'wp_nav_menu_items', 'wti_loginout_menu_link', 10, 2 );

function wti_loginout_menu_link( $items, $args ) {
	$redirect = 'https://languageartsteachers.com/login/';
  // if ($args->theme_location == 'primary') {
      if (is_user_logged_in()) {
         $items .= '<li class="right"><a href="'. wp_logout_url( home_url() ) .'">'. __("Log Out") .'</a></li>';
      } else {
         $items .= '<li class="right1"><a href="'. wp_login_url( '$redirect' ) .'">'. __("Log In") .'</a></li>';
      }
 //  }
   return $items;
}






