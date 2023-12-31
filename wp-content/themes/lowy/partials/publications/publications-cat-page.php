<?php 
    $publications_cat_id =  get_post_meta($post->ID, 'cat_id', true);
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $publications_cat_query_args = array(
		'paged'         => $paged, 
        'orderby'          => 'desc',
        'posts_per_page'   => '10',
        'post_type'     => 'post',
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
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="pagination">
				<div class="pagination__inner-wrap">
					<ul class="list list--unstyled list--inline">
						<li><?php next_posts_link( '<img src="/wp-content/themes/lowy/img/icons/left-page.svg"> <span>Older Publications</span>	', $publications_cat_query->max_num_pages ); ?></li>
						<li><?php previous_posts_link( '<span>Newer Publications</span> <img src="/wp-content/themes/lowy/img/icons/right-page.svg">' );  ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

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
