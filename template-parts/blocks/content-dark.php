<?php
$button = get_field('green_button');
?>
<section class="bg-main-dark-blue <?php the_field('custom_class'); ?>">
    <div class="container padding-v-50">
    <div class="row">
        <div class="col-12 vertical-middle text-center">
            <div class="">
            <?php if(get_field('green_title')): ?>
            <h1 class="weight-normal">
                <?php the_field('green_title'); ?>
        </h1>
        <?php endif; ?>
        <?php if(get_field('green_subtitle')): ?>
            <h3 class="weight-normal margin-bottom-20"><?php the_field('green_subtitle', false, false); ?></h3>
            <?php endif; ?>
            <?php if(get_field('green_description')): ?>
            <p><?php the_field('green_description', false, false); ?></p>
            <?php endif; ?>
            <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>"><button class="btn btn-yellow"><?php echo $button['title']; ?></button></a>
            <?php endif; ?>            </div>
        </div>

    </div>
    </div>
</section>