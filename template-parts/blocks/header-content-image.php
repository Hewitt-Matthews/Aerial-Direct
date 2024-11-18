<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$top_padding = get_field('top_padding') ?: 100;
$bottom_padding = get_field('top_padding') ?: 100;
?>

<section class="image-content page-header mobile-hide swiper header-content-slider" style='
    padding-top: <?php the_field('pt'); ?>px!important; 
    padding-bottom: <?php the_field('pb'); ?>px!important;
    padding-right: <?php the_field('pr'); ?>px!important;
    padding-left: <?php the_field('pl'); ?>px!important;
'>
    <div class="swiper-wrapper">
        <?php 
        $slides = get_field('slider_slides');
        if($slides && is_array($slides)): 
            foreach($slides as $slide): 
        ?>
            <div class="swiper-slide">
                <div class="container-fluid">
                    <div class="row align-items-center margin-top-<?php echo $top_padding; ?> margin-bottom-<?php echo $bottom_padding; ?>">
                        <?php if ($slide['content_alignment'] === "left"): ?>
                            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-right-100 order-0">
                                <img loading="lazy" 
                                     class="rounded header-image <?php echo esc_attr($slide['image_radius']); ?> <?php echo $glowing; ?>"
                                     src="<?php echo esc_url($slide['content_image']); ?>" 
                                     alt="<?php echo esc_attr($slide['content_image_alt']); ?>"/>
                            </div>
                            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                <h1 class="weight-normal header-heading header-badge <?php echo esc_attr($slide['title_color']); ?>">
                                    <?php echo esc_html($slide['content_title']); ?>
                                </h1>
                                <h3 class="weight-normal <?php echo esc_attr($slide['subtitle_color']); ?>">
                                    <?php echo wp_kses_post($slide['content_subtitle']); ?>
                                </h3>
                                <?php if (!empty($slide['content_description'])): ?>
                                    <div style='font-size: <?php echo esc_attr($slide['content_description_ft']); ?>px!important;'>
                                        <?php echo wp_kses_post($slide['content_description']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                <h1 class="weight-normal header-heading header-badge <?php echo esc_attr($slide['title_color']); ?>">
                                    <?php echo esc_html($slide['content_title']); ?>
                                </h1>
                                <h3 class="weight-normal <?php echo esc_attr($slide['subtitle_color']); ?>">
                                    <?php echo wp_kses_post($slide['content_subtitle']); ?>
                                </h3>
                                <?php if (!empty($slide['content_description'])): ?>
                                    <div style='font-size: <?php echo esc_attr($slide['content_description_ft']); ?>px!important;'>
                                        <?php echo wp_kses_post($slide['content_description']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0">
                                <img loading="lazy" 
                                     class="rounded header-image <?php echo esc_attr($slide['image_radius']); ?> <?php echo $glowing; ?>"
                                     src="<?php echo esc_url($slide['content_image']); ?>" 
                                     alt="<?php echo esc_attr($slide['content_image_alt']); ?>"/>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if(!get_field('arrow_show')) :?>
                <div class="col-12 social-section order-2">
                    <div class="d-none d-lg-flex align-items-center justify-content-center">
                        <div class="col-4 text-center arrow-down-header">
                            <button class="btn bg-transparent border-0"> 
                                <img loading="lazy" decoding="async" 
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" 
                                    alt='arrow lime colour'>
                            </button>
                        </div>
                    </div>
                </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php 
            endforeach;
        endif; 
        ?>
    </div>
</section>

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