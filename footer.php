	<footer class="footer">
		<div class="container">
			<div class="row rowf1">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-md-6">
							<?php
								wp_nav_menu(array(
									'theme_location'=> 'footer-menu',
									'container'     => false,
									'menu_class'    => 'ftr_link'
								));
							?>
						</div>
					</div>
				</div>
				<div class="col-sm-6 txt_right">
					<div class="row">
						<div class="col-md-7">
							<?php
								if(!empty(get_bloginfo('name'))) {
									echo '<p>'.get_bloginfo('name').'</p>';
								}
								if(!empty(get_theme_mod('site_address'))) {
									echo '<p>'.get_theme_mod('site_address').'</p>';
								}
								if(!empty(get_theme_mod('site_address2'))) {
									echo '<p>'.get_theme_mod('site_address2').'</p>';
								}
							?>
						</div>
						<div class="col-md-5">
							<?php
							if(!empty(get_theme_mod('site_phone'))) {
								echo '<p>Telephone: '.get_theme_mod('site_phone').'</p>';
							}
							if(!empty(get_theme_mod('site_fax'))) {
								echo '<p>Fax: '.get_theme_mod('site_fax').'</p>';
							}
							if(!empty(get_theme_mod('site_email'))) {
								echo '<p>Email: '.get_theme_mod('site_email').'</p>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-btm">
				<div class="col-sm-6">
					<?php
						$footer_logo_url = get_theme_mod('footer_logo');
						if(!empty($footer_logo_url)) {
							echo '<a href="#page-top" class="ftr_logo js-scroll-trigger" rel="home" itemprop="url">
									<img src="'.$footer_logo_url.'" class="img-responsive">
								  </a>';
						} else {
							the_custom_logo();
						}
					?>
				</div>
				<div class="col-sm-6">
					<ul class="footer_scl">
						<?php
							if(!empty(get_theme_mod('facebook_url'))) {
								echo '<li><a target="_blank" href="'.get_theme_mod('facebook_url').'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
							}
							if(!empty(get_theme_mod('twitter_url'))) {
								echo '<li><a target="_blank" href="'.get_theme_mod('twitter_url').'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
							}
							if(!empty(get_theme_mod('linkedin_url'))) {
								echo '<li><a target="_blank" href="'.get_theme_mod('linkedin_url').'"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
							}
						?>
					</ul>
				</div>
			</div>
			<div class="row row_cprt">
				<div class="col-sm-4">&nbsp;<!--a href="#">Privacy Policy</a--></div>
				<div class="col-sm-8 txt_cp_right">Copyright @ <?php echo date('Y').' '.get_bloginfo('name') ?> All Rights Reserved</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>
