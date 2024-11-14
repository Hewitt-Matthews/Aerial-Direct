<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eh
 */
if(isset($_GET['new_header'])){
	require_once('header-new.php');
}else{
	get_header();

}
$slug = get_post_field( 'post_name', get_post() );
?>

	<main id="primary" class="site-main <?php echo $slug; ?> <?php the_field('page_class'); ?>">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
