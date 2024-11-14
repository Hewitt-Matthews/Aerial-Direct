<?php
/**
 * The template for displaying all single resource hub
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
		if (strlen(get_next_post()->post_title) > 0) {
			the_post_navigation(
				array(
					'prev_text' => '<span class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%),
   url(' . @get_the_post_thumbnail_url($previous_post->ID,'full') . ' )">' . '<span class="nav-subtitle">' . esc_html__( 'Previous Post:', 'ad' ) . '<br></span> <span class="nav-title">%title</span>',
				
					'next_text' => '<span class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%),
   url(' . @get_the_post_thumbnail_url($next_post->ID,'full') . ' )">' . '<span class="nav-subtitle">' . esc_html__( 'Next Post:', 'ad' ) . '<br></span> <span class="nav-title">%title</span>',
                    'class' => 'post-nav-wrap',  
				)
			);
		}	?>
		<?php 
		$prev_post = get_previous_post(); 
		$id = $prev_post->ID ;
		$permalink = get_permalink( $id );
		$url = get_the_post_thumbnail_url($id,'full');
		if (strlen(get_next_post()->post_title) < 1) { ?>
			<nav class='navigation post-nav-wrap'>
				<div class='nav-links'>
				<div class="nav-previous">
						<a href="<?php echo $permalink; ?>">
							<spam class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%), url('<?php echo $url ?> ')" >
								<spam class='nav-subtitle'>Previous Post:</br></spam>
								<span class="nav-title"><?php echo $prev_post->post_title; ?></span>
							</spam>
						</a>                         
					</div>
					<div class="nav-next">
						<a href="/resource_hub">
							<!-- <spam class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%), url('http://www.aerial-direct.co.uk/wp-content/uploads/2023/02/AD_BRAND_LOGO_DNA_RGB_05.22.png')" > -->
							<spam class="post-image" style="background:linear-gradient(to bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 1) 100%), url('<?php echo get_field('last_resource_hub_image', 'options') ?>')" >
								<!-- <spam class='nav-subtitle'>Back to Homepage:</spam> -->
								<span class="nav-title">Back to Resource Hub</span>
							</spam>
						</a>
					</div>
				</div>
		</nav>
		<?php } 
		?>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
