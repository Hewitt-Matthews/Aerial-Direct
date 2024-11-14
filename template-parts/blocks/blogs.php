<?php
// Load values and assign defaults.
$number = get_field('post_number') ?: 3;
$post_cat = get_field('post_category');
if($post_cat) {
    // Define args
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => $number,
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $post_cat
            )
            ),
    );
} else {
    // Define args
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'posts_per_page' => $number,
    );
}

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

<section id="news" class="container-fluid custom-container <?php the_field('custom_class'); ?> <?php echo $gradient; ?>" 
                            style='
                            padding-top: <?php the_field('pt'); ?>px!important; 
                            padding-bottom: <?php the_field('pb'); ?>px!important;
                            padding-right: <?php the_field('pr'); ?>px!important;
                            padding-left: <?php the_field('pl'); ?>px!important;
                            '>
    <div class="row row-gap-50">
        <div class="col-12 text-center margin-top-40">
            <h1 style='font-size: <?php the_field('blog_title_ft'); ?>px!important;'><?php the_field('blog_title') ?></h1>
            <p class="padding-xs-h-40 padding-md-h-160" style='font-size: <?php the_field('blog_subtitle_ft'); ?>px!important;'><?php the_field('blog_subtitle') ?></p>
        </div>
        <?php
 while ($posts->have_posts()) : $posts->the_post();
     /* grab the url for the full size featured image */
     $sizes = wp_get_attachment_image_src(get_post_thumbnail_id(),'blog-listing-header');
     ?>
        <div class="col-12 col-md-6 col-lg-4 padding-10">
            <div class="bg-dark-grey padding-h-0 blog-item h-100 d-flex flex-column">
            <a href="<?php the_permalink(); ?>"><img loading="lazy" class="image-fluid margin-bottom-10 lozad" data-src="<?php echo $sizes[0]; ?>" src="<?php echo $sizes[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>"/></a>
            <div class="padding-h-20 padding-v-15">
                <p><?php the_date(); ?></p>
                <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
</a>
                <p><?php echo wp_trim_words(get_the_content(), 21, '.'); ?></p>
            </div>
                <div class="blog-button-wrap text-center margin-bottom-30">
                    <a href="<?php the_permalink(); ?>"><button class="btn btn-yellow">Read more</button></a>
                </div>

</div>
        </div>
        <?php
 endwhile;
?>
<div class="col-12 text-center margin-md-top-15"><a href="<?php echo home_url(); ?>/blog/"><button class="btn-yellow">View all news & blog articles</button></a></div>
    </div>
</section>