<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$top_padding = get_field('top_padding') ?: 100;
$bottom_padding = get_field('top_padding') ?: 100;
$img_alt = get_field('content_image_alt');
?>
<section class="image-content page-header mobile-hide" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row align-items-center margin-top-<?php echo $top_padding; ?> margin-bottom-<?php echo $bottom_padding; ?>">
            <?php if (get_field('content_alignment') === "left"): ?>
                <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-right-100 order-0"><img loading="lazy"
                            class="rounded header-image <?php the_field('image_radius'); ?> <?php echo $glowing; ?>"
                            src="<?php the_field('content_image'); ?>" alt="<?php echo $img_alt['alt'] ?>"/></div>
                <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal header-heading header-badge <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>
                    <h3 class="weight-normal <?php the_field('subtitle_color'); ?>"><?php the_field('content_subtitle', false, false); ?>
                    </h3>
                    <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                        <p><?php the_field('content_description', false, false); ?></p>
                    </div>
                    
                    <?php
                    if (have_rows('header_content_button')):
                        while (have_rows('header_content_button')) : the_row();
                            $button = get_sub_field('button');
                            ?>


                            <a target="<?php echo $button['target']; ?>" href="<?php echo $button['url']; ?>">
                                <button class="btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center"
                                style='
                                padding-top: <?php the_sub_field('padding_top'); ?>px!important; 
                                padding-bottom: <?php the_sub_field('padding_bottom'); ?>px!important;
                                padding-right: <?php the_sub_field('padding_right'); ?>px!important;
                                padding-left: <?php the_sub_field('padding_left'); ?>px!important;
                                margin-bottom: <?php the_sub_field('margin_out_bottom'); ?>px!important;
                                margin-top: <?php the_sub_field('margin_out_top'); ?>px!important;
                                font-size: <?php the_field('title_ft'); ?>px!important;
                                '> 
                                <?php echo $button['title']; ?>
                                    <!-- <br> -->
                                    <span
                                            class="btn header-btn-sub" style='font-size: <?php the_field('button_subtitle_ft'); ?>px!important;'><?php the_sub_field('button_subtitle'); ?></span>
                                </button>
                            </a>

                        <?php
                        endwhile;
                    endif;
                    ?>
            </div>
        <?php else: ?>
            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal header-heading header-badge <?php the_field('title_color'); ?>">
                        <?php if(get_field('show_badge')): ?>
                            <span class="add-badge"></span>
                        <?php endif; ?>
                        <?php the_field('content_title'); ?>
                    </h1>

                    <?php if (get_field('content_subtitle')): ?>
                        <h3 class="weight-normal <?php the_field('subtitle_color'); ?>"><?php the_field('content_subtitle', false, false); ?>
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
                                <button class="btn btn-header btn-light margin-right-5 margin-top-20 text-center align-items-center"
                                style='
                                padding-top: <?php the_sub_field('padding_top'); ?>px!important; 
                                padding-bottom: <?php the_sub_field('padding_bottom'); ?>px!important;
                                padding-right: <?php the_sub_field('padding_right'); ?>px!important;
                                padding-left: <?php the_sub_field('padding_left'); ?>px!important;
                                margin-bottom: <?php the_sub_field('margin_out_bottom'); ?>px!important;
                                margin-top: <?php the_sub_field('margin_out_top'); ?>px!important;
                                '> 
                                <?php echo $button['title']; ?>
                                    <!-- <br> -->
                                    <span
                                            class="btn header-btn-sub"><?php the_sub_field('button_subtitle'); ?></span>
                                </button>
                            </a>

                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0"><img loading="lazy"
                            class="rounded header-image <?php the_field('image_radius'); ?> <?php echo $glowing; ?>"
                            src="<?php the_field('content_image'); ?>" alt="<?php echo $img_alt['alt'] ?>"/>
                </div>

            <?php endif; ?>
           <?php if(!get_field('arrow_show')) :?>
            <div class="col-12 social-section order-2">

                <div class="d-flex align-items-center justify-content-center">

                    <div class="col-4 text-center arrow-down-header">
                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"> <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'></button>
                    </div>

                </div>
            </div>


<?php  endif; ?>




        </div>
    </div>
</section>