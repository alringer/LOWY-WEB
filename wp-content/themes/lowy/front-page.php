<?php get_header(); ?>
<?php
	// Hero section
	get_template_part('partials/home/hero', 'page'); 
?>
<?php
// Page content if needed
	get_template_part('partials/home/content', 'page'); 
?>
<?php
	// About LMRI card
	get_template_part('partials/home/about-lmri', 'page'); 
?>
<?php
	// grid middle section
	get_template_part('partials/home/grid-middle-section', 'page'); 
?>
<?php
	// grid last section
	get_template_part('partials/home/grid-bottom-section', 'page'); 
?>

<?php
	// Featured
	get_template_part('partials/home/featured-cat', 'page'); 
?>
<?php
	// Perspective
	get_template_part('partials/home/perspective', 'page'); 
?>
<?php
	// Reach out
	get_template_part('partials/home/reach-out', 'page'); 
?>
<?php get_footer(); ?>