<?php
$button = get_field('content_button');
if(get_field('glowing_border') === "yes") {
    $glowing = "glowing-border";
}else{
    $glowing = "";
}
$img_alt = get_field('content_image_alt');
?>
<section class="image-content container alignment-right-left <?php the_field('custom_class'); ?> <?php the_field('image_shape'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <?php if(get_field('content_alignment') === "left"): ?>
        <div class="col-md-12 col-lg-6 vertical-middle text-center padding-xs-30 padding-md-right-90"><img loading="lazy" class="image-fluid rounded lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt']; ?>'/></div>
        <div class="col-md-12 col-lg-6 vertical-middle">
            <div>
            <h1 class="weight-normal <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                <p><?php the_field('content_description', false, false); ?></p>
            </div>
            <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>"><button class="btn btn-yellow"><?php echo $button['title']; ?></button></a>
            <?php endif; ?>            </div>
        </div>
        <?php else: ?>
        <div class="col-md-12 col-lg-6 vertical-middle">
        <div>
            <h1 class="weight-normal <?php the_field('title_color'); ?>" style='font-size: <?php the_field('content_title_ft'); ?>px!important;'>
                <?php the_field('content_title'); ?>
        </h1>
        <?php if(get_field('content_subtitle')): ?>
            <h3 class="weight-normal margin-bottom-25 <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('content_subtitle_ft'); ?>px!important;'><?php the_field('content_subtitle', false, false); ?></h3>
            <?php endif; ?>
            <?php if(get_field('content_description')): ?>
                <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                    <p><?php the_field('content_description', false, false); ?></p>
                </div>
            <?php endif; ?>
            <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>"><button class="btn btn-yellow margin-top-15"><?php echo $button['title']; ?></button></a>
            <?php endif; ?>
        </div>
        </div>
        <div class="col-md-12 col-lg-6 col-md-12 vertical-middle text-center padding-xs-30 padding-md-left-90"><img loading="lazy" class="image-fluid rounded lozad <?php echo $glowing; ?> image-left-right" data-src="<?php the_field('content_image'); ?>" src="<?php the_field('content_image'); ?>" alt='<?php echo $img_alt['alt'] ?>'/></div>

        <?php endif; ?>
    </div>
</section>