<div class="faq-with-icons container <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="text-center">
                <?php $image1_alt = get_sub_field('left_image_alt'); ?>
                <img loading="lazy" class="faq-icon rounded margin-v-20" src="<?php the_field('left_image'); ?>" alt="<?php echo $image1_alt['alt']; ?>"/>
                <h3 class="weight-normal <?php the_field('left_title_color'); ?>" style='font-size: <?php the_field('left_title_ft'); ?>px!important;'>
                    <?php the_field('left_title'); ?>
                </h3>
            </div>
            <?php
                 if (have_rows('faq_left')):
                     while (have_rows('faq_left')) : the_row();
                         $accordion_title = get_sub_field('title');
                         $accordion_content = get_sub_field('content');
                         ?>

            <div class="row">
                <div class="col-12">

                    <div class="accordion-wrapper padding-v-10">


                        <button class="accordion"><span class="text-yellow" style="font-size: 20px; font-size: <?php the_sub_field('title_ft'); ?>px!important;">+</span>
                            <?php echo $accordion_title; ?></button>
                        <div class="panel" style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                            <p><?php echo $accordion_content; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                     endwhile;
                 endif;
            ?>
        </div>
        <div class="col-12 col-lg-6">
            <div class="text-center">
                <?php $image2_alt = get_sub_field('right_image_alt'); ?>
                <img loading="lazy" class="faq-icon rounded margin-v-20" src="<?php the_field('right_image'); ?>" alt="<?php echo $image2_alt['alt']; ?>"/>
                <h3 class="weight-normal <?php the_field('right_title_color'); ?>" style='font-size: <?php the_field('left_title_ft'); ?>px!important;'>
                    <?php the_field('right_title'); ?>
                </h3>
            </div>
            <?php
                 if (have_rows('faq_right')):
                     while (have_rows('faq_right')) : the_row();
                         $accordion_title_right = get_sub_field('title');
                         $accordion_content_right = get_sub_field('content');
                         ?>

            <div class="row">
                <div class="col-12">

                    <div class="accordion-wrapper padding-v-10">


                        <button class="accordion"><span class="text-yellow" style="font-size: 20px; font-size: <?php the_sub_field('title_ft'); ?>px!important;">+</span>
                            <?php echo $accordion_title_right; ?></button>
                        <div class="panel" style='font-size: <?php the_sub_field('content_ft'); ?>px!important;'>
                            <p><?php echo $accordion_content_right; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                     endwhile;
                 endif;
            ?>
        </div>
    </div>
</div>