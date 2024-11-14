<!-- container-fluid -->
<section class="container-fluid <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <div class="col-12 text-center margin-bottom-40 margin-md-bottom-80">
            <h2 style='font-size: <?php the_field('why_title_ft'); ?>px!important;'><?php echo the_field('why_title') ?></h2>
            <h3 style='font-size: <?php the_field('why_subtitle_ft'); ?>px!important;'><?php echo the_field('why_subtitle') ?></h3>
        </div>
    </div>
    <div class="row row-lg-gap-90 row-md-gap-40">
        <?php
        if (have_rows('why-aerial')):
            while (have_rows('why-aerial')) : the_row();
            $link = get_sub_field('link');
            $image_alt = get_sub_field('image_alt');
                ?>

                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="padding-h-15 padding-md-h-30 padding-lg-h-30">
                        <img loading="lazy" class="margin-bottom-20" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
                        <?php if($link): ?>
                            <h3><a href="<?php echo $link['url']; ?>" style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php the_sub_field('title') ?></a></h3>
                        <?php else: ?>
                            <h3 style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php echo the_sub_field('title') ?></h3>
                        <?php endif; ?>
                        <div style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                            <p><?php echo the_sub_field('content') ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>

    </div>
</section>