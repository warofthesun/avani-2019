<!--index-->
<?php get_header(); ?>

<div class="banner-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2><?php echo wordwrap(get_theme_mod('banner_title'), 21, "<br />\n"); ?></h2>
			</div>
		</div>
	</div>
</div>

<section class="who_we_are" id="who_we_are">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_post(); ?>
				<h4><?php the_title(); ?></h4>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="what_we_do" id="what_we_do">
	<div class="container">
		<div class="row">
			<?php
				if(is_active_sidebar('whatwedo')) {
					dynamic_sidebar('whatwedo');
				}
				echo '<div class="clearfix"></div>';
				if(is_active_sidebar('whatwedo1')) {
					dynamic_sidebar('whatwedo1');
				}
				echo '<div class="clearfix"></div>';
				if(is_active_sidebar('whatwedo2')) {
					dynamic_sidebar('whatwedo2');
				}
				echo '<div class="clearfix"></div>';
				if(is_active_sidebar('whatwedo3')) {
					dynamic_sidebar('whatwedo3');
				}
				echo '<div class="clearfix"></div>';
			?>
		</div>
	</div>
</section>

<section class="our_client" id="our_clients">
	<div class="container">
		<div class="row">
			<?php
				if(is_active_sidebar('clients')) {
					dynamic_sidebar('clients');
				}
				echo '<div class="clearfix"></div>';
				if(is_active_sidebar('clients1')) {
					dynamic_sidebar('clients1');
				}
				echo '<div class="clearfix"></div>';
			?>
		</div>
	</div>
</section>

<section class="contact_us" id="contact_us">
	<div class="container">
		<div class="row">
			<?php
				if(is_active_sidebar('contact')) {
					dynamic_sidebar('contact');
				}
			?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
