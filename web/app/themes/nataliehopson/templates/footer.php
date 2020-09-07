<footer class="content-info">
  <div class="container">
  	<div class="row">
    	<div class="col">
		    <?php
		    if (has_nav_menu('footer_navigation')) :
		      wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
		    endif;
		    ?>
		    <small>Copryright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
		</div>
		<div class="col">
			<button class="js--back_top">Back to Top</button>
			<small>Site brought to life by Dan Villanueva</small>
		</div>
	</div>
  </div>
</footer>
