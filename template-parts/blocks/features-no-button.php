<?php
$button = get_field('gradient_button');
$second_button = get_field('second_button');
if (get_field('gradient_background') === "yes") {
    $gradient = "bg-gradient-bottom";
} else {
    $gradient = "";
}
?>
<section class="features features-no-button small-images <?php the_field('features_class'); ?> <?php echo $gradient; ?>">
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <div class="row justify-content-center row-lg-gap-90 row-md-gap-40">
            <?php
            if (have_rows('features')):
                while (have_rows('features')) : the_row();
                    ?>

                    <div class="col-12 col-md-6 col-xl-3 text-center">
                        <div class="card">
                        <img loading="lazy" class="card-img-top" src="<?php echo the_sub_field('image') ?>">
                        <div class="card-body">
                            <h3 class="padding-top-20"><?php echo the_sub_field('title') ?></h3>
                        </div>
                        <div class="card-footer">
                            <?php if (get_sub_field('content')): ?>
                                <p><?php echo the_sub_field('content', false, false) ?></p>
                            <?php endif; ?>
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