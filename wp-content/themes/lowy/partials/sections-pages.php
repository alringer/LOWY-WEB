<?php 
		$page_template_sections = get_post_meta($post->ID, 'page_id', $single = false);
	?>				

	<?php if (count($page_template_sections) > 0 ): ?>
			<?php foreach ($page_template_sections as $page_template_section_id) : ?>
			<?php $page_template_section =  get_page($page_template_section_id); ?>
			
			<section class="single-page-template--content"> 
				<div class="container">
					<div class="row">
						<div class="col-12">
							
							<div>
								<?php //echo '<img src="'.get_the_post_thumbnail_url($page_history_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
							</div>

							<div>
								<h3><?php echo apply_filters( 'the_title', $page_template_section ->post_title, $page_template_section ->ID )  ?></h3>

							</div>

							<div class="single-page-template__article-content">
								<?php
								echo '<p>'. apply_filters( 'the_content',( $page_template_section ->post_content ) ) .'</p>';                  
								//echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $page_history_page->post_content, 100, "" ) ) .'</p>'; 
								?>
							</div>


							<div class="can-edit-wrap">
								<?php if($canBeEdited) {
									echo '<a href=" '.get_edit_post_link($page_template_section->ID, 'none').' ">Edit</a>';
								} ?>
							</div>

						</div>
					</div>
				</div>
			</section>       
			
			<?php get_template_part('partials/line', 'page'); ?>
			<?php endforeach; ?>
		<?php endif; ?>