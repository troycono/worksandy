<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<section class="post-content">
		<?php while ( have_posts() ) {
			the_post(); ?>

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="post-featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" data-stellar-background-ratio="0.2"></div>
			<?php } ?>

			<div class="container">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div><!-- .entry-header -->

					<div class="entry-content">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dogghouse_fct' ),
								get_the_title()
							) );

						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php 

					the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'dogghouse_fct' ) . '</span> - <span class="nav-title"><span class="nav-title-icon-wrapper"></span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'dogghouse_fct' ) . '</span> - <span class="nav-title">%title</span>',
					) );
	
				?>

				<div class="clear"></div>
			</div>
		<?php } ?>
	</section>
</main><!-- #main -->

<?php get_footer();
