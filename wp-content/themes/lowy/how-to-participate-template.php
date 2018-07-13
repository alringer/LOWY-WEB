<?php
/*
 * Template Name: How to Participate Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $how_to_participate_img_id = get_the_ID();
 $how_to_participate_img_url = home_url();
 $how_to_participate_img = get_post_meta($post->ID, 'how-to-participate-hero-img', $single = true); 
//  $diagnosing_mactels_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $how_to_participate_img_url;?><?php echo $how_to_participate_img; ?>)">
		</div>
	</section>
	<!-- End Hero Section -->

	<!-- template content section -->
	<section class="single-page-template--content single-page-template--smaill-img-card">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php 
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('
						<div class="breadcrumbs">','</div>
						');
					}
				?>
				<h1><?php the_title(); ?></h1>
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content ">
                            <?php the_content(); ?>	
                            
                            <button class="read-more-btn">
                                <a href="http://www.lmri.net/wp-content/uploads/2015/11/eye-donation-brochure-FINAL-8-21-2015.pdf" class=""> Download  <span class=""></span></a>
                            </button>  

							<br class="clear">
							<?php edit_post_link(); ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
 				<!-- End Clinical research post -->


				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

				<?php endif; ?>
			</div>
		</div>
	</div>
	</section>
	<!-- end template content section -->

	<section>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
		</li>
	</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">LMRI, through the MacTel Project, places a focus on the power of clinical studies to advance the understanding of MacTel.

			Overview of MacTel Clinical Research
			The Lowy Medical Research Institute, through the MacTel Project, places a major focus on the power of clinical studies to advance the understanding of MacTel. This focus has been largely successful to date; it has redefined the disease and has brought a therapy to clinical 
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">The MacTel Project’s Natural History Observation Study played a major role in improving the diagnosis of MacTel and the understanding of the disease. The Natural History Study enrolled more than 400 individuals with MacTel from around the world. Participants had annual clinic visits for five years. At these visits, their health and MacTel progression were recorded. This detailed clinical history, from very early to more advanced stages of disease, has led to new disease insights.</div>
			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">The Lowy Medical Research Institute also sponsors a Natural History Observation Registry. The registry involves an initial clinic visit at the time of enrollment, and an annual telephone survey. Participants in the registry are providing valuable clinical information about the progression of their disease. They are also connected to the opportunity to participate in laboratory research and clinical trials.
				One of the objectives of The Lowy Medical Research Institute is to bring new therapies to the clinic to treat MacTel. To that end, LMRI is sponsoring Phase 1 and Phase 2 clinical trials to test the safety and efficacy of ciliary neurotrophic factor (CNTF) in patients with MacTel. These trials are ongoing.</div>
		</div>
	</section>


	<!-- Line between sections -->
	<?php //get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <!-- 2nd section template content -->
    
	<?php //get_template_part('partials/eye-donation/how-to-donate', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<?php //get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <?php //get_template_part('partials/eye-donation/instructions', 'page'); ?>
    <?php //get_template_part('partials/line', 'page'); ?>	
    <?php //get_template_part('partials/reading-centers/reading-centers-related-posts', 'page'); ?>

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
