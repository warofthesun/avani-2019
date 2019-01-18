<!-- page privacy-policy -->
<?php get_header(); ?>
<div class="baner-section page">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-0 col-md-2"></div>
			<div class="col-xs-12 col-md-8" style="margin: 2em 0;">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-xs-0 col-md-2"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
