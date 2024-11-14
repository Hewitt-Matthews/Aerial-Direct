<?php
$button = get_field('green_button');
?>
<section class="header-content-center page-header <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container-fluid">
        <div class="row align-items-center custom-height justify-content-center">
            <div class="col-12 col-md-6 vertical-middle text-center">
                <div class="">
                    <?php if (get_field('green_title')): ?>
                        <h1 class="weight-normal header-heading text-white">
                            <?php the_field('green_title'); ?>
                        </h1>
                    <?php endif; ?>
                    <?php if (get_field('green_subtitle')): ?>
                        <h3 class="weight-normal text-white"><?php the_field('green_subtitle', false, false); ?></h3>
                    <?php endif; ?>
                    <?php if (get_field('green_description')): ?>
                        <p><?php the_field('green_description', false, false); ?></p>
                    <?php endif; ?>
                    <?php if ($button): ?>
                        <a href="<?php echo $button['url']; ?>"><button class="btn btn-dark"><?php echo $button['title']; ?></button></a>
                    <?php endif; ?>            </div>
            </div>
            <?php if(!get_field('arrow_show')) :?>
            <div class="col-12 social-section">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="col-4 text-center arrow-down-header">
                        <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"> <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'></button></div>

                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>
















