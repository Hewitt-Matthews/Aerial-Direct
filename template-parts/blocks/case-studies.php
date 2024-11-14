<?php
// Load values and assign defaults.
$number = get_field('post_number') ?: 3;
// Define args
$args = array(
    'post_type' => 'case_studies',
    'orderby' => 'date',
    'order'   => 'DESC',
    'posts_per_page' => $number,
);

// Execute query
$posts = new WP_Query($args);

?>
<?php
$button = get_field('gradient_button');
if(get_field('gradient_background') === "yes") {
    $gradient = "bg-gradient-bottom";
}else{
    $gradient = "";
}
?>
<div class="case-studies <?php the_field('custom_class'); ?> <?php echo $gradient; ?>" style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <section class="container">
        <div class="row row-gap-50">
            <div class="col-12 text-center margin-v-40">
                <h1><?php the_field('study_title') ?></h1>
                <p class="padding-xs-h-40 padding-md-h-160"><?php the_field('study_subtitle') ?></p>
            </div>
            <?php
 while ($posts->have_posts()) : $posts->the_post();
     /* grab the url for the full size featured image */
     $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
     $rand_num = rand(0, 25222233222);
     ?>
            <div class="col-12 padding-h-10" style="position:relative">
		<div class="marker" style="position:absolute;pointer-events:none;top:-120px;" id="<?php echo get_post_field('post_name',get_post()); ?>"></div>
                <div class="bg-dark-grey case-study-item border-radius-right">
                    <div class="row">
                        <div class="col-12 col-md-4 padding-h-0">
                            <img loading="lazy" class="image-fluid margin-bottom-10 lozad" data-src="<?php echo $featured_img_url; ?>" src="<?php echo $featured_img_url; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"/>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="padding-20">
                                <p class="text-yellow">The Client</p>
                                <p><?php the_date(); ?></p>
                                <h3><?php the_field('company_name', get_the_id()); ?></h3>
                                <div style='font-size: <?php the_field('company_description_ft', get_the_id()); ?>px!important;'>
                                    <p><?php the_field('client_description', get_the_id()); ?></p>
                                </div>
                                <div class="text-center"><a class="show-more more-<?php echo $rand_num; ?>" data-more="<?php echo $rand_num; ?>" href="javascript:;">Read More</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="show-<?php echo $rand_num; ?>" style="display: none">
                        <div class="row">
                            <div
                                class="col-12  col-md-4 padding-h-0 text-center  padding-v-20 padding-h-40 bg-light-grey">
                                <h3 class="text-yellow">”</h3>
                                <div style='font-size: <?php the_field('testimonial_content_ft', get_the_id()); ?>px!important;'>
                                    <p><?php the_field('client_testimonial_content', get_the_id()); ?></p>
                                </div>
                                <p class="weight-normal" style='font-size: <?php the_field('testimonial_name_ft'); ?>px!important;'><?php the_field('client_testimonial_name', get_the_id()) ?></p>
                                <p><?php the_field('client_job_title', get_the_id()) ?></p>
                                <h3 class="text-yellow">”</h3>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="padding-20">
                                    <p class="text-yellow">The Solution</p>
                                    <h3 style='font-size: <?php the_field('solution_title_ft'); ?>px!important;'><?php the_field('client_solution_title', get_the_id()) ?></h3>
                                    <div style='font-size: <?php the_field('solution_content_ft', get_the_id()); ?>px!important;'>
                                        <p><?php the_field('client_solution_content', get_the_id()) ?></p>
                                    </div>
                                    <div class="text-center"><a class="show-less" data-less="<?php echo $rand_num; ?>" href="javascript:;">Read Less</a></div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>
            <?php
 endwhile;
?>

            <div class="col-12 text-center margin-bottom-20 padding-h-10">
                [ajax_load_more container_type="div" post_type="case_studies" posts_per_page="<?php echo $number; ?>" offset="<?php echo $number; ?>" pause="true" scroll="false"]
            </div>

        </div>
    </section>
</div>
