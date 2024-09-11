<?php
add_action( 'after_setup_theme', 'zsd_setup' );
function zsd_setup() {
load_theme_textdomain( 'zsd', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
// register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'zsd' ) ) );
}
add_action( 'wp_enqueue_scripts', 'zsd_load_scripts' );
function zsd_load_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' );
wp_enqueue_style( 'media-client', get_template_directory_uri().'/css/media-client.css' );
wp_enqueue_style( 'multiselect', get_template_directory_uri().'/css/bootstrap-multiselect.min.css' );
wp_enqueue_style( 'prettify', get_template_directory_uri().'/css/prettify.min.css' );
//wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap-4.5.2.min.css' );
global $wp_styles;
$wp_styles->add_data( 'font-awesome', 'rel', 'preload' );
$wp_styles->add_data( 'style', 'rel', 'preload' );
$wp_styles->add_data( 'media-client', 'rel', 'preload' );

// wp_enqueue_script('d3', get_template_directory_uri() . '/js/d3.min.js', array('jquery'));
// wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array('jquery'));

// wp_enqueue_script('nanogram', get_template_directory_uri().'/js/nanogramm.js');

wp_enqueue_script('multiselect', get_template_directory_uri().'/js/bootstrap-multiselect.min.js');
wp_enqueue_script('prettify', get_template_directory_uri().'/js/prettify.min.js');
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle-4.5.2.min.js');
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'zsd_footer_scripts' );
function zsd_footer_scripts() {
?>
<script>
jQuery(document).ready(function($) {
    var deviceAgent = navigator.userAgent.toLowerCase();
    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        $("html").addClass("ios");
        $("html").addClass("mobile");
    }
    if (navigator.userAgent.search("MSIE") >= 0) {
        $("html").addClass("ie");
    } else if (navigator.userAgent.search("Chrome") >= 0) {
        $("html").addClass("chrome");
    } else if (navigator.userAgent.search("Firefox") >= 0) {
        $("html").addClass("firefox");
    } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
        $("html").addClass("safari");
    } else if (navigator.userAgent.search("Opera") >= 0) {
        $("html").addClass("opera");
    }
});
</script>
<?php
}
add_filter( 'document_title_separator', 'zsd_document_title_separator' );
function zsd_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'zsd_title' );
function zsd_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'zsd_read_more_link' );
function zsd_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'zsd_excerpt_read_more_link' );
function zsd_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'zsd_image_insert_override' );
function zsd_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'zsd_widgets_init' );
function zsd_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'zsd' ),
'id' => 'primary-widget-area',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'zsd_pingback_header' );
function zsd_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'zsd_enqueue_comment_reply_script' );
function zsd_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function zsd_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'zsd_comment_count', 0 );
function zsd_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}


add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'Main_menu', 'Main menu' );
    register_nav_menu( 'Footer_small', 'Footer Small' );
    register_nav_menu( 'Footer_big', 'Footer Big' );
    register_nav_menu( 'Mobile_main', 'Mobile Main' );
    
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function prepareTitle($title, $p = true){
    $search = array('@colr@', '@/colr@');
    if($p = false){
        $replace = array(' ', ' ');
    } else {
        $replace = array('<span class="colre7">', '</span>');
    }
    $titleConverted = str_replace($search, $replace, $title);
    return $titleConverted;
}


require_once('widgets/recent-posts-custom.php');

function cw_load_widget()
{
    register_widget('Recent_Posts_Custom');
}
add_action('widgets_init', 'cw_load_widget');


// add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

// function wti_remove_autop_for_image( $content )
// {
//      global $post;

//      // Check for single page and image post type and remove
//      if ( is_single() )
//           remove_filter('the_content', 'wpautop');

//      return $content;
// }


function my_login_logo_one(){
?>
<style type="text/css">
body.login div#login h1 a {
    /*background-image: url('/wp-content/uploads/2020/11/ZSD_sm.png');
    
    https://aryas-protection.hosting2.tn-rechenzentrum1.de/wp-content/uploads/2024/08/logo-admin-black.png
    */
    background: url('/wp-content/uploads/2024/08/logo-admin-black.png') no-repeat center center;
    width: 100%;
    /*padding-bottom: 30px;*/
}
</style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo_one');

function checker()  {
    $d = is_front_page();
    
    if(!$d){
        wp_enqueue_script('main', get_template_directory_uri() .'/js/main.js', array('jquery'));
    }
}
    
add_action( 'wp', 'checker' );


function my_login_logo() { ?>
    <style type="text/css">
        body.wp-core-ui .button-primary {
    background: #8b7a47!important;
    border-color: #8b7a47!important;
    }
    #loginform input{
        border-color: #8b7a47;
        box-shadow: 0 0 0 1px #8b7a47;
    }
    .wp-core-ui #loginform .button, .wp-core-ui #loginform .button-secondary{
        border-color: #8b7a47;
}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


add_filter('site_transient_update_plugins', 'remove_update_notification');
function remove_update_notification($value) {
    unset($value->response[ plugin_basename('borlabs-cookie/borlabs-cookie.php') ]);
    return $value;
}


// Відключення верхнього меню для користувачів з роллю Custom Subscriber
function disable_admin_bar_for_custom_subscriber() {
    if (current_user_can('custom_role')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'disable_admin_bar_for_custom_subscriber');

// Приховання форми входу в адміністративну панель для користувачів з роллю Custom Subscriber
function hide_admin_login_form_for_custom_subscriber() {
    if (current_user_can('custom_role') && is_admin()) {
        echo '<style>#loginform { display: none; }</style>';
    }
}
add_action('login_head', 'hide_admin_login_form_for_custom_subscriber');

//function restrict_custom_subscriber_access_to_admin_panel() {
//    if (current_user_can('custom_role') && is_admin()) {
//        wp_redirect(home_url()); // Перенаправлення на домашню сторінку
//        exit();
//    }
//}
//add_action('admin_init', 'restrict_custom_subscriber_access_to_admin_panel');


function customize_export_columns($columns) {
    // Описуємо нові назви колонок
    $new_columns = [
        'custom_user_id'   => 'ID',
        'user_email'       => 'E-Mail',
        'first_name'       => 'First Name',
        'last_name'        => 'Last Name',
        'anrede'           => 'Anrede',
        'firma'            => 'Firma',
        'plz'              => 'PLZ',
        'stadt'            => 'Stadt',
        'strasse'          => 'Straße',
        'contact_telefon'  => 'Contact Telefon',
        'web'              => 'Web',
        'leistungsumfang'  => 'Leistungsumfang',
        'plz_second'       => 'PLZ (second)',
        'ort_second'       => 'Ort (second)',
        'umkreis'          => 'Umkreis',
        'kommentar'        => 'Kommentar'
    ];

    // Замінюємо назви колонок
    foreach ($columns as $key => $value) {
        if (array_key_exists($key, $new_columns)) {
            $columns[$key] = $new_columns[$key];
        }
    }

    return $columns;
}

// Додаємо хук для зміни назв колонок
add_filter('iecuewc_user_headers', 'customize_export_columns');

/*
function add_login_logout_menu_item($items, $args) {
    if ($args->menu == 'Main menu' || $args->menu == 'Mobile_main') {
        if (is_user_logged_in()) {
            // Додаємо пункт меню для логауту
            $logout_url = wp_logout_url(get_home_url());
            $logout_item = '<li id="menu-item-custom" class="menu-item"><a href="' . esc_url($logout_url) . '">Abmelden</a></li>';
            $items .= $logout_item;
        } else {
            // Додаємо пункт меню для логіну
            $login_url = '/login/';  // Переконайтеся, що цей URL веде на вашу сторінку входу
            $login_item = '<li id="menu-item-custom" class="menu-item"><a href="' . esc_url($login_url) . '">Login</a></li>';
            $items .= $login_item;
        }
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_login_logout_menu_item', 10, 2);

add_filter('wp_nav_menu_objects', 'conditional_remove_menu_item', 10, 2);
function conditional_remove_menu_item($sorted_menu_items, $args) {
    if (!is_user_logged_in()) { // Перевірка, чи користувач не залогінений
        foreach ($sorted_menu_items as $key => $item) {
            if ($item->ID == 758) { // ID пункту меню, який потрібно видалити
                unset($sorted_menu_items[$key]);
            }
        }
    }
    return $sorted_menu_items;
}
*/