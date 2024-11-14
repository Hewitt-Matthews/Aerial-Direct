<?php
/**
 * ad functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ad
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ad_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on ad, use a find and replace
        * to change 'ad' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'ad', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    add_image_size('blog-listing-header',490,200,true);

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'ad' ),
            'menu-2' => esc_html__( 'Mobile Menu', 'ad' ),
            'footer-1' => esc_html__( 'First footer', 'ad' ),
            'footer-2' => esc_html__( 'Second footer', 'ad' ),
            'footer-3' => esc_html__( 'Third footer', 'ad' ),
            'footer-4' => esc_html__( 'Fourth footer', 'ad' ),
            'small-mobile' => esc_html__( 'Small business Mobile', 'ad' ),
            'small-solutions' => esc_html__( 'Small business business solutions', 'ad' ),
            'small-it' => esc_html__( 'Small business IT', 'ad' ),
            'medium-mobile' => esc_html__( 'Medium business Mobile', 'ad' ),
            'medium-landline' => esc_html__( 'Medium business Landline', 'ad' ),
            'medium-it' => esc_html__( 'Medium business IT', 'ad' ),
            'corporate-mobile' => esc_html__( 'Corporate Mobile', 'ad' ),
            'corporate-landline' => esc_html__( 'Corporate Landline', 'ad' ),
            'corporate-it' => esc_html__( 'Corporate IT', 'ad' ),
            'why-aerial' => esc_html__( 'Why Aerial Direct', 'ad' ),
            'help-support' => esc_html__( 'Help & Support', 'ad' ),
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
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page();

    }
    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'ad_custom_background_args',
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
add_action( 'after_setup_theme', 'ad_setup' );


function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

require get_template_directory() . '/inc/menu_walker.php';


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ad_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'ad_content_width', 640 );
}
add_action( 'after_setup_theme', 'ad_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ad_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'ad' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'ad' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'ad_widgets_init' );

// Post types

require get_template_directory() . '/inc/post-types/case_studies.php';
require get_template_directory() . '/inc/post-types/locations.php';
//require get_template_directory() . '/inc/post-types/resource_hub.php';

/* ACF Blocks require */
require get_template_directory() . '/inc/acf-blocks.php';



/**
 * Enqueue scripts and styles.
 */
function ad_scripts() {
    wp_dequeue_style( 'wp-block-library' );
    wp_enqueue_style( 'ad-style', get_stylesheet_uri(), array(), _S_VERSION );
    //wp_enqueue_style( 'ad-all', get_template_directory_uri().'/assets/css/all.css', array(), '3.4.3' );
    wp_enqueue_style( 'ad-all', get_template_directory_uri() . '/assets/css/all.css', array(), _S_VERSION );
// 	wp_enqueue_style( 'ad-all-critical', get_template_directory_uri() . '/assets/css/critical_min.css', array(), rand(1, 55555) );
    wp_enqueue_style( 'ad-quote', get_template_directory_uri() . '/assets/css/quote-new.css', array(), _S_VERSION );
    wp_style_add_data( 'ad-style', 'rtl', 'replace' );
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', false, null, ['in_footer' => true]);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'ad-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'ad-core', get_template_directory_uri() . '/assets/js/core.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'ad-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true, ['in_footer' => true] );
	wp_enqueue_script( 'ad-js', get_template_directory_uri() . '/assets/js/ui.min.js', array(), _S_VERSION, true );
    //wp_enqueue_script( 'ad-js', get_template_directory_uri() . '/assets/js/ui.min.js', array(), '2.4.3', true );

}
add_action( 'wp_enqueue_scripts', 'ad_scripts' );

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


$business_unit = "5550b8f20000ff00057f57d9";
$api_key = "xAG0gG3dbJkAS5T918coQzEdLyrYsDOR";

/**
 * get TrustPilot data from TrustPilot
 */
function getTrustPilotReviews() {
    global $business_unit, $api_key;

    if (get_transient("TPreviews")) {
        $json = get_transient("TPreviews");
    } else {
        $stars = 5;

        $curl =  curl_init("https://api.trustpilot.com/v1/business-units/$business_unit/reviews?"
            . "apikey=$api_key"
            . "&stars=$stars"
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);

        set_transient("TPreviews", $json, 8 * 60 * 60);
    }

    return json_decode($json);

}
/**
 * get TrustPilot data from TrustPilot - where reviews are 5 stars (on template page)
 */
function getTrustPilot5starReviews() {
    global $business_unit, $api_key;

    if (get_transient("TPreviewSummary")) {
        $json = get_transient("TPreviewSummary");
    } else {

        $curl = curl_init("https://api.trustpilot.com/v1/business-units/$business_unit?"
            . "apikey=$api_key"
        );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($curl);
        set_transient("TPreviewSummary", $json, 8 * 60 * 60);
    }

    return json_decode($json);
}
function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set("post_type", array("post", "page"));
    }

    return $query;
}

add_filter("pre_get_posts", "searchfilter");


remove_action('wp_head', 'print_emoji_detection_script', 7); // Remove Emoji's Styles and Scripts.
remove_action('embeded_head', 'print_emoji_detection_script');
remove_action('admin_print_scripts', 'print_emoji_detection_script'); // Remove Emoji's Styles and Scripts.
remove_action('wp_print_styles', 'print_emoji_styles'); // Remove Emoji's Styles and Scripts.
remove_action('admin_print_styles', 'print_emoji_styles'); // Remove Emoji's Styles and Scripts.
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
add_filter('emoji_svg_url', '__return_false');

function disable_emojicons_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}


add_filter( 'rest_authentication_errors', function( $result ) {
    // If a previous authentication check was applied,
    // pass that result along without modification.
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }

    // No authentication has been performed yet.
    // Return an error if user is not logged in.
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }

    // Our custom authentication check should have no effect
    // on logged-in requests
    return $result;
});

// ACF iframe video field escape

add_filter( 'acf/the_field/allow_unsafe_html', function( $allowed, $selector ) {
    if ( $selector === "green_description" || $selector === "content" ||  
		$selector === "green_title" || $selector === "blog_title" || $selector === "title" ||  
	    $selector === "textbox" || $selector === "client_solution_title" || $selector === "content_description" ||                 $selector === "feature_title" || $selector === "content_title" || $selector === "feature_subtitle" ) {
        return true;
    }
    return $allowed;
}, 10, 2);



function add_page_url_script() {
    // Check if the current page has a form with the 'page' hidden field
    if ( is_page() || is_single() ) { // Adjust this condition if needed
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var pageInputs = document.querySelectorAll('input[name="page"]');
                pageInputs.forEach(function(input) {
                    input.value = window.location.href;
                });
            });
        </script>
        <?php
    }
}
add_action('wp_footer', 'add_page_url_script'); // Add the script to the footer


function add_resource_hub_rewrite_rules() {
    // Get the page ID for the resource hub page
    $page = get_page_by_path('resource-hub');
    if ($page) {
        // Rule for resource hub pagination
        add_rewrite_rule(
            'resource-hub/page/?([0-9]{1,})/?$',  // Pattern to match in URL
            'index.php?page_id=' . $page->ID . '&paged=$matches[1]',  // Internal WordPress URL structure
            'top'  // Priority of the rule
        );
    }
}
add_action('init', 'add_resource_hub_rewrite_rules');
