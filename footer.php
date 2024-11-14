<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eh
 */

?>
</div>
<footer id="colophon" class="site-footer">
    <div class="container-fluid custom-container padding-v-20">
        <div class="row footer-blocks padding-h-30">
            <div class="custom-col margin-v-40 margin-right-40 padding-0">
                <p class="text-yellow">Aerial Direct</p>
                <div class="list-style-none ul-padding-0">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-1',
                            'menu_id' => 'footer-menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="custom-col margin-v-40 margin-right-40">
                <p class="text-yellow">Support for your business</p>
                <div class="list-style-none ul-padding-0">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-2',
                            'menu_id' => 'footer-menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="custom-col margin-v-40 margin-right-40">
                <p class="text-yellow">Corporate responsibility</p>
                <div class="list-style-none ul-padding-0">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-3',
                            'menu_id' => 'footer-menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="custom-col margin-v-40 margin-right-40">
                <p class="text-yellow">Useful links</p>
                <div class="list-style-none ul-padding-0">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-4',
                            'menu_id' => 'footer-menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="custom-col margin-v-40 padding-0">
                <p class="text-yellow">Follow us</p>
                <div class="list-style-none ul-padding-0">
                    <ul class="social-links d-flex">
                        <li><a target="_blank" href="<?php the_field('linkedin', 'options'); ?>"><img loading="lazy" class="margin-right-10" style='height:16.63px!important;'
                                                                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-new.svg" alt='LinkedIn Logo'></a>
                        </li>
                        <li><a target="_blank" href="<?php the_field('twitter', 'options'); ?>"><img loading="lazy" class="margin-right-10" style='height:16.63px!important;'
                                                                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-new.svg" alt='Twitter Logo'></a>
                        </li>
                        <li><a target="_blank" href="<?php the_field('facebook', 'options'); ?>"><img loading="lazy" class="margin-right-10" style='height:16.63px!important;'
                                                                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-new.svg" alt='Facebook Logo'></a>
                        </li>
                        <li><a target="_blank" href="<?php the_field('instagram', 'options'); ?>"><img loading="lazy" class="margin-right-10" style='height:16.63px!important;'
                                                                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-new.svg" alt='Instagram Logo'></a>
                        </li>
                        <li><a target="_blank" href="<?php the_field('tiktok', 'options'); ?>"><img loading="lazy" class="margin-right-10" style='height:16.63px!important;'
                                                                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.svg" alt='TikTok Logo'></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="list-style-none ul-padding-0">
                    <ul class="d-flex justify-content-center justify-content-md-start">
                        <li class="margin-right-20"><a class="no-wrap" href="/privacy-cookies/">Privacy Policy</a></li>
                        <li><a class="no-wrap" href="/site-map/">Sitemap</a></li>

                    </ul>
                    <div class="text-center text-md-left margin-bottom-10">
                        © Aerial Direct 2024
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 text-center text-md-right">
                <img loading="lazy" width="84px" height="84px"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/27001.jpg" alt='ISO 27001 logo'>
                <img loading="lazy" width="84px" height="84px"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/22301.jpg" alt='ISO 22301 logo'>
                <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/cyber-essentials-badge.png" alt='cyber-essentials-badge logo'>

            </div>
        </div>
        <div class="row">
            <div class="col-12 padding-v-20">
                <p class="text-center font-size-14">
                    Aerial Direct are proud to have implemented ISO 27001 and ISO 22301 to ensure our customer data and
                    business processes are adequately protected from information security and business continuity risks.
                    Our information security and business continuity policy is available upon request.<br> <br>
                    Aerial Direct Limited is registered in England & Wales at: 1 Barnes Wallis Road, Fareham, Hampshire,
                    UK PO15 5UA. Company no. 08043921. Please view our Privacy Policy for more information about how we
                    protect and process the data you submit. Aerial Direct Limited is authorised and regulated by the
                    Financial Conduct Authority for certain types of consumer credit lending and credit related
                    activities that are regulated under the Consumer Credit Act 1974 and by the Financial Services and
                        Markets Act 2000. We are a broker not a lender (FCA Registered Number: 729695).
                </p>
            </div>
        </div>

    </div>

    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<noscript>

    <img src=https://ws.zoominfo.com/pixel/62e2ae255d30f0008e3f2cab
         width="1" height="1" style="display: none;"
         alt="websights" />

</noscript>

</body>


</html>