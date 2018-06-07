 <?php
 $clinical_research_hero_img_id = get_the_ID();
 $clinical_research_hero_img_url = home_url();
 $clinical_research_hero_img = get_post_meta($post->ID, 'clinical-research-hero-img', $single = true); 

?>
<?php /* Template Name: clinical research template */ get_header(); ?>


	<main role="main">
		<!-- section -->
		<section>

			<img src="<?php echo $clinical_research_hero_img_url;?><?php echo $clinical_research_hero_img; ?>" />
			
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>








