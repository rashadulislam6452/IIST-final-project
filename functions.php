<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function home_scripts() {
	wp_enqueue_style( 'home-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'home-bootstrap',get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), _S_VERSION );


	wp_enqueue_script( 'home-navigation', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'home_scripts' );

function home_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
    register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'home' ),
		)
	);
    register_nav_menus(
		array(
			'menu-2' => esc_html__( 'footer', 'home' ),
		)
	);
}
add_action( 'after_setup_theme', 'home_setup' );
function home_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-1', 'home' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'home' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'banner-1', 'home' ),
			'id'            => 'banner-1',
			'description'   => esc_html__( 'Add widgets here.', 'home' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'marquee-1', 'home' ),
			'id'            => 'marquee-1',
			'description'   => esc_html__( 'Add widgets here.', 'home' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'marquee-2', 'home' ),
			'id'            => 'marquee-2',
			'description'   => esc_html__( 'Add widgets here.', 'home' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'picture-1', 'home' ),
			'id'            => 'picture-1',
			'description'   => esc_html__( 'Add widgets here.', 'home' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s lastpicture">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'home_widgets_init' );

?>