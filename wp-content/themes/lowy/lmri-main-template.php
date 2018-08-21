<?php
 $lmri_main_hero_img_id = get_the_ID();
 $lmri_main_hero_img_url = home_url();
 $lmri_main_hero_img = get_post_meta($post->ID, 'about-lmri-hero-img', $single = true); 

?>
<?php /* Template Name: LMRI Main Template */ get_header(); ?>


<main role="main">
    <?php get_template_part('partials/main-content','page'); ?>	
	<!-- end template content section -->

	<!-- Line between sections -->
	<?php get_template_part('partials/line','page'); ?>	
	<!-- End Line between sections -->
		

	<!-- Full page sections -->
	<?php get_template_part('partials/sections-pages'); ?>	

	
	<!-- Left img cards -->
	<?php get_template_part('partials/cards-sections'); ?>	


</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>








