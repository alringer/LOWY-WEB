<?php 
    $publications_cat_id =  get_post_meta($post->ID, 'cat_id', true);
    $mostpopular_args['paged'] = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
    $publications_cat_query_args = array(
        // 'post_type'        => 'cat',
        'orderby'          => 'desc',
        // 'meta_key'         => 'view_count',
        'posts_per_page'   => '100',
        'post_type'     => 'post',
        'paged' => $mostpopular_args,
        'cat' => $publications_cat_id
    );
    //$paged['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $publications_cat_query = new WP_Query($publications_cat_query_args);

?>
<?php if ($publications_cat_query->have_posts()): while ($publications_cat_query->have_posts()) : $publications_cat_query->the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- post title -->
					<h2>
						<?php the_title(); ?>
					</h2>

					<!-- post details -->
					<p>
                        <a href="<?php echo get_post_meta($post->ID, 'link-offsite', true); ?>" title="<?php the_title(); ?>">
                            <?php echo wp_trim_words( $post->post_content, 50, "..." ); ?>
                        </a>
                    </p>
                    

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
