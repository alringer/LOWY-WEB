<?php
 $single_hero_img_id = get_the_ID();
 $single_hero_img_url = home_url();
 $single_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true);
 $allsearch = new WP_Query("s=$s&showposts=0");
 global $wp_query;
 $total_pages = $wp_query->max_num_pages;
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

//  echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo "<i>'".get_search_query()."'</i>";
?>
<?php get_header(); ?>

	<main role="main">
		<!-- Hero section -->
		<section>
		<?php $single_hero_img_bg  =  strlen($single_hero_img) > 0 ? $single_hero_img :  '/wp-content/themes/lowy/img/default/pub-hero.jpg'; ?>
			<div class="hero hero--templates" style="background-image: url(<?php echo $single_hero_img_url; ?><?php echo $single_hero_img_bg; ?>)">
			</div>
		</section>
		<!-- content  -->
		<section class="single-page-template--content single-page-template--search-results">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1>Search</h1>
						<div class="single-page-template__search-results-meta">
							<?php echo  'Showing '. $paged . ' - ' ; echo $total_pages = $total_pages > 0 ? $total_pages : 1; if($allsearch->found_posts > 0): echo ' of '. $allsearch->found_posts; endif; echo " Results for <i>'".get_search_query()."'</i>"; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Line between sections -->
			<?php get_template_part('partials/line', 'page'); ?>
			
			<!-- Search results in a loop -->
			<?php get_template_part('search-loop'); ?>


			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>


		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
