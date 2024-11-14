<?php

if (get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
?>
<section class="image-content page-header mobile-show" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
    <div class="row align-items-center custom-height" style="background: url(<?php the_field('content_image'); ?>);">
        <?php if (get_field('content_alignment') === "left"): ?>
            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-right-100 order-0"></div>
            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>
                    <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                    </h3>

                    <?php if ($button): ?>
                        <a href="<?php echo $button['url']; ?>"><button class="btn btn-yellow"><?php echo $button['title']; ?></button></a>
                    <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="col-12 col-lg-7 col-xl-7 order-lg-0 padding-v-10 order-1">
                    <h1 class="weight-normal header-heading <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                        <?php the_field('content_title'); ?>
                    </h1>

                    <?php if (get_field('content_subtitle')): ?>
                        <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle'); ?>
                        </h3>
                    <?php endif; ?>

                    <?php
                    if (have_rows('header_content_button')):
                        while (have_rows('header_content_button')) : the_row();
                            $button = get_sub_field('button');
                            ?>


                            <a
                               href="<?php echo $button['url']; ?>"><button class="btn btn-header btn-light text-center margin-v-10"><?php echo $button['title']; ?><br><span
                                            class="header-btn-sub" style='font-size: <?php the_sub_field('button_subtitle_ft'); ?>px!important;'><?php the_sub_field('button_subtitle'); ?></span></button></a>

                        <?php
                        endwhile;
                    endif;
                    ?>
            </div>
            <div class="col-12 col-lg-5 col-xl-5 padding-v-10 text-center padding-md-left-100 order-0">
            </div>

        <?php endif; ?>

    </div>
</div>
</section>