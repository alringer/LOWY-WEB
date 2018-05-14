<?php get_header(); ?>
<?php
	// Hero section
	get_template_part('partials/home/hero', 'page'); 
?>
<?php
	// Hero section list
	get_template_part('partials/home/about-lmri', 'page'); 
?>
<?php
// Page content if needed
	get_template_part('partials/home/content', 'page'); 
?>
<?php get_footer(); ?>