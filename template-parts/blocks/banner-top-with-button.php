<?php
$button = get_field('banner_button');
$image1_alt = get_sub_field('banner_image_alt');
$image2_alt = get_sub_field('banner_mobile_alt');
?>
<section class="<?php the_field('custom_class'); ?> banner-top <?php the_field('toggle_banner'); ?>" 
                            style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <img loading="lazy" class="banner-image d-block d-lg-none" src="<?php the_field('banner_mobile'); ?>" alt="<?php echo $image2_alt['alt']; ?>" />
    <img loading="lazy" class="banner-image d-none d-lg-block" src="<?php the_field('banner_image'); ?>" alt="<?php echo $image1_alt['alt']; ?>" />
    <?php
    $link = get_field('banner_link');
    if( $link ): ?>
        <a class="block-link" href="<?php echo esc_url( $link ); ?>"></a>
    <?php endif; ?>
    <?php if($button): ?>
    <div class="custom-container">
        <a class="banner-button <?php the_field('button_alignment'); ?> " href="<?php echo $button['url']; ?>"><button class="btn <?php the_field('button_color'); ?>"><?php echo $button['title']; ?></button></a>
    </div>
    <?php endif; ?>
</section>