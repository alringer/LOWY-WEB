<?php get_header(); ?>

<section style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');" class="home__bg-image home__bg-image--hero">
<?php
		// Hero section
		get_template_part('partials/home/hero', 'page'); 
	?>
</section>
<main role="main" class="home__main-front-page-content">

	<?php
	// Page content if needed
		get_template_part('partials/home/content', 'page'); 
	?>
	<?php
		// About LMRI card
		get_template_part('partials/home/about-lmri', 'page'); 
	?>
	<?php
		// 
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
</main>

<?php get_footer(); ?>