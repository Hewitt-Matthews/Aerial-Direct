<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ad
 */

get_header();
?>

	<main id="primary" class="site-main text-center">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
            // Previous/next post navigation.
            $next_post = get_next_post();
            $previous_post = get_previous_post();
		if($next_post && $previous_post){
			
		}
			the_post_navigation(
				array(
					'prev_text' => '<span class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%),
   url(' . @get_the_post_thumbnail_url($previous_post->ID,'full') . ' )">' . '<span class="nav-subtitle">' . esc_html__( 'Previous Post:', 'ad' ) . '<br></span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%),
   url(' . @get_the_post_thumbnail_url($next_post->ID,'full') . ' )">' . '<span class="nav-subtitle">' . esc_html__( 'Next Post:', 'ad' ) . '<br></span> <span class="nav-title">%title</span>',
                    'class' => 'post-nav-wrap',
				)
			);


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
