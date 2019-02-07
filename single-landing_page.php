<!--single-landing_page-->
<?php get_header('landing'); ?>
<div class="banner-section page">
	<div class="container">
					<div class="header-image col-md-6"style="height:100%;display:flex;align-items:flex-end;">
						<div class="tablet" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
							<div class="ad-image">
								<?php

								$image = get_field('ad_graphic');
								// vars
								$url = $image['url'];

								// thumbnail
								$size = 'ad-image';
								$thumb = $image['sizes'][ $size ];
								$width = $image['sizes'][ $size . '-width' ];
								$height = $image['sizes'][ $size . '-height' ];

								?>
								<img src="<?php echo $thumb; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
							</div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tablet.png" style="position:relative;">
						</div>
					</div>
					<div class="col-md-6 ad-headline">
						<h2><?php if ( get_field('ad_headline') ) : the_field('ad_headline'); else : the_title(); endif; ?></h2>
							<p><?php the_field('ad_subline'); ?></p>
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
