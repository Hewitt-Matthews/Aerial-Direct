<section class="contact-us-header page-header" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row justify-content-center custom-height ">

            <div class="col-12 col-lg-7 col-xl-7 d-flex flex-column align-items-center justify-content-end order-lg-0 padding-v-10 text-center margin-top-100">
                <h1 class="weight-normal header-heading text-white <?php the_field('title_color'); ?>">
                    <?php the_field('content_title'); ?>
                </h1>
                <h3 class="weight-normal <?php the_field('subtitle_color'); ?>"><?php the_field('content_subtitle'); ?>
                </h3>
                <div style='font-size: <?php the_field('content_description_ft'); ?>px!important;'>
                    <p class="margin-v-30"><?php the_field('content_description', false, false); ?></p>
                </div>
            </div>

            <div class="col-12 d-flex margin-bottom-40 login-options-wrap">
                <?php
                if (have_rows('login_types')):
                    while (have_rows('login_types')) : the_row();
                        $button = get_sub_field('url');
                        $image_alt = get_sub_field('image_alt');
                        ?>
                        <div class="col-6 col-md-6 col-lg-3 text-center margin-bottom-30">
                            <div class="card">
                                <?php if (get_sub_field('title')): ?>
                                    <div class="card-header">
                                        <h3><?php the_sub_field('title'); ?></h3>

                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <img loading="lazy" decoding="async" class="img-set-height margin-v-10 margin-lg-v-30"
                                         src="<?php the_sub_field('image'); ?>" alt="<?php echo $image_alt['alt']; ?>">
                                </div>
                                <div>
                                    <?php if (get_sub_field('button_option') === "live_chat"): ?>
                                        <button type="button" class="btn btn-yellow margin-top-15 custom-live-chat-button">
                                            <?php echo $button['title']; ?>
                                        </button>
                                    <?php else: ?>
                                        <a href="<?php echo $button['url']; ?>">
                                            <button class="btn btn-yellow margin-top-15"><?php echo $button['title']; ?></button>
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
           <?php if(!get_field('arrow_show')) :?>
            <div class="col-12 social-section">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="col-4 text-center arrow-down-header">
                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"><img loading="lazy" decoding="async"
                                                                                                 src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'>
                        </button>
                    </div>

                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>