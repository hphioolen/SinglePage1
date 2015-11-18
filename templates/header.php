<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      	<?php 
	      	$logo = get_template_directory_uri() . '/dist/images/logo.png';
			$mobilelogo = get_template_directory_uri() . '/dist/images/logo.png';
		?>
      <a id="logo" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'description' ); ?>">		    	
	    	<img class="hidden-xs" src="<?= $logo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
	    	<img class="visible-xs" src="<?= $mobilelogo; ?>" alt="<?php bloginfo( 'name' ); ?>" />
	    			    	
	    </a>
    </div>

    <nav class="collapse navbar-collapse pull-right" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav pull-left']);
      endif;
      ?>
        <div class="social pull-right">
		    <i class="fa fa-facebook"></i>
		    <i class="fa fa-instagram"></i>
		    <i class="fa fa-twitter"></i>
	    </div>
    </nav>

  </div>
</header>

<?php if (is_home() || is_front_page()){
	
	get_template_part('templates/includes/flexslider');
	get_template_part('templates/includes/features');
	
}

?>