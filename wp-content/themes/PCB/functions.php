<?php
/**
 * Custom Theme Functions
 * @package WordPress
 * @author By Association Only | http://byassociationonly.com
 * @copyright 2012 - Forever
 **/
?>
<?php

/**
 * @desc Use Google's hosted version of jQuery and place in the footer
 **/

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", false, null, true);
   wp_enqueue_script('jquery');
}

/**
 * @desc Load certain files onto certain pages (JS/CSS)
 **/

function bao_scripts() {

	wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);
	wp_register_script('scripts', get_template_directory_uri() . '/js/script.js', false, null, true);

	wp_enqueue_script('plugins');
	wp_enqueue_script('scripts');

}

add_action('wp_enqueue_scripts', 'bao_scripts', 11);

/**
 * @desc Add appearance menu for Editors
 **/
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

/**
 * @desc Change email address (that sends out registration emails etc.) from wordpress@mydomain.com to whatever I want
 **/

function xyz_filter_wp_mail_from($email){
	/* start of code lifted from wordpress core, at http://svn.automattic.com/wordpress/tags/3.4/wp-includes/pluggable.php */

	$sitename = strtolower( $_SERVER['SERVER_NAME'] ); if ( substr( $sitename, 0, 4 ) == 'www.' ) { $sitename = substr( $sitename, 4 ); }

	/* end of code lifted from wordpress core */
	$myfront = "noreply@"; $myback = $sitename; $myfrom = $myfront . $myback; return $myfrom; } add_filter("wp_mail_from", "xyz_filter_wp_mail_from");

/**
 * @desc Support WP Title
 **/
 function theme_slug_setup() {
    add_theme_support( 'title-tag' );
 }
 add_action( 'after_setup_theme', 'theme_slug_setup' );

 /**
  * Hide email from Spam Bots using a shortcode.
  *
  * @param array  $atts    Shortcode attributes. Not used.
  * @param string $content The shortcode content. Should be an email address.
  *
  * @return string The obfuscated email address.
  *
  * Usage:
  * @param  <?php echo antispambot( 'feedback@tutella.co' ); ?>
  */
 function wpcodex_hide_email_shortcode( $atts , $content = null ) {
 	if ( ! is_email( $content ) ) {
 		return;
 	}

 	return '<a href="mailto:' . antispambot( $content ) . '">' . antispambot( $content ) . '</a>';
 }
 add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );

/**
 * @desc Make some changes to the default posts/categories
 **/

/* Delete Sample Page */
wp_delete_post(2,true);

// Create a page called 'Home'
$page_check = get_page_by_title('Home');
$page_check_id = $page_check->ID;

$new_page = array(
'post_type' => 'page',
'post_title' => 'Home',
'post_status' => 'publish',
'post_author' => 1,

);

if(!isset($page_check_id)){
wp_insert_post($new_page);
$new_page_data = get_page_by_title('Home');
$new_page_id = $new_page_data->ID;
}

/**
 * @desc Remove emoji fluff
 **/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * @desc Add/Remove links from page head
 **/
add_theme_support( 'automatic-feed-links' );
remove_action( 'wp_head', 'wlwmanifest_link');

/**
 * @desc Allow WP menu support
 **/
function add_wp3menu_support() {

register_nav_menus(
        array(
        'main-menu' => __('Primary Navigation'),
        'footer-menu' => __('Footer menu')
        )
     );
}

add_action('init', 'add_wp3menu_support');

/**
 * @desc Add featured image support
 **/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 960, 320 ); // set width and height

/**
 * @desc Strip width and height dimensions from all featured images (post_thumbnails) i.e. The larger images
 **/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/**
 * @desc Add ACF Options page
 **/
 if( function_exists('acf_add_options_page') ) {

 	acf_add_options_page(array(
 		'page_title' 	=> 'Theme General Settings',
 		'menu_title'	=> 'Theme Settings',
 		'menu_slug' 	=> 'theme-general-settings',
 		'capability'	=> 'edit_posts',
 		'redirect'		=> false
 	));

 	acf_add_options_sub_page(array(
 		'page_title' 	=> 'Theme Header Settings',
 		'menu_title'	=> 'Header',
 		'parent_slug'	=> 'theme-general-settings',
 	));

 	acf_add_options_sub_page(array(
 		'page_title' 	=> 'Theme Footer Settings',
 		'menu_title'	=> 'Footer',
 		'parent_slug'	=> 'theme-general-settings',
 	));

  acf_add_options_sub_page(array(
 		'page_title' 	=> 'Testimonials',
 		'menu_title'	=> 'Testimonials',
 		'parent_slug'	=> 'theme-general-settings',
 	));

 }

/**
 * @desc Customise footer message in admin panel
 **/
function modify_footer_admin () {
  echo '{ <a href="http://byassociationonly.com">By Association Only made this</a> } ';
}

add_filter('admin_footer_text', 'modify_footer_admin');

/**
 * @desc Custom login screen
 **/
function custom_login_css() {

  echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/css/login-screen.css" />';
  echo '<div class="logo-wrap"></div>';

  function custom_image() {

    echo '<div class="powered-wrap"><a href="http://bao.agency" target="_blank" class="powered-by">BAO Agency Ltd</a> &#124; <a href="mailto:info@byassociationonly.com" title="Support">info@byassociationonly.com</a> &#124; <a href="' . wp_lostpassword_url() . '" title="Lost Password">Lost Password</a></div>';

  }
  add_action('login_footer', 'custom_image');

}
add_action('login_head', 'custom_login_css');

/**
 * Replaces the login header logo URL
 *
 * @param $url
 */
add_filter( 'login_headerurl', 'namespace_login_headerurl' );

function namespace_login_headerurl( $url ) {
    $url = home_url( '/' );
    return $url;
}

?>
