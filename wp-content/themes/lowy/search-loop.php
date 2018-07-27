<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<!-- /post details -->
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

					<?php edit_post_link(); ?>
				</div>
			</div>
		</div>
		<!-- Line between sections -->
		<?php get_template_part('partials/line', 'page'); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					<p> 
						<?php _e( 'Please check back later...', 'html5blank' ); ?>
						<a href="<?php echo home_url(); ?>">
								<?php  _e( 'Return home?', 'html5blank' );	?>
						</a>
					</p>
				</div>
			</div>
		</div>
		<!-- Line between sections -->
		<?php get_template_part('partials/line', 'page'); ?>
	</article>
	<!-- /article -->

<?php endif; ?>
