<?php
/**
 * Template Name: Case Studies Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AD
 */

get_header();
?>
<!-- query -->
<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array(
    'post_type' => 'case_studies',
    'posts_per_page' => 6,
    'paged' => $paged
));
?>
<?php if ($query->have_posts()) : ?>
<section class="news-page">
    <div class="container">
        <div class="row">
            <div class="col-12 spacer-30 spacer-md-80 spacer-xl-100 spacer-xxl-130"></div>
            <div class="col-12 text-center padding-v-10">
                <h2><?php echo get_the_title(); ?></h2>
            </div>
            <div class="col-12 spacer-30 spacer-md-40 spacer-xl-60 spacer-xxl-80"></div>
            <div class="col-12 news-listing">
                <div class="row row-gap-20">

                    <!-- begin loop -->
                    <?php while ($query->have_posts()) : $query->the_post();

                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $rand_num = rand(0, 25222233222);

                    ?>
            <div class="col-12 padding-h-10">
                <div class="bg-dark-grey case-study-item border-radius-right">
                    <div class="row">
                        <div class="col-12 col-md-4 padding-h-0">
                            <img loading="lazy" class="image-fluid margin-bottom-10 lozad" data-src="<?php echo $featured_img_url; ?>" />
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="padding-20">
                                <p class="text-yellow">The Client</p>
                                <p><?php the_date(); ?></p>
                                <h3><?php the_field('company_name', get_the_id()); ?></h3>
                                <p><?php the_field('client_description', get_the_id()); ?></p>

                                <div class="text-center"><a class="show-more more-<?php echo $rand_num; ?>" data-more="<?php echo $rand_num; ?>" href="javascript:;">Read More</a></div>
                            </div>
                        </div>

                    </div>

                    <div class="show-<?php echo $rand_num; ?>" style="display: none">
                        <div class="row">
                            <div
                                class="col-12  col-md-4 padding-h-0 text-center  padding-v-20 padding-h-40 bg-light-grey">
                                <h3 class="text-yellow">”</h3>
                                <p><?php the_field('client_testimonial_content', get_the_id()); ?></p>
                                <p class="weight-normal"><?php the_field('client_testimonial_name', get_the_id()) ?></p>
                                <p><?php the_field('client_job_title', get_the_id()) ?></p>
                                <h3 class="text-yellow">”</h3>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="padding-20">
                                    <p class="text-yellow">The Solution</p>
                                    <h3><?php the_field('client_solution_title', get_the_id()) ?></h3>
                                    <p><?php the_field('client_solution_content', get_the_id()) ?></p>
                                    <div class="text-center"><a class="show-less" data-less="<?php echo $rand_num; ?>" href="javascript:;">Read Less</a></div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

                    <?php endwhile; ?>
                    <!-- end loop -->


                </div>



            </div>
            <div class="col-12 spacer-20 spacer-md-30 spacer-xl-40"></div>
            <div class="col-12 pagination text-center">
                <?php
                    echo paginate_links(array(
                        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'total'        => $query->max_num_pages,
                        'current'      => max(1, get_query_var('paged')),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf('<img loading="lazy" class="arrow-left" src="/wp-content/themes/ad/assets/images/arrow-right.svg"> %1$s', __('', 'text-domain')),
                        'next_text'    => sprintf('%1$s <img loading="lazy" class="arrow-right" src="/wp-content/themes/ad/assets/images/arrow-right.svg">', __('', 'text-domain')),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ));
    ?>
            </div>
            <div class="col-12 spacer-30 spacer-md-40 spacer-xl-60 spacer-xxl-80"></div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
</section>
<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
get_footer();