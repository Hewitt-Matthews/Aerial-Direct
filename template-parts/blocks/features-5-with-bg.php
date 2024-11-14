<section class="features container <?php the_field('features_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row justify-content-center row-gap-50">
        <?php
        if (have_rows('features')):
            while (have_rows('features')) : the_row();
                $button = get_sub_field('button');
                $image_alt = get_sub_field('image_alt');
                ?>
                <div class="col-12 col-md-6 col-lg-4 text-center">
                    <div class="card padding-50 bg-dark-grey rounded-2 h-100 d-flex flex-column">
                        <div class="card-header padding-bottom-40">
                            <img loading="lazy" class="image-fluid features-image lozad"
                                 data-src="<?php echo the_sub_field('image') ?>" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
                        </div>
                        <div class="card-body padding-h-20">
                            <h3 class="padding-top-20"><?php echo the_sub_field('title') ?></h3>
                            <?php if (get_sub_field('content')): ?>
                                <p><?php echo the_sub_field('content'), false, false ?></p>

                            <?php endif; ?>
                        </div>
                        <div class="margin-top-auto">
                            <?php if ($button): ?>
                                <a href="<?php echo $button['url']; ?>">
                                    <button class="btn btn-yellow margin-top-30"><?php echo $button['title']; ?></button>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</section>