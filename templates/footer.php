<?php if (is_home() || is_front_page()): ?>
    
    		<?php get_template_part('templates/includes/portfolio-categorie'); ?>
    		<?php get_template_part('templates/includes/partner-flexslider'); ?>
    		
    		
	
	<?php endif; ?> 
	<div class="top">
		<a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
	</div>
<footer class="content-info clearfix" role="contentinfo">
	<div class="container">	
		<div class="row">
			  <div class="col-md-4 left"><?php dynamic_sidebar('sidebar-footer-1'); ?></div>
			  <div class="col-md-4 center"> <?php dynamic_sidebar('sidebar-footer-2'); ?></div>
			  <div class="col-md-4 right"><?php dynamic_sidebar('sidebar-footer-3'); ?></div>
		</div>
	</div>  
</footer>

<footer class="site-info">
	<div class="container">	
		<div class="row">
			<div class="col-xs-6 left">&copy; <?= date("Y"); ?> <?= get_bloginfo('name'); ?></div>
			<div class="col-xs-6 text-right">Powered by Newfish</div>
		</div>
	</div>		
</footer>
