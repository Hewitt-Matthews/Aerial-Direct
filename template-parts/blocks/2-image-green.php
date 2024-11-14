<?php
$button = get_field('2_green_button');
if(get_field('2_glowing_border') === "yes") {
    $glowing = "glowing-border";
} else {
    $glowing = "";
}
$image1_alt = the_field('2_first_image_alt');
$image2_alt = the_field('2_second_image_alt');
?>
<section class="image-content-green text-center <?php the_field('custom_class'); ?>"style='padding-top: <?php the_field('pt'); ?>px!important; padding-bottom: <?php the_field('pb'); ?>px!important; padding-right: <?php the_field('pr'); ?>px!important; padding-left: <?php the_field('pl'); ?>px!important;'>
    <div class="padding-v-50 container">
    <div class="row">
        <div class="col-12 col-md-4">
        <img loading="lazy" class="image-fluid lozad <?php echo $glowing; ?>" data-src="<?php the_field('2_first_image'); ?>" src="<?php the_field('2_first_image'); ?>" alt="<?php echo $image1_alt['alt']; ?>" />
        </div>
        <div class="col-12 col-md-4 vertical-middle text-center">
            <div class="">
            <h1 class="weight-normal <?php the_field('2_title_color'); ?>" style='font-size: <?php the_field('2_green_title_ft'); ?>px!important;'>
                <?php the_field('2_green_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('2_subtitle_color'); ?>" style='font-size: <?php the_field('2_green_subtitle_ft'); ?>px!important;'><?php the_field('2_green_subtitle'); ?></h3>
            <p class="<?php the_field('2_description_color'); ?>" style='font-size: <?php the_field('2_green_description_ft'); ?>px!important;'><?php the_field('2_green_description'); ?></p>
            <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>"><button class="btn btn-dark"><?php echo $button['title']; ?></button></a>
            <?php endif; ?>            </div>
        </div>
        <div class="col-12 col-md-4">
        <img loading="lazy" class="image-fluid lozad <?php echo $glowing; ?>" data-src="<?php the_field('2_second_image'); ?>" src="<?php the_field('2_second_image'); ?>" alt="<?php echo $image2_alt['alt']; ?>" />
        </div>
    </div>
    </div>
</section>