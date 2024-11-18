<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$top_padding = get_field('top_padding') ?: 100;
$bottom_padding = get_field('bottom_padding') ?: 100;
$img_alt = get_field('content_image_alt');
?>

<div class="swiper-container header-content-slider">
    <div class="swiper-wrapper">
        <?php if(have_rows('slider_slides')): 
            while(have_rows('slider_slides')): the_row();
                $image = get_sub_field('content_image');
                $title = get_sub_field('content_title');
                $subtitle = get_sub_field('content_subtitle');
                $description = get_sub_field('content_description');
                $alignment = get_sub_field('content_alignment');
        ?>
            <div class="swiper-slide">
                <section class="image-content page-header mobile-hide" style='
                    padding-top: <?php the_field('pt'); ?>px!important; 
                    padding-bottom: <?php the_field('pb'); ?>px!important;
                    padding-right: <?php the_field('pr'); ?>px!important;
                    padding-left: <?php the_field('pl'); ?>px!important;
                '>
                    <div class="container-fluid">
                        <div class="row align-items-center margin-top-<?php echo $top_padding; ?> margin-bottom-<?php echo $bottom_padding; ?>">
                            <?php if ($alignment === "left"): ?>
                                <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-right-100 order-0">
                                    <img loading="lazy" 
                                        class="rounded header-image <?php the_sub_field('image_radius'); ?> <?php echo $glowing; ?>"
                                        src="<?php echo esc_url($image); ?>" 
                                        alt="<?php echo esc_attr($title); ?>"/>
                                </div>
                                <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                    <h1 class="weight-normal header-heading header-badge <?php the_sub_field('title_color'); ?>">
                                        <?php echo $title; ?>
                                    </h1>
                                    <h3 class="weight-normal <?php the_sub_field('subtitle_color'); ?>">
                                        <?php echo $subtitle; ?>
                                    </h3>
                                    <div style='font-size: <?php the_sub_field('content_description_ft'); ?>px!important;'>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                    <h1 class="weight-normal header-heading header-badge <?php the_sub_field('title_color'); ?>">
                                        <?php echo $title; ?>
                                    </h1>
                                    <h3 class="weight-normal <?php the_sub_field('subtitle_color'); ?>" style='font-size: <?php the_sub_field('content_subtitle_ft'); ?>px!important;'>
                                        <?php echo $subtitle; ?>
                                    </h3>
                                    <div style='font-size: <?php the_sub_field('content_description_ft'); ?>px!important;'>
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0">
                                    <img loading="lazy" 
                                        class="rounded header-image <?php the_sub_field('image_radius'); ?> <?php echo $glowing; ?>"
                                        src="<?php echo esc_url($image); ?>" 
                                        alt="<?php echo esc_attr($title); ?>"/>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if(!get_field('arrow_show')) :?>
                    <div class="col-12 social-section order-2">
                        <div class="d-flex align-items-center justify-content-center">

                            <div class="col-4 text-center arrow-down-header">
                                <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"> <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'></button>
                            </div>

                        </div>
                    </div>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        <?php 
            endwhile;
        endif; 
        ?>
    </div>
</div>

<style>
.image-content .row {
    display: flex; /* Use flexbox for layout */
    flex-wrap: nowrap; /* Prevent wrapping */
    align-items: center; /* Center items vertically */
}

.header-content-slider {
    width: 100%; /* Ensure the slider takes full width */
}

.swiper-wrapper {
    display: flex; /* Use flexbox for layout */
}

.swiper-slide {
    display: flex; /* Ensure slides are flex containers */
    flex-direction: row; /* Keep items in a row */
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    width: 100%; /* Ensure each slide takes full width */
    box-sizing: border-box; /* Include padding in width */
}

.image-content {
    width: 100%; /* Ensure the section takes full width */
    padding: 0; /* Remove padding to fit within the slide */
}
</style>