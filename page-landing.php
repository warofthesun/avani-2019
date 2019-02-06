<!-- page landing -->
<?php
/*
 Template Name: Landing Page
*/
?>
<?php get_header('landing'); ?>
<div class="banner-section page">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container lp-content">
		<div class="row">
			<div class="col-xs-0 col-md-1">&nbsp;</div>
			<div class="col-xs-12 col-md-7" style="margin: 2em 0;">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-xs-12 col-md-4 contact-form">
				<div class="header">
					<h2><?php the_field('form_header'); ?></h2>
					<p><?php the_field('form_subhead'); ?></p>
				</div>
				<div class="form">
					<?php $form = get_field('contact_form'); echo do_shortcode($form); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if ( get_field('free_download') ) : ?>
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
			location = '<?php the_field("free_download"); ?>';
	}, false );
	</script>
<?php endif; ?>
<?php get_footer(); ?>
