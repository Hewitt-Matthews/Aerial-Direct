<?php
$button = get_field('green_button');
?>
<section class="image-content-green <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container padding-v-50">
    <div class="row">
        <div class="col-12 vertical-middle text-center">
            <div class="">
            <h1 class="weight-medium <?php the_field('title_color'); ?>" style='font-size: <?php the_field('green_title_ft'); ?>px!important;'>
                <?php the_field('green_title'); ?>
        </h1>
            <h3 class="weight-normal <?php the_field('subtitle_color'); ?>" style='font-size: <?php the_field('green_subtitle_ft'); ?>px!important;'><?php the_field('green_subtitle', false, false); ?></h3>
            <p class="<?php the_field('description_color'); ?>" style='font-size: <?php the_field('green_description_ft'); ?>px!important;'><?php the_field('green_description', false, false); ?></p>
            <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>"><button class="btn btn-dark"><?php echo $button['title']; ?></button></a>
            <?php endif; ?>            </div>
        </div>

    </div>
    </div>
</section>