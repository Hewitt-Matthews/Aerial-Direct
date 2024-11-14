<?php
$button = get_field('button');
?>
<section class="bg-main-dark-blue <?php the_field('custom_class'); ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="container">
        <div class="row">
            <div class="col-12 vertical-middle <?php the_field('button_position'); ?>">
                <div class="">
                    <?php if ($button): ?>
                        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                            <button class="btn <?php the_field('button_color'); ?>"><?php echo $button['title']; ?></button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>