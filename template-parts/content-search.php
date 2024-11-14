<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ad
 */

?>

<div class="col-12 padding-top-20">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
		
		<?php if ('post' === get_post_type()) : ?>
			
		<div class="entry-meta">
			<?php
            ad_posted_on();
		    ad_posted_by();
		    ?>
		</div><!-- .entry-meta -->
		
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
</div>
