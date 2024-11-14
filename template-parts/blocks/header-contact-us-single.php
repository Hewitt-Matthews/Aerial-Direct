<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
?>
<section class="image-content page-header mobile-hide" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row align-items-center custom-height margin-top-70 margin-lg-top-0 contact-us-single">
            <?php if (get_field('content_alignment') === "left"): ?>
                <div class="col-12 col-lg-7 col-xl-7 padding-v-10 text-center padding-md-right-100 order-1"><?php the_field('contact_form_shortcode'); ?></div>
                <div class="col-12 col-lg-5 col-xl-5 order-lg-0 padding-v-10 order-0 text-center text-lg-left">
                    <h1 class="weight-normal header-heading text-white <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>
                    <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                    </h3>
                    <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                        <p><?php the_field('content_description' , false, false); ?></p>
                    </div>
                    <?php
                    if (have_rows('header_content_button')):
                        while (have_rows('header_content_button')) : the_row();
                            $button = get_sub_field('button');
                            ?>


                            <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>">
                                <button class="btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center"> <?php echo $button['title']; ?>
                                    <br><span
                                            class="btn header-btn-sub"><?php the_sub_field('button_subtitle'); ?></span>
                                </button>
                            </a>

                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php else: ?>
                <div class="col-12 col-lg-5 col-xl-5 order-lg-0 padding-v-10 order-0 text-center text-lg-left">
                    <h1 class="weight-normal header-heading text-white <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>

                    <?php if (get_field('content_subtitle')): ?>
                        <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                        </h3>
                    <?php endif; ?>
                    <?php if (get_field('content_description')): ?>
                        <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                            <h3 class="margin-top-30 weight-medium"><?php the_field('content_description', false, false); ?></h3>
                        </div>
                    <?php endif; ?>
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
                <div class="col-12 col-lg-7 col-xl-7 padding-v-10 text-center padding-md-left-100 order-1"><?php the_field('contact_form_shortcode'); ?>
                </div>

            <?php endif; ?>
            <div class="col-12 social-section order-2 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="col-4 text-center arrow-down-header">
                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"> <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'></button></div>

                </div>
            </div>
        </div>
    </div>
</section>