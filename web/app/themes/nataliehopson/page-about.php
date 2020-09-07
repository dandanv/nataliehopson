<?php while (have_posts()) : the_post(); ?>
  <div class="content--with_sidebar">
	  <div class="row">
	  	<div class="col">
	  		<?php get_template_part('templates/content', 'page'); ?>

	  		<h3>Say Hello</h3>
	  		<p><a class="say--hello" href="mailto:hellonataliehopson@gmail.com">hellonataliehopson@gmail.com</a></p>
	  	</div>
	  	<div class="col">
	  		<h3>Skills</h3>
	  		<ul>
				<li>Website Design</li>
				<li>Art Direction</li>
				<li>Digital Design</li>
				<li>Brand Identity</li>
				<li>Print Production</li>
				<li>Editorial Design</li>
				<li>Environmental Design</li>
			</ul>

	  		<h3>Studios</h3>
	  		<ul>
				<li>Burnkit, Canada</li>
				<li>Animl, London UK</li>
				<li>18 Feet & Rising, London UK</li>
				<li>Johnson Banks, London UK</li>
			</ul>

			<h3>Follow</h3>
	  		<ul>
				<li><a href="">LinkedIn</a></li>
				<li><a href="">Twitter</a></li>
			</ul>
	  	</div>
	  </div>
  </div>
<?php endwhile; ?>