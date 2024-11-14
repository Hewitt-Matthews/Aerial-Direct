<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ad
 */

get_header();
?>

	<main id="primary" class="site-main">

            <section class="error-404 not-found image-content page-header">
                <div class="container-fluid">
                    <div class="row align-items-center custom-height">
                        <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10">
                            <h1 class="weight-normal header-heading text-white">
                                <span class="weight-bold weight-normal text-yellow">404</span><br>Page not found
                            </h1>

                            <h3 class="weight-normal text-white">
                                The page you were looking for cannot be found, use the button below to navigate back to the homepage.
                            </h3>


                            <a href="/"><button class="btn btn-yellow btn-light margin-right-5 margin-top-20 text-center">Back to home<br><span class="header-btn-sub"></span></button></a>

                        </div>
                        <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-left-100"><img loading="lazy" class="lozad" width="315" data-src="/wp-content/themes/ad/assets/images/404.png">
                        </div>

                        <div class="col-12 social-section">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="col-6 d-flex social-buttons">
                                    <a target="_blank" href="<?php the_field('facebook', 'options'); ?>">Facebook</a>
                                    <img loading="lazy" decoding="async" class="padding-h-20 bullets" width="60" src="https://aerial-direct.d.cxgrp.co.uk/wp-content/themes/ad/assets/images/dot.svg">
                                    <a target="_blank" href="<?php the_field('linkedin', 'options'); ?>">LinkedIn</a>
                                    <img loading="lazy" decoding="async" class="padding-h-20 bullets" width="60" src="https://aerial-direct.d.cxgrp.co.uk/wp-content/themes/ad/assets/images/dot.svg">
                                    <a target="_blank" href="<?php the_field('twitter', 'options'); ?>">Twitter</a>

                                </div>
                                <div class="col-6 text-right">
                                    <a class="d-none" href="#"><img loading="lazy" decoding="async" class="chat-icon" src="https://aerial-direct.d.cxgrp.co.uk/wp-content/themes/ad/assets/images/live-chat.svg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
