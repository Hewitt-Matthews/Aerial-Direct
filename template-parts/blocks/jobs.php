<section id="vacancies" class="container jobs-section <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row row-gap-20">
        <?php
                 if (have_rows('jobs')):
                     while (have_rows('jobs')) : the_row();
                         $button = get_sub_field('button');
                         ?>
        <div class="col-6">
            <div class=" bg-dark-grey padding-50">
                <p class="text-yellow" style='font-size: <?php the_sub_field('job_title_ft'); ?>px!important;'><?php echo the_sub_field('job_title') ?></p>
                <h3 style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php echo the_sub_field('title') ?></h3>
                <hr style="background-color: #fff!important;">
                <?php if(get_sub_field('location')): ?>
                <p style='font-size: <?php the_sub_field('location_ft'); ?>px!important;'><strong>Location: </strong><?php echo the_sub_field('location') ?></p>
                <?php endif; ?>
                <?php if(get_sub_field('department')): ?>
                <p style='font-size: <?php the_sub_field('department_ft'); ?>px!important;'><strong>Department: </strong><?php echo the_sub_field('department') ?></p>
                <?php endif; ?>
                <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                <?php endif; ?>
                </div>
        </div>
        <?php
                     endwhile;
                 endif;
        ?>
    </div>
</section>