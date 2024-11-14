<section class="container <?php the_field('features_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <div class="col-12 text-center margin-bottom-40">
            <h1 style='font-size: <?php the_field('feature_title_ft'); ?>px!important;'><?php echo the_field('feature_title') ?></h1>
            <h3 style='font-size: <?php the_field('feature_subtitle_ft'); ?>px!important;'><?php echo the_field('feature_subtitle') ?></h3>
            <p style='font-size: <?php the_field('feature_content_ft'); ?>px!important;'><?php echo the_field('feature_content') ?></p>
        </div>
        <?php
$count = 0;
$feature_aerial = get_field('feature_aerial');
if (is_array($feature_aerial)) {
    
  $count = count($feature_aerial);
}

        if($count === 3){
            $column = 'col-lg-4 col-md-6 col-6';
        }else{
            $column = 'col-lg-3 col-md-6 col-6';
        }
                 if (have_rows('feature_aerial')):
                     while (have_rows('feature_aerial')) : the_row();
                         $button = get_sub_field('button');
                         $image_alt = get_sub_field('image_alt');
                         ?>
        <div class="<?php echo $column; ?> text-center margin-bottom-30">
            <div class="h-100 d-flex-column">

            
            <img loading="lazy" class="image-fluid margin-bottom-20 lozad" data-src="<?php echo the_sub_field('image') ?>" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
            <?php if(get_sub_field('title')): ?>
            <h3 style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php the_sub_field('title'); ?></h3>
            <?php endif; ?>
            <?php if(get_sub_field('content')): ?>
                <div style='font-size: <?php echo the_sub_field('content_ft'); ?>px!important;'>
                    <p><?php the_sub_field('content'); ?></p>
                </div>
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