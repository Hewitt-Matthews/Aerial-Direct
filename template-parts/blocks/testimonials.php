<section class="container <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <?php
                         if (have_rows('testimonials')):
                             while (have_rows('testimonials')) : the_row();
                                 ?>
        <div class="col-12 text-center padding-50">
        <h3 class="text-yellow">”</h3>
            <div style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                <h3><?php the_sub_field('content') ?></h3>
            </div>
            <p style='font-size: <?php the_sub_field('name_ft'); ?>px!important;'><?php the_sub_field('name') ?></p>
            <p class="weight-normal" style='font-size: <?php the_sub_field('job_title_ft'); ?>px!important;'><?php the_sub_field('job_title') ?></p>
            <h3 class="text-yellow">”</h3>
        </div>
        <?php
                             endwhile;
                         endif;
        ?>
    </div>
</section>