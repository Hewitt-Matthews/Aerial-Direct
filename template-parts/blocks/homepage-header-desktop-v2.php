<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
?>
<?php
$totalreviews = getTrustPilot5starReviews();
?>
<section class="image-content page-header mobile-hide" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row align-items-center custom-height"
             style="background: url(<?php the_field('content_image'); ?>);">
            <?php if (get_field('content_alignment') === "left"): ?>
                <div class="col-12 col-lg-4 padding-v-10 text-center order-0 trustpilot-widget-wrap">

                    <div class="d-flex flex-column trustpilot-card">
                        <a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank"><img loading="lazy" width="130px" class=" margin-bottom-10"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/trust-black.svg" alt='trust black'></a>
                        <a class="margin-bottom-10" href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank"><img loading="lazy" width="190px"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-large.svg" alt='large stars'></a>
                        <a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank">
                            <p><small>TrustScore <strong><?php echo $totalreviews->score->trustScore ?></strong></small></p></a>
                        <p><small><a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                                     target="_blank"><strong><?php echo number_format($totalreviews->numberOfReviews->total);
                                        ?></strong> reviews
                                </a>
                            </small></p>
                    </div>


                </div>
                <div class="col-12 col-lg-8 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal header-heading header-badge <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>
                    <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                    </h3>
                    <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                        <p><?php the_field('content_description'); ?></p>
                    </div>

                    <?php
                    if (have_rows('header_content_button')):
                        while (have_rows('header_content_button')) : the_row();
                            $button = get_sub_field('button');
                            ?>
                            <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>">
                                <button class="btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center"> <?php echo $button['title']; ?>
                                    <br><span
                                            class="btn header-btn-sub" style='font-size: <?php the_sub_field('button_subtitle_ft'); ?>px!important;'><?php the_sub_field('button_subtitle'); ?></span>
                                </button>
                            </a>

                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php else: ?>
                <div class="col-12 col-lg-8 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal header-heading header-badge <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php if (get_field('show_badge')): ?>
                            <span class="add-badge"></span>
                        <?php endif; ?>
                        <?php the_field('content_title'); ?>
                    </h1>

                    <?php if (get_field('content_subtitle')): ?>
                        <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                        </h3>
                    <?php endif; ?>
                    <?php if (get_field('content_description')): ?>
                        <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                            <h3 class="margin-top-30 weight-medium"><?php the_field('content_description'); ?></h3>
                        </div>
                    <?php endif; ?>

                    <div class="d-flex main-buttons-wrap">
                        <button class="main-buttons-1 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center d-inline-block" style="white-space: nowrap;">
                            <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                <img loading="lazy" class="" decoding="async"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-mobile.svg" alt='a mobile button'>
                                <span class="line margin-h-15 font-large">|</span> Mobile Solutions
                            </div>
                        </button>
                        <button class="main-buttons-2 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center" style="white-space: nowrap;">
                            <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                <img loading="lazy" class="" decoding="async"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-suitcase.svg" alt='suitcase'>
                                <span class="line margin-h-15 font-large">|</span> Business Solutions
                            </div>

                        </button>
                        <button class="main-buttons-3 btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center" style="white-space: nowrap;">
                            <div class="padding-v-5 padding-h-10 d-flex align-items-center">
                                <img loading="lazy" class="" decoding="async"
                                     src="<?php echo get_template_directory_uri(); ?>/assets/images/btn-laptop.svg" alt='laptop'>
                                <span class="line margin-h-15 font-large">|</span> Aerial Direct IT</div>

                        </button>
                    </div>
                    <div class="sub-buttons-1 d-none">
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/small-business-mobile/">
                            Small Business <br><span class="btn header-btn-sub">1 – 10 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/medium-business-mobile/">
                            Medium Business <br><span class="btn header-btn-sub">11 – 50 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/corporate-public-sector-mobile/">
                            Corporate &amp; Public Sector <br><span class="btn header-btn-sub">50+ Employees</span>
                        </a>
                    </div>
                    <div class="sub-buttons-2 d-none">
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/small-business-business-solutions/">
                            Small Business <br><span class="btn header-btn-sub">1 – 10 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/medium-business-landline/">
                            Medium Business <br><span class="btn header-btn-sub">11 – 50 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/corporate-public-sector-landline/">
                            Corporate &amp; Public Sector <br><span class="btn header-btn-sub">50+ Employees</span>
                        </a>
                    </div>
                    <div class="sub-buttons-3 d-none">
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/aerial-direct-it/">
                            Small Business <br><span class="btn header-btn-sub">1 – 10 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/aerial-direct-it/">
                            Medium Business <br><span class="btn header-btn-sub">11 – 50 Employees</span>
                        </a>
                        <a class="btn btn-header btn-light margin-top-20 text-center align-items-center padding-h-30"
                           target="" href="/aerial-direct-it/">
                            Corporate &amp; Public Sector <br><span class="btn header-btn-sub">50+ Employees</span>
                        </a>
                    </div>

                </div>

                <div class="col-12 col-lg-4 padding-v-10 text-center order-0 trustpilot-widget-wrap">
                    <div class="d-flex flex-column trustpilot-card">
                        <a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank"><img loading="lazy" width="115px" class=" margin-bottom-10"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/trust-black.svg" alt='trust black'></a>
                        <a class="margin-bottom-10" href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank"><img loading="lazy" width="165px"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-large.svg" alt='large stars'></a>
                        <a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                           target="_blank">
                            <p><small>TrustScore <strong><?php echo $totalreviews->score->trustScore ?></strong></small></p></a>
                        <p><small><a href="https://uk.trustpilot.com/review/www.aerial-direct.co.uk"
                                      target="_blank"><strong><?php echo number_format($totalreviews->numberOfReviews->total);
                                        ?></strong> reviews
                                </a>
                            </small></p>
                    </div>
                </div>

            <?php endif; ?>
           <?php if(!get_field('arrow_show')) :?>
            <div class="col-12 social-section order-2">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="col-4 text-center arrow-down-header">
                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"><img loading="lazy" decoding="async"
                                                                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'>
                        </button>
                    </div>

                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>
