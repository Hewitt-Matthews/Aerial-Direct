<section class="container-fluid social-section padding-h-50 <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row align-items-center justify-content-between">
        <div class="col-6 d-flex social-buttons">
            <a target="_blank" href="<?php the_field('facebook', 'options'); ?>">Facebook</a>
            <img loading="lazy" class="padding-h-20 h-30" width="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt='a dot'>
            <a target="_blank" href="<?php the_field('linkedin', 'options'); ?>">LinkedIn</a>
            <img loading="lazy" class="padding-h-20 h-30" width="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.svg" alt='a dot'>
            <a target="_blank" href="<?php the_field('twitter', 'options'); ?>">Twitter</a>

        </div>
        <div class="col-6 text-right">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/live-chat.svg" alt='live-chat'>
        </div>
    </div>
</section>