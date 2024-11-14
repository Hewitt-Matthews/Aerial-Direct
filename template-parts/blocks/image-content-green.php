<?php
$button = get_field('content_button');
if(get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$img_alt = get_field('content_image_alt');
?>
<section class="<?php the_field('image_content'); ?> alignment-right-left <?php the_field('image_shape'); ?> <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container">
    <div class="row">
        <?php if(get_field('content_alignment') === "left"): ?>

        <div class="col-12 col-lg-6 vertical-middle text-center padding-30 order-0 order-md-0 order-lg-0"><img loading="lazy" class="image-fluid rounded lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt="<?php echo $img_alt['alt'] ?>"/></div>
        <div class="col-12 col-lg-6 padding-xs-v-30 padding-md-v-90 vertical-middle order-1 order-md-1 order-lg-1">
            <div class="image-green-body">
            <h1 class="weight-medium <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                <p class="<?php the_field('description_color'); ?>"><?php the_field('content_description', false, false); ?></p>
            </div>

            </div>
            <div class="text-center text-md-left">
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>"><button class="btn btn-dark margin-md-top-15"><?php echo $button['title']; ?></button></a>
                <?php endif; ?>
            </div>
        </div>

        <?php else: ?>
        <div class="col-12 col-lg-6 padding-xs-v-30 padding-md-v-90 vertical-middle order-1 order-md-1 order-lg-0">
        <div class="green-image-body">
            <h1 class="weight-medium <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                <span class="<?php the_field('description_color'); ?>"><?php the_field('content_description', false, false); ?></span>
            </div>

        </div>
            <div class="text-center text-md-left">
                <?php if($button): ?>
                    <a href="<?php echo $button['url']; ?>"><button class="btn btn-dark margin-md-top-15"><?php echo $button['title']; ?></button></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-lg-6 vertical-middle text-center padding-30 order-0 order-md-0 order-lg-1"><img loading="lazy" class="image-fluid rounded lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php the_field('content_image_alt'); ?>'/></div>

        <?php endif; ?>
    </div>
    </div>
</section>