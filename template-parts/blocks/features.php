<section class="features container <?php the_field('features_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row justify-content-center">
    <?php
                 if (have_rows('features')):
                     while (have_rows('features')) : the_row();
                     $button = get_sub_field('button');
                     $image_alt = get_sub_field('image_alt');
                         ?>
        <div class="col-12 col-lg-10 col-xl-8 text-center padding-v-10">
        <div class="h-100 d-flex-column">
        <img loading="lazy" class="image-fluid features-image margin-bottom-20 lozad" data-src="<?php echo the_sub_field('image') ?>" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
        <h3 style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php echo the_sub_field('title') ?></h3>
        <?php if(get_sub_field('content')): ?>
        <p style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'><?php echo the_sub_field('content') ?></p>
        <?php endif; ?>
        <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>"><button class="btn btn-yellow"><?php echo $button['title']; ?></button></a>
            <?php endif; ?> 
        </div>
        </div>
        <?php
                     endwhile;
                 endif;
    ?>
    </div>
</section>