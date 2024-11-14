<?php
$button = get_field('gradient_button');
$second_button = get_field('second_button');
if (get_field('gradient_background') === "yes") {
    $gradient = "bg-gradient-bottom";
} else {
    $gradient = "";
}
?>

<section class="features small-images <?php the_field('features_class'); ?> <?php echo $gradient; ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container">
    <div class="row justify-content-center row-lg-gap-90 row-md-gap-40">
        <?php
        if (have_rows('features')):
            while (have_rows('features')) : the_row();
                $button = get_sub_field('button');
                $second_button = get_sub_field('second_button');
                $random_num = rand(22, 556688554);
                $accordion_title = get_sub_field('title_acc');
                $accordion_content = get_sub_field('content_acc');
                $image_alt = get_sub_field('image_alt');
                ?>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="card h-100 d-flex flex-column">
                        <div class="card-header">
                            <img loading="lazy" class="image-fluid features-image" data-src="<?php echo the_sub_field('image') ?>" src="<?php echo the_sub_field('image') ?>" alt="<?php echo $image_alt['alt']; ?>"/>
                        </div>
                        <div class="card-body">
                            <h3 class="padding-top-20" style='font-size: <?php the_sub_field('title_ft'); ?>px!important;'><?php echo the_sub_field('title') ?></h3>

                                    <div class="accordion-wrapper padding-bottom-20">


                                        <button class="accordion d-flex align-items-center justify-content-center">
                                            <span class="text-yellow margin-right-15 no-wrap" style="font-size: 20px;">+</span>
                                            <span class="text-center no-wrap" style='font-size: <?php the_field('title_acc_ft'); ?>px!important;'><?php echo $accordion_title; ?></span> </button>
                                        <div class="panel text-left" style='font-size: <?php the_field('content_acc_ft'); ?>px!important;'>
                                            <p><?php echo $accordion_content; ?></p>
                                        </div>
                                    </div>

                            <?php if (get_sub_field('content')): ?>
                                <div style='font-size: <?php echo the_sub_field('content_ft'); ?>px!important;'>
                                    <p><?php echo the_sub_field('content'), false, false ?></p>
                                </div>
                            <?php endif; ?>

                        </div>
                        <div>
                            <div class="d-flex flex-column align-items-center">
                                <?php if ($button): ?>
                                    <a
                                            href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><button class="btn btn-yellow"><?php echo $button['title']; ?></button></a>

                                <?php endif; ?>

                                <?php if ($second_button): ?>
                                    <a
                                            href="<?php echo $second_button['url']; ?>" target="<?php echo $second_button['target']; ?>"><button class="btn btn-yellow margin-top-15"><?php echo $second_button['title']; ?></button></a>

                                <?php endif; ?>
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
</section>