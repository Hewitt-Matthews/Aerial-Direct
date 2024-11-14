<!-- container-fluid -->
<section class="pricing container custom-container <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <?php
        if (have_rows('pricing')):
            while (have_rows('pricing')) : the_row();
                $button = get_sub_field('button');
                $image_alt = get_sub_field('image_alt');
                ?>
                <div class="col-12 col-lg-4 text-center padding-10">

                    <div class="h-100 d-flex-column bg-dark-grey padding-bottom-20 rounded">
                        <div class="bg-yellow-pricing padding-10 text-grey <?php the_sub_field('best_value_toggle') ?>">
                                 Best Value
                             </div>
                        <div class="image-content-green rounded padding-20">
                            <p class="text-grey" style='font-size: <?php the_sub_field('headline_ft'); ?>px!important;'><?php echo the_sub_field('headline') ?></p>
                            <img loading="lazy" class="image-fluid features-image image-small-mobile lozad"
                                 data-src="<?php echo the_sub_field('image') ?>" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
                            <h3 class="text-grey margin-top-15" style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php echo the_sub_field('title') ?></h3>
                            <?php if (get_sub_field('price')): ?>
                                <h3 class="text-grey font-large margin-v-20" style='font-size: <?php the_sub_field('price_ft'); ?>px!important;'>
                                    <sup>From</sup><?php echo the_sub_field('price') ?>
                                </h3>
                            <?php endif; ?>
                            <?php if (get_sub_field('content')): ?>
                                <div class="text-grey margin-v-20" style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                                    <p><?php echo the_sub_field('content') ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="padding-20">
                            <h4 class="margin-bottom-10 margin-top-15" style='font-size: <?php the_sub_field('pricing_title_ft'); ?>px!important;'><?php the_sub_field('pricing_title') ?></h4>
                            <div class="padding-20">
                                <div class="row">
                                    <?php
                                    if (have_rows('pricing_features')):

                                        while (have_rows('pricing_features')) : the_row();
                                            ?>

                                            <div class="col-2"><img class=""
                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt='checks'>
                                            </div>
                                            <p class="col-10 text-left" style='font-size: <?php the_sub_field('item_ft'); ?>px!important;'><?php the_sub_field('item') ?></p>

                                        <?php
                                        endwhile;
                                    endif;

                                    ?>
                                </div>

                            </div>

                        </div>
                        <div class="margin-top-auto padding-bottom-30">
                            <?php if ($button): ?>
                                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                                    <button class="btn btn-yellow"><?php echo $button['title']; ?></button>
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