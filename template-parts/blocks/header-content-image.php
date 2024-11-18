<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$top_padding = get_field('top_padding') ?: 100;
$bottom_padding = get_field('top_padding') ?: 100;
?>

<div class="header-content-slider">
    <?php if(have_rows('slider_slides')): 
        while(have_rows('slider_slides')): the_row();
            $image = get_sub_field('content_image');
            $title = get_sub_field('content_title');
            $subtitle = get_sub_field('content_subtitle');
            $description = get_sub_field('content_description');
            $alignment = get_sub_field('content_alignment');
    ?>
        <div>
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
                                    <?php echo nl2br($subtitle); ?>
                                </h3>
                                <div style='font-size: <?php the_sub_field('content_description_ft'); ?>px!important;'>
                                    <p><?php echo nl2br($description); ?></p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                <h1 class="weight-normal header-heading header-badge <?php the_sub_field('title_color'); ?>">
                                    <?php echo $title; ?>
                                </h1>
                                <h3 class="weight-normal <?php the_sub_field('subtitle_color'); ?>">
                                    <?php echo nl2br($subtitle); ?>
                                </h3>
                                <div style='font-size: <?php the_sub_field('content_description_ft'); ?>px!important;'>
                                    <p><?php echo nl2br($description); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0">
                                <img loading="lazy" 
                                    class="rounded header-image <?php the_sub_field('image_radius'); ?> <?php echo $glowing; ?>"
                                    src="<?php echo esc_url($image); ?>" 
                                    alt="<?php echo esc_attr($title); ?>"/>
                            </div>
                        <?php endif; ?>

                        <?php if(!get_field('arrow_show')) :?>
                            <div class="col-12 social-section order-2">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="col-4 text-center arrow-down-header">
                                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex">
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
            </section>
        </div>
    <?php 
        endwhile;
    endif; 
    ?>
</div>

<script>
jQuery(document).ready(function($){
    $('.header-content-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000
    });
});
</script> 