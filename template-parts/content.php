<?php
/**
 * Template part for displaying posts, locations
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="entry-header post-thumbnail blog-header" style="background:linear-gradient(0deg, rgba(000, 0, 000, 0.5), rgba(000, 0, 000, 0.5)), url(<?php
    echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>); height:<?php the_field('blog_banner_height') ?>px!important;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <?php
                        if ( is_singular() ) :
                            the_title( '<h1>', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;

                        if ( 'post' === get_post_type() ) :
                        ?>
                    <div class="entry-meta">
                        <?php
                        ad_posted_on();
                        ?>
                    </div><!-- .entry-meta -->
                </div>
            </div>
        </div>
		<?php endif; ?>
	</section><!-- .entry-header -->



    <div class="container">
        <div class="row">
            <div class="col-12 text-left entry-content">

                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ad' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ad' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>



            </div><!-- .entry-content -->
        </div>
    </div>



	<footer class="entry-footer">
		<?php ad_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
