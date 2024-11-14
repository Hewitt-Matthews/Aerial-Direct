<?php
/**
 * Template Name: Resource Hub Page
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
    'post_type' => 'resource-hub',
    'posts_per_page' => 6,
    'paged' => $paged
));
?>
<?php if ($query->have_posts()) : ?>

    <section class="header-content-center page-header">
        <div class="container-fluid">
            <div class="row align-items-center custom-height justify-content-center">
                <div class="col-12 col-md-8 vertical-middle text-center" style='margin-bottom:unset!important;'>
                    <div class="">
                        <h1 class="weight-normal header-heading text-white">Resource <span class="text-yellow">Hub</span></h1>
<!--                         <div class='spacer-10'></div> -->
                        <?php the_content() ?>
                    </div>
                </div>

                <div class="col-12 social-section">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="col-4 text-center arrow-down-header">
                            <button class="btn bg-transparent border-0 d-none d-lg-inline-flex"> <img loading="lazy" decoding="async" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-lime.svg" alt='arrow lime colour'></button></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="news-page">
    <div class="container-fluid custom-container">
<!--         <div class="row row-gap-50"> -->
<!--             <div class="col-12 spacer-30 spacer-md-40 spacer-xl-60 spacer-xxl-80"></div> -->
            <div class="col-12 news-listing">
			<div class="row row-gap-20">

                <!-- begin loop -->
                <?php while ($query->have_posts()) : $query->the_post();

                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>

                <div class="col-md-4 col-12 padding-10">
                    <div class="bg-dark-grey padding-h-0 blog-item h-100 d-flex flex-column">
                        <a href="<?php the_permalink(); ?>"><img loading="lazy" class="image-fluid margin-bottom-10 lozad"
                                data-src="<?php echo $featured_img_url; ?>" alt='<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>'/></a>
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

                <?php endwhile; ?>
                <!-- end loop -->


				</div>



            </div>
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
                        'prev_text'    => sprintf('<img loading="lazy" class="arrow-left" src="/wp-content/themes/ad/assets/images/arrow-right.svg" alt="Left Arrow"> %1$s', __('', 'text-domain')),
                        'next_text'    => sprintf('%1$s <img loading="lazy" class="arrow-right" src="/wp-content/themes/ad/assets/images/arrow-right.svg" alt="Right Arrow">', __('', 'text-domain')),
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