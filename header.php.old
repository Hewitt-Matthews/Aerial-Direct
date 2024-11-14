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
<!-- test -->
  <!-- Global site tag (gtag.js) - GA4 Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RJJTLCK2Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-3RJJTLCK2Y');
  </script>
  <!-- END Global site tag (gtag.js) - Google Analytics -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" fetchpriority="high" as="image" href="https://www.aerial-direct.co.uk/wp-content/uploads/2023/03/Telephony_Device_Hexagon-resized.png" type="image/webp">

    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,400italic,700&display=swap" rel="stylesheet">
    <!-- TrustBox script -->
	<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End TrustBox script -->
    <!-- Hotjar Tracking Code for https://aerial-direct.co.uk -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3364627,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <script>

        (function() {
            var zi = document.createElement('script');
            zi.type = 'text/javascript';
            zi.async = true;
            zi.referrerPolicy = 'unsafe-url';
            zi.src = 'https://ws.zoominfo.com/pixel/62e2ae255d30f0008e3f2cab';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(zi, s);
        })();

    </script>
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
                        class="custom-container container-fluid d-lg-flex flex-row align-items-center padding-v-30 desktop-navbar-hide" style='padding-left:<?php echo get_field('h_p_l', 'option') ?>px;padding-right:<?php echo get_field('h_p_r','option') ?>px;
                                                                                                                                                padding-top:<?php echo get_field('h_p_t','option') ?>px;padding-bottom:<?php echo get_field('h_p_b','option') ?>px;'>
                    <a class="margin-right-70" href="<?php echo home_url(); ?>"><img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="aerial-direct brand-logo"
                                class="brand-logo"></a>
                    <a class="nav-1 top-links py-2 d-none d-md-inline-block" href="javascript:;">Products & Solutions</a>
                    <a class="nav-2 top-links py-2 d-none d-md-inline-block" href="javascript:;">Why Choose Aerial Direct?</a>
                    <a class="nav-3 top-links py-2 d-none d-md-inline-block" href="javascript:;">Help &
                        Support</a>
					<a class="nav-3 top-links py-2 d-none d-md-inline-block" href="/resource-hub">Resource Hub</a>
                    <form class="search-form desktop-navbar-hide search-form-wrap" action="<?php echo home_url(); ?>">
                        <input class="margin-0" placeholder="Search..." type="search" id="search" name="s">
                    </form>
                    <button class="search-btn bg-transparent border-0 d-none" href="#">
						<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="search-icon" class="search-icon">
					</button>
                    <a href="/request-a-quote" class="button-small btn my-2 my-sm-0 margin-right-15 btn-yellow-invert"
                       type="submit">Request a Quote
                    </a>
                    <a href="/login-portal" class="btn button-small btn-light" type="submit">Login</a>
                </div>



            </nav>
            <div class="row desktop-navbar bg-dark-grey padding-30 custom-container desktop-navbar-hide d-none">
                <div class="business-type-wrap col-3 show">
                    <ul class="business-type">
                        <li class="title">Business Type</li>
                        <li class="nav-item active type-1">
                            <a class="nav-link" href="/small-business-landing-page/">
                                <span class="type-title">Small Business</span>
                                <span class="type-sub">1 - 10 Employees</span>
                            </a>
                        </li>
                        <li class="nav-item type-2">
<!--                             <a class="nav-link"
                               href="/medium-large-business-landing-page//medium-large-business-landing-page/"> -->
							<a class="nav-link"
                               href="/medium-large-business-landing-page/">
                                <span class="type-title">Medium & Large Business</span>
                                <span class="type-sub">11 - 50 Employees</span>
                            </a>
                        </li>
                        <li class="nav-item type-3">
                            <a class="nav-link" href="/corporate-public-sector/">
                                <span class="type-title">Corporate & Public Sector</span>
                                <span class="type-sub">50+ Employees</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-9 inner-menu-wrap justify-content-between d-none" id="smallBusiness">
                    <ul class="inner-menu padding-left-20">
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
                    <div class="inner-menu padding-left-0 col-4">
                        <?php
                        $small_post = get_field('small_business_post', 'options');
                        $small_post_desc = get_field('small_post_desc', 'options');
                        $c = get_the_category($small_post->ID);
                        $featured_img_url = get_the_post_thumbnail_url($small_post->ID);
                        ?>
                        <div class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20 h-100 d-flex flex-column">


                            <a href="/case-studies/#<?php echo $small_post->post_name; ?>"><img loading="lazy" decoding="async"
                                                                                    class="image-fluid margin-bottom-10" src="<?php echo $featured_img_url; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($small_post->ID), '_wp_attachment_image_alt', true ); ?>"
></a>
                            <div class="padding-top-20 padding-bottom-0 padding-h-20">
                                <a href="/case-studies/#<?php echo $small_post->post_name; ?>">
                                    <h4 class="text-yellow margin-bottom-15"><?php echo $small_post->post_title; ?>
                                    </h4>
                                </a>
                                <?php if( get_field('small_post_desc', 'options') ): ?>
                                    <div class="post-desc">
                                        <p><?php echo $small_post_desc; ?></p>
                                    </div>
                                <?php endif; ?>



                            </div>
                            <div class="text-right margin-top-auto padding-h-30 padding-bottom-20"><a href="/case-studies/#<?php echo $small_post->post_name; ?>">Find out
                                    more</a></div>

                        </div>
                        <!-- end loop -->
                    </div>


                </div>
                <div class="col-9 inner-menu-wrap justify-content-between d-none" id="mediumLargeBusiness">
                    <ul class="inner-menu padding-left-20">
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
                    <div class="inner-menu padding-left-0 col-4">

                            <?php
                            $medium_post = get_field('medium_post', 'options');
                            $medium_post_desc = get_field('medium_post_desc', 'options');
                            $c_medium = get_the_category($medium_post->ID);
                            ?>
                        <div class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20 h-100 d-flex flex-column">


                            <a href="<?php the_permalink($medium_post->ID); ?>"><img loading="lazy" decoding="async"
                                                                                     class="image-fluid margin-bottom-10 lozad"
                                                                                     src="<?php echo get_the_post_thumbnail_url($medium_post->ID); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($medium_post->ID), '_wp_attachment_image_alt', true ); ?>"></a>
                            <div class="padding-top-20 padding-bottom-0 padding-h-20">
                                <a href="<?php the_permalink($medium_post->ID); ?>">
                                    <h4 class="text-yellow margin-bottom-15"><?php echo $medium_post->post_title; ?>
                                    </h4>
                                </a>
                                <?php if( get_field('medium_post_desc', 'options') ): ?>
                                    <div class="post-desc">
                                        <p><?php echo $medium_post_desc; ?></p>
                                    </div>
                                <?php endif; ?>


                            </div>
                            <div class="text-right margin-top-auto padding-h-30 padding-bottom-20"><a href="<?php the_permalink($medium_post->ID); ?>">Find out
                                    more</a></div>

                        </div>
                    </div>


                </div>
                <div class="col-9 inner-menu-wrap justify-content-between d-none" id="publicSector">
                    <ul class="inner-menu padding-left-20">
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
                    <div class="inner-menu padding-left-0 col-4">
                        <?php
                        $large_post = get_field('large_post', 'options');
                        $large_post_desc = get_field('large_post_desc', 'options');
                        $c_large = get_the_category($large_post->ID);
                        ?>
                        <div class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20 h-100 d-flex flex-column">


                            <a href="<?php the_permalink($large_post->ID); ?>"><img loading="lazy" decoding="async"
                                                                                    class="image-fluid margin-bottom-10"
                                                                                    src="<?php echo get_the_post_thumbnail_url($large_post->ID); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($large_post->ID), '_wp_attachment_image_alt', true ); ?>"></a>
                            <div class="padding-top-20 padding-bottom-0 padding-h-20">
                                <a href="<?php the_permalink($large_post->ID); ?>">
                                    <h4 class="text-yellow margin-bottom-15"><?php echo $large_post->post_title; ?>
                                    </h4>
                                </a>
                                <?php if( get_field('large_post_desc', 'options') ): ?>
                                    <div class="post-desc">
                                        <p><?php echo $large_post_desc; ?></p>
                                    </div>
                                <?php endif; ?>


                            </div>
                            <div class="text-right margin-top-auto padding-h-30 padding-bottom-20"><a href="<?php the_permalink($large_post->ID); ?>">Find out
                                    more</a></div>

                        </div>
                    </div>


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
                    <div class="inner-menu padding-left-0 col-4">

                        <?php
                        $first_post = get_field('first_post', 'options');
                        $first_post_desc = get_field('first_post_desc', 'options');
                        $c_first = get_the_category($first_post->ID);
                        ?>
                        <div class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20 h-100 d-flex flex-column">


                            <a href="<?php the_permalink($first_post->ID); ?>"><img loading="lazy" decoding="async"
                                                                                    class="image-fluid margin-bottom-10"
                                                                                    src="<?php echo get_the_post_thumbnail_url($first_post->ID); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($first_post->ID), '_wp_attachment_image_alt', true ); ?>"></a>
                            <div class="padding-top-20 padding-bottom-0 padding-h-20">
                                <a href="<?php the_permalink($first_post->ID); ?>">
                                    <h4 class="text-yellow margin-bottom-15"><?php echo $first_post->post_title; ?>
                                    </h4>
                                </a>
                                <?php if( get_field('first_post_desc', 'options') ): ?>
                                    <div class="post-desc">
                                        <p class="margin-bottom-0"><?php echo $first_post_desc; ?></p>
                                    </div>
                                <?php endif; ?>


                            </div>
                            <div class="text-right margin-top-auto padding-h-30 padding-bottom-20"><a href="<?php the_permalink($first_post->ID); ?>">Find out
                                    more</a></div>

                        </div>

                    </div>
                    <div class="inner-menu padding-left-0 col-4">
                        <?php
                        $second_post = get_field('second_post', 'options');
                        $second_post_desc = get_field('second_post_desc', 'options');
                        $c_second = get_the_category($large_post->ID);
                        ?>
                        <div class="bg-dark-blue-2 padding-h-0 blog-item margin-top-20 h-100 d-flex flex-column">


                            <a href="<?php the_permalink($second_post->ID); ?>"><img loading="lazy" decoding="async"
                                                                                     class="image-fluid margin-bottom-10"
                                                                                     src="<?php echo get_the_post_thumbnail_url($second_post->ID); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($second_post->ID), '_wp_attachment_image_alt', true ); ?>"></a>
                            <div class="padding-top-20 padding-bottom-0 padding-h-20">
                                <a href="<?php the_permalink($second_post->ID); ?>">
                                    <h4 class="text-yellow margin-bottom-15"><?php echo $second_post->post_title; ?>
                                    </h4>
                                </a>
                                <?php if( get_field('second_post_desc', 'options') ): ?>
                                    <div class="post-desc">
                                        <p><?php echo $second_post_desc; ?></p>
                                    </div>
                                <?php endif; ?>


                            </div>
                            <div class="text-right margin-top-auto padding-h-30 padding-bottom-20"><a href="<?php the_permalink($second_post->ID); ?>">Find out
                                    more</a></div>

                        </div>
                    </div>


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
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/call.svg" alt='A Phone'>
                            <a class="nav-link" href="tel:01329 558558">01329 558558</a>
                        </li>
                        <li class="open-hours d-flex">
                            <img loading="lazy" class="margin-right-15 clock-icon"
                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" alt='A Clock'>
                            <span class="nav-link">08:30 - 18:00</span>
                        </li>
                    </ul>
                    <div class="inner-menu padding-left-0 col-4">
                        <div class="bg-dark-blue-2 padding-h-0 text-center h-100 d-flex flex-column">
                            <div class="padding-25 block-link-wrap">
                                <h2><?php the_field('first_card_title', 'options'); ?></h2>
                                <img loading="lazy" class="padding-v-40"
                                     src="<?php the_field('first_card_icon', 'options'); ?>" alt='Email'>
                                <p class="margin-bottom-30">
                                    <?php the_field('first_card_description', 'options'); ?>
                                </p>
                                <?php
                                $button_first = get_field('first_card_button', 'options');
                                ?>

                                <a class="margin-top-auto block-link" href="<?php echo $button_first['url']; ?>"></a>
                            </div>
                            <div class="text-center margin-top-auto padding-bottom-20">
                            <a href="<?php echo $button_first['url']; ?>" target="<?php echo $button_first['target']; ?>">
                                <a class="margin-top-auto"><?php echo $button_first['title']; ?></a>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="inner-menu padding-left-0 col-4">
                        <div class="bg-dark-blue-2 padding-h-0 text-center h-100 d-flex flex-column">
                            <div class="padding-25 block-link-wrap">
                                <h2><?php the_field('second_card_title', 'options'); ?></h2>
                                <img loading="lazy" class="padding-v-30"
                                     src="<?php the_field('second_card_icon', 'options'); ?>" alt='Live Chat'>
                                <p class="margin-bottom-30">
                                    <?php the_field('second_card_description', 'options'); ?>

                                </p>
                                <?php
                                $button_second = get_field('second_card_button', 'options');

                                ?>


                                    <a class="margin-top-auto custom-live-chat-button block-link" href="<?php echo $button_second['url']; ?>"></a>

                            </div>
                            <div class="text-center margin-top-auto padding-bottom-20 custom-live-chat-button">
                            <a class="" href="<?php echo $button_second['url']; ?>" target="<?php echo $button_second['target']; ?>">
                                <?php echo $button_second['title']; ?>
                            </a>
                            </div>
                        </div>
                    </div>


                </div>


            </div>

            <div class="container-fluid d-none mobile-navbar-show justify-content-between padding-v-20">
                <div class="mobile-logo">
                    <a href="<?php echo home_url(); ?>"><img loading="lazy"
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="AD Logo"
                                class="image-fluid logo"></a>
                </div>
                <div class="mobile-request">
                    <a href="/request-a-quote" class="button-small btn my-2 my-sm-0 margin-right-15 btn-yellow-invert mobile-request-btn">Request a Quote
                    </a>
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
                                <div class="contact-info-row open-hours d-flex">
                                        <img loading="lazy" class="margin-right-15 clock-icon"
                                             src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" alt='A Clock'>
                                        <span class="nav-link">08:30 - 18:00</span>
                                </div>
                                <a href="/request-a-quote"><button class="btn btn-block nav-btn margin-top-50 btn-light">Request a Quote</button></a>
                                <a href="/login-portal/"><button class="btn btn-block nav-btn margin-top-20 btn-light">Login</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mobile-header-popup option-1 d-none d-lg-none">
                <div class="mobile-header-inner align-items-center justify-content-center">
                    <div class="bg-gradient-top mobile-inner-wrap">
                        <div class="text-center"><h2>What solutions are
                                <br>you looking for?</h2></div>
                        <div class="mobile-header-options d-flex flex-column">
                            <button class="main-buttons-mobile-1 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center d-inline-block">
                                <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                    <img loading="lazy" class="" decoding="async"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-mobile.svg" alt='Phone'>
                                    <span class="line margin-h-15 font-large">|</span> Mobile Solutions
                                </div>
                            </button>
                            <button class="main-buttons-mobile-2 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center">
                                <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                    <img loading="lazy" class="" decoding="async"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-suitcase.svg" alt='A Suitcase'>
                                    <span class="line margin-h-15 font-large">|</span> Business Solutions
                                </div>

                            </button>
                            <button class="main-buttons-mobile-3 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center">
                                <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                    <img loading="lazy" class="" decoding="async"
                                         src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-laptop.svg" alt='A Laptop'>
                                    <span class="line margin-h-15 font-large">|</span> Aerial Direct IT</div>

                            </button>
                        </div>
                        <div class="text-center margin-top-15">
                            <a class="btn-cancel" href="javascript:;">Cancel</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mobile-header-popup sub-buttons-mobile-1 d-none d-lg-none">
                <div class="mobile-header-inner align-items-center justify-content-center">
                    <div class="bg-gradient-top mobile-inner-wrap">
                        <div class="text-center"><h2>What is your <br>business size?</h2></div>
                        <div class="mobile-header-options d-flex flex-column">
                            <a href="/small-business-mobile/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Small Business<br><span class="btn header-btn-sub">1 – 10 Employees</span></button></a>
                            <a href="/medium-business-mobile/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Medium &amp; Large Business<br><span class="btn header-btn-sub">11 – 50 Employees</span></button></a>
                            <a href="/corporate-public-sector-mobile/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Corporate &amp; Public Sector<br><span class="btn header-btn-sub">50+ Employees</span></button></a>
                        </div>
                        <div class="text-center margin-top-15">
                            <a class="btn-cancel" href="javascript:;">Cancel</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mobile-header-popup sub-buttons-mobile-2 d-none d-lg-none">
                <div class="mobile-header-inner align-items-center justify-content-center">
                    <div class="bg-gradient-top mobile-inner-wrap">
                        <div class="text-center"><h2>What is your <br>business size?</h2></div>
                        <div class="mobile-header-options d-flex flex-column">
                            <a href="/small-business-business-solutions/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Small Business<br><span class="btn header-btn-sub">1 – 10 Employees</span></button></a>
                            <a href="/medium-business-landline/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Medium &amp; Large Business<br><span class="btn header-btn-sub">11 – 50 Employees</span></button></a>
                            <a href="/corporate-public-sector-landline/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Corporate &amp; Public Sector<br><span class="btn header-btn-sub">50+ Employees</span></button></a>
                        </div>
                        <div class="text-center margin-top-15">
                            <a class="btn-cancel" href="javascript:;">Cancel</a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mobile-header-popup sub-buttons-mobile-3 d-none d-lg-none">
                <div class="mobile-header-inner align-items-center justify-content-center">
                    <div class="bg-gradient-top mobile-inner-wrap">
                        <div class="text-center"><h2>What is your <br>business size?</h2></div>
                        <div class="mobile-header-options d-flex flex-column">
                            <a href="/aerial-direct-it/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Small Business<br><span class="btn header-btn-sub">1 – 10 Employees</span></button></a>
                            <a href="/aerial-direct-it/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Medium &amp; Large Business<br><span class="btn header-btn-sub">11 – 50 Employees</span></button></a>
                            <a href="/aerial-direct-it/"><button class="btn btn-header btn-block btn-light margin-right-5 margin-top-20 text-center">Corporate &amp; Public Sector<br><span class="btn header-btn-sub">50+ Employees</span></button></a>
                        </div>
                        <div class="text-center margin-top-15">
                            <a class="btn-cancel" href="javascript:;">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .site-branding -->
    </header><!-- #masthead -->