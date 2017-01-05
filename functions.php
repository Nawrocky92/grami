<?php
/*
 * Hey
 * Only edit this file if you know what you're doing or make a backup before editing it
 * Happy Blogging
*/

include (TEMPLATEPATH . '/inc/customizer.php');

function launch_setup() {

	// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
	add_theme_support('title-tag');

    // Add custom background support. http://codex.wordpress.org/Custom_Backgrounds
    add_theme_support('custom-background', array(
    	'default-color' => 'f5f5f5',
        'default-image' => get_stylesheet_directory_uri() . '/img/hero-bg.jpg',
        'default-position-x' => 'center',
        'default-repeat' => 'no-repeat',
        'default-attachment' => 'fixed'
    ));
}

add_action( 'after_setup_theme', 'launch_setup' );

// To add backwards compatibility for titles
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function launch_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'launch_render_title' );
}

// Registering and enqueuing scripts/stylesheets to header/footer.
function launch_scripts() {
  wp_enqueue_style( 'launch_style', get_stylesheet_uri());
  wp_enqueue_style( 'luunch_source_sans_pro', '//fonts.googleapis.com/css?family=Varela+Round');;
  wp_enqueue_script( 'launch_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js','','',true);

	/// Localize the script with Siteurl
	$url_array = array(
		'adminurl' => admin_url(),
	);
	wp_localize_script( 'launch_main', 'URLARRAY', $url_array );
	wp_enqueue_script('launch_main');
}

add_action( 'wp_enqueue_scripts', 'launch_scripts' );

// Favion function.
function launch_favicon() {
    $favicon = get_theme_mod('launch_favicon_image', get_template_directory_uri().'/assets/images/favicon.png');
    if(!empty($favicon)) {
        echo '<link href="'.$favicon.'" rel="shortcut icon" type="image/x-icon">';
    }
}
add_action('wp_head', 'launch_favicon');

