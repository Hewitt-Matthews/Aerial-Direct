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
                                <h1 class="weight-normal header-heading header-badge text-yellow">
                                    <?php echo esc_html($slide['content_title']); ?>
                                </h1>
                                <h3 class="weight-normal text-white">
                                    <br>
                                    <p style="text-align: center">
                                        <?php echo wp_kses_post($slide['content_subtitle']); ?>
                                        <?php echo wp_kses_post($slide['content_description']); ?>
                                    </p>
                                    
                                    <!-- Trustpilot Widget -->
                                    <div class="trustpilot-widget" 
                                         data-locale="en-GB" 
                                         data-template-id="5406e65db0d04a09e042d5fc" 
                                         data-businessunit-id="5550b8f20000ff00057f57d9" 
                                         data-style-height="28px" 
                                         data-style-width="100%" 
                                         data-theme="dark" 
                                         style="position: relative;">
                                        <iframe title="Customer reviews powered by Trustpilot" 
                                                loading="auto" 
                                                src="https://widget.trustpilot.com/trustboxes/5406e65db0d04a09e042d5fc/index.html?templateId=5406e65db0d04a09e042d5fc&businessunitId=5550b8f20000ff00057f57d9#locale=en-GB&styleHeight=28px&styleWidth=100%25&theme=dark" 
                                                style="position: relative; height: 28px; width: 100%; border-style: none; display: block; overflow: hidden;">
                                        </iframe>
                                    </div>
                                </h3>
                            </div>
                        <?php else: ?>
                            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                                <h1 class="weight-normal header-heading header-badge text-yellow">
                                    <?php echo esc_html($slide['content_title']); ?>
                                </h1>
                                <h3 class="weight-normal text-white">
                                    <br>
                                
                                        <?php echo wp_kses_post($slide['content_subtitle']); ?>
                                        <br>
                                        <?php echo wp_kses_post($slide['content_description']); ?>
                                        <br>
                                
                                    
                                    <!-- Trustpilot Widget -->
                                    <div class="trustpilot-widget" 
                                         data-locale="en-GB" 
                                         data-template-id="5406e65db0d04a09e042d5fc" 
                                         data-businessunit-id="5550b8f20000ff00057f57d9" 
                                         data-style-height="28px" 
                                         data-style-width="100%" 
                                         data-theme="dark" 
                                         style="position: relative;">
                                        <iframe title="Customer reviews powered by Trustpilot" 
                                                loading="auto" 
                                                src="https://widget.trustpilot.com/trustboxes/5406e65db0d04a09e042d5fc/index.html?templateId=5406e65db0d04a09e042d5fc&businessunitId=5550b8f20000ff00057f57d9#locale=en-GB&styleHeight=28px&styleWidth=100%25&theme=dark" 
                                                style="position: relative; height: 28px; width: 100%; border-style: none; display: block; overflow: hidden;">
                                        </iframe>
                                    </div>
                                </h3>
                            </div>
                            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0">
                                <img loading="lazy" 
                                     class="rounded header-image <?php echo esc_attr($slide['image_radius']); ?> <?php echo $glowing; ?>"
                                     src="<?php echo esc_url($slide['content_image']); ?>" 
                                     alt="<?php echo esc_attr($slide['content_image_alt']); ?>"/>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php 
            endforeach;
        endif; 
        ?>
    </div>

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
</section>

<style>
section.image-content.page-header.mobile-hide.swiper.header-content-slider .row {
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider {
    width: 100% !important;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .swiper-wrapper {
    display: flex !important;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .swiper-slide {
    display: flex !important;
    flex-direction: row !important;
    justify-content: center !important;
    align-items: center !important;
    width: 100% !important;
    box-sizing: border-box !important;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider {
    width: 100% !important;
    padding: 0 !important;
}

@media (max-width: 991px) {
    section.image-content.page-header.mobile-hide.swiper.header-content-slider .swiper-slide .container-fluid .row {
        display: flex !important;
        flex-direction: column !important;
    }    
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .social-section {
    position: absolute;
    bottom: 100px;
    left: 0;
    right: 0;
    z-index: 10;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .arrow-down-header img {
    width: 40px;
    height: auto;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .arrow-down-header button {
    transition: transform 0.3s ease;
}

section.image-content.page-header.mobile-hide.swiper.header-content-slider .arrow-down-header button:hover {
    transform: translateY(5px);
}
</style>