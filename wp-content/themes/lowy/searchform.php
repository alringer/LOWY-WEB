<!-- search -->
<form class="form-inline my-2 my-lg-0 form-search js-form-search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="form-control mr-sm-2" type="search" name="s" placeholder="<?php _e( 'Search', 'html5blank' ); ?>">
	<button class="btn my-2 my-sm-0 search-icon-btn" type="submit" role="button"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="Logo" class="logo-img"></button>
	<button class="btn my-2 my-sm-0 btn--desktop" type="submit" role="button"><?php _e( 'Submit', 'html5blank' ); ?></button>
	<div class="search-form-desktop-icon"></div>
</form>
<!-- /search -->
