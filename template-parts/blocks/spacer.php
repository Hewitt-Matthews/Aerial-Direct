<?php
$space = get_field('space') ?: 150;
$space_tablet = get_field('space_tablet') ?: 100;
$space_mobile = get_field('space_mobile') ?: 80;
?>
<section class="spacer container-fluid" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row">
        <div class="margin-top-override margin-top-<?php echo $space_mobile; ?> margin-md-top-<?php echo $space_tablet; ?> margin-lg-top-<?php echo $space; ?>">
</div>
    </div>
</section>
