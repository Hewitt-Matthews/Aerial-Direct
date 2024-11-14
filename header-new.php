<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global site tag (gtag.js) - GA4 Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RJJTLCK2Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-3RJJTLCK2Y');
  </script>
  <!-- END Global site tag (gtag.js) - Google Analytics -->
  <!-- Global site tag (gtag.js) - UNIVERSAL Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84915520-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-84915520-1');
  </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
</head>
<?php 
$query = new WP_Query(array(
    'posts_per_page' => 2,
));
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <nav class="main-header">
                    <div
                        class="custom-container container-fluid d-lg-flex flex-row align-items-center padding-v-30 desktop-navbar-hide">
                        <a class="margin-right-70" href="<?php echo home_url(); ?>"><img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt=""
                                class="brand-logo"></a>
                        <a class="nav-1 top-links py-2 d-none d-md-inline-block" href="javascript:;">Products & Solutions</a>
                        <a class="nav-2 top-links py-2 d-none d-md-inline-block" href="javascript:;">Why Choose Aerial Direct?</a>
                        <a class="nav-3 top-links py-2 d-none d-md-inline-block margin-right-auto" href="javascript:;">Help &
                            Support</a>
                        <button class="search-btn bg-transparent border-0" href="#"><img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt=""
                                class="search-icon"></button>
                        <a href="#" class="button-small btn btn-light my-2 my-sm-0 margin-right-15 d-none"
                            type="submit">Request a Quote
                        </a>
                        <a href="/login-portal" class="btn button-small btn-light" type="submit">Login</a>
                    </div>
                    <div class="col-12 padding-h-150 desktop-navbar-hide search-form-wrap">
                        <form class="search-form padding-bottom-15" action="<?php echo home_url(); ?>">
                            <label class="margin-bottom-0">Search</label>
                            <input type="search" id="search" name="s">
                        </form>
                    </div>
                </nav>
                <div class="row desktop-navbar bg-dark-grey padding-30 custom-container desktop-navbar-hide d-none">
                    <div class="business-type-wrap col-3 show">
                        <ul class="business-type">
                            <li class="title">Business Type</li>
                            <li class="nav-item active type-1">
                                <a class="nav-link" href="/small-business-landing-page/">
                                    <span class="type-title">Small Business</span>
                                    <span class="type-sub">1 - 50 Employees</span>
                                </a>
                            </li>
                            <li class="nav-item type-2">
                                <a class="nav-link"
                                    href="/medium-large-business-landing-page//medium-large-business-landing-page/">
                                    <span class="type-title">Medium & Large Business</span>
                                    <span class="type-sub">51 - 250 Employees</span>
                                </a>
                            </li>
                            <li class="nav-item type-3">
                                <a class="nav-link" href="/corporate-public-sector/">
                                    <span class="type-title">Corporate & Public Sector</span>
                                    <span class="type-sub">250+ Employees</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-9 inner-menu-wrap justify-content-between d-none" id="smallBusiness">
                        <ul class="inner-menu padding-left-20">
                            <li class="title">Mobile Solutions</li>
                            <div class="list-style-none ul-padding-0">
                            <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'small-mobile',
                            'menu_id' => 'small-mobile',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
</div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">Business Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'small-solutions',
                            'menu_id' => 'small-solutions',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">IT Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'small-it',
                            'menu_id' => 'small-it',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>
                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <?php 
                            $small_post = get_field('small_business_post', 'options');
                            $c = get_the_category($small_post->ID);
                            $featured_img_url = get_the_post_thumbnail_url($small_post->ID);
                             ?>
                            <li class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20">


                                <a href="<?php the_permalink($small_post->ID); ?>"><img loading="lazy" decoding="async"
                                        class="image-fluid margin-bottom-10" src="<?php echo $featured_img_url; ?>"></a>
                                <div class="padding-20">
                                    <p class="margin-0"><?php echo $c[0]->cat_name; ?></p>
                                    <a href="<?php the_permalink($small_post->ID); ?>">
                                        <h4 class="text-yellow margin-bottom-15"><?php echo $small_post->post_title; ?>
                                        </h4>
                                    </a>
                                    <div class="text-right"><a href="<?php the_permalink($small_post->ID); ?>">Find out
                                            more</a></div>

                                </div>

                            </li>
                            <!-- end loop -->
                        </ul>


                    </div>
                    <div class="col-9 inner-menu-wrap justify-content-between d-none" id="mediumLargeBusiness">
                        <ul class="inner-menu padding-left-20">
                            <li class="title">Mobile Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'medium-mobile',
                            'menu_id' => 'medium-mobile',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">Landline Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'medium-landline',
                            'menu_id' => 'medium-landline',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">IT Support</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'medium-it',
                            'menu_id' => 'medium-it',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <li class="bg-dark-blue-2 padding-h-0 blog-item">

                                <?php 
                            $medium_post = get_field('medium_post', 'options');
                            $c_medium = get_the_category($medium_post->ID);
                             ?>
                            <li class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20">


                                <a href="<?php the_permalink($medium_post->ID); ?>"><img loading="lazy" decoding="async"
                                        class="image-fluid margin-bottom-10"
                                        src="<?php echo get_the_post_thumbnail_url($medium_post->ID); ?>"></a>
                                <div class="padding-20">
                                    <p class="margin-0"><?php echo $c_medium[0]->cat_name; ?></p>
                                    <a href="<?php the_permalink($medium_post->ID); ?>">
                                        <h4 class="text-yellow margin-bottom-15"><?php echo $medium_post->post_title; ?>
                                        </h4>
                                    </a>
                                    <div class="text-right"><a href="<?php the_permalink($medium_post->ID); ?>">Find out
                                            more</a></div>

                                </div>

                            </li>
                        </ul>


                    </div>
                    <div class="col-9 inner-menu-wrap justify-content-between d-none" id="publicSector">
                        <ul class="inner-menu padding-left-20">
                            <li class="title">Mobile Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'corporate-mobile',
                            'menu_id' => 'corporate-mobile',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">Landline Solutions</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'corporate-landline',
                            'menu_id' => 'corporate-landline',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0">
                            <li class="title">IT Support</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'corporate-it',
                            'menu_id' => 'corporate-it',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <?php 
                            $large_post = get_field('large_post', 'options');
                            $c_large = get_the_category($large_post->ID);
                             ?>
                            <li class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20">


                                <a href="<?php the_permalink($large_post->ID); ?>"><img loading="lazy" decoding="async"
                                        class="image-fluid margin-bottom-10"
                                        src="<?php echo get_the_post_thumbnail_url($large_post->ID); ?>"></a>
                                <div class="padding-20">
                                    <p class="margin-0"><?php echo $c_large[0]->cat_name; ?></p>
                                    <a href="<?php the_permalink($large_post->ID); ?>">
                                        <h4 class="text-yellow margin-bottom-15"><?php echo $large_post->post_title; ?>
                                        </h4>
                                    </a>
                                    <div class="text-right"><a href="<?php the_permalink($large_post->ID); ?>">Find out
                                            more</a></div>

                                </div>

                            </li>
                        </ul>


                    </div>
                    <div class="col-9 inner-menu-wrap justify-content-between d-none" id="whyAerial">
                        <ul class="inner-menu padding-left-20 col-4">
                            <li class="title">Why Aerial Direct</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'why-aerial',
                            'menu_id' => 'why-aerial',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>

                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">

                            <?php 
                            $first_post = get_field('first_post', 'options');
                            $c_first = get_the_category($first_post->ID);
                             ?>
                            <li class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20">


                                <a href="<?php the_permalink($first_post->ID); ?>"><img loading="lazy" decoding="async"
                                        class="image-fluid margin-bottom-10"
                                        src="<?php echo get_the_post_thumbnail_url($first_post->ID); ?>"></a>
                                <div class="padding-20">
                                    <p class="margin-0"><?php echo $c_first[0]->cat_name; ?></p>
                                    <a href="<?php the_permalink($first_post->ID); ?>">
                                        <h4 class="text-yellow margin-bottom-15"><?php echo $first_post->post_title; ?>
                                        </h4>
                                    </a>
                                    <div class="text-right"><a href="<?php the_permalink($first_post->ID); ?>">Find out
                                            more</a></div>

                                </div>

                            </li>

                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <?php 
                            $second_post = get_field('second_post', 'options');
                            $c_second = get_the_category($large_post->ID);
                             ?>
                            <li class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20">


                                <a href="<?php the_permalink($second_post->ID); ?>"><img loading="lazy" decoding="async"
                                        class="image-fluid margin-bottom-10"
                                        src="<?php echo get_the_post_thumbnail_url($second_post->ID); ?>"></a>
                                <div class="padding-20">
                                    <p class="margin-0"><?php echo $c_second[0]->cat_name; ?></p>
                                    <a href="<?php the_permalink($second_post->ID); ?>">
                                        <h4 class="text-yellow margin-bottom-15"><?php echo $second_post->post_title; ?>
                                        </h4>
                                    </a>
                                    <div class="text-right"><a href="<?php the_permalink($second_post->ID); ?>">Find out
                                            more</a></div>

                                </div>

                            </li>
                        </ul>


                    </div>
                    <div class="col-9 inner-menu-wrap justify-content-between" id="helpSupport">
                        <ul class="inner-menu padding-left-20 col-4">
                            <li class="title">Help & Support</li>
                            <div class="list-style-none ul-padding-0">
                                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'help-support',
                            'menu_id' => 'help-support',
                            'walker' => new AD_Walker()
                        )
                    );
                    ?>
                            </div>
                            <li class="title margin-top-50">Contact Information</li>
                            <li class="nav-item active">
                                <img loading="lazy" class="margin-right-15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/call.svg">
                                <a class="nav-link" href="tel:01329 558558">01329 558558</a>
                            </li>
                            <li class="nav-item">
                                <img loading="lazy" class="margin-right-15"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/small_email.svg">
                                <a class="nav-link" href="mailto:support@aerial-direct.com">support@aerial-direct.com</a>
                            </li>
                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <li class="bg-dark-blue-2 padding-h-0 text-center h-100">
                                <div class="padding-25">
                                    <h2>Webform</h2>
                                    <img loading="lazy" class="padding-v-40"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg">
                                    <p class="margin-bottom-30">
                                        Our team aim to reply to all enquiries within 48 hours.
                                    </p>
                                    <a class="margin-top-auto" href="/contact-us/">Contact our team</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="inner-menu padding-left-0 col-4">
                            <li class="bg-dark-blue-2 padding-h-0 text-center h-100">
                                <div class="padding-25">
                                    <h2>Live Chat</h2>
                                    <img loading="lazy" class="padding-v-30"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/chatting.svg">
                                    <p class="margin-bottom-30">
                                        Support lines are open between Monday - Friday 8:30am - 6:30pm
                                    </p>
                                    <a class="margin-top-auto" href="#">Contact our team</a>
                                </div>
                            </li>
                        </ul>


                    </div>


                </div>

                <div class="container-fluid d-none mobile-navbar-show justify-content-between padding-v-20">
                    <div class="mobile-logo">
                        <a href="<?php echo home_url(); ?>"><img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt=""
                                class="image-fluid logo"></a>
                    </div>
                    <div class="mobile-menu">
                        <a href="#" data-action="mobileMenuToggle" class="mobile-menu-opener">Menu</a>
                        <div class="mobile-menu-holder">
                            <div class="mobile-menu-inner">
                                <div class="slide-menu">
                                    <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-2',
                                        'menu_id' => 'primary-menu',
                                    )
                                );
                                ?>


                                </div>
                                <div class="contact-info">
                                    <strong class="contact-info-title">Contact Information</strong>
                                    <div class="contact-info-row">
                                        <a href="tel:01329558558" class="phone">01329 558558</a>
                                    </div>
                                    <div class="contact-info-row">
                                        <a href="mailto:support@aerial-direct.com"
                                            class="mail">support@aerial-direct.com</a>
                                    </div>
                                    <a href="#"><button class="btn btn-block nav-btn margin-top-50 btn-light d-none">Request a Quote</button></a>
                                    <a href="/login-portal/"><button class="btn btn-block nav-btn margin-top-50 btn-light">Login</button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mobile-header-popup d-none">
                    <div class="mobile-header-inner align-items-center justify-content-center">
                        <div class="bg-gradient-top mobile-inner-wrap">
                            <div class="text-center"><h2>What is your <br>business size?</h2></div>
                            <div class="mobile-header-options d-flex flex-column">
                                <a href="/small-business-landing-page/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Small Business<br><span class="btn header-btn-sub">1 – 50 Employees</span></button></a>
                                <a href="/medium-large-business-landing-page/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Medium &amp; Large Business<br><span class="btn header-btn-sub">51 – 250 Employees</span></button></a>
                                <a href="/corporate-public-sector/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Corporate &amp; Public Sector<br><span class="btn header-btn-sub">250+ Employees</span></button></a>
                            </div>
                            <div class="text-center margin-top-15">
                                <a class="btn-cancel" href="#">Cancel</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div><!-- .site-branding -->
        </header><!-- #masthead -->
