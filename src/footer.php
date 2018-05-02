	<?php 
		global $lang;
		$lang = pll_current_language();
	?>
	
	<footer>
		<div class="container-fluid footer_container" id="cont">
			<div class="row align-items-center">
					<div class="footer_scrolltop col-lg-12 col-md-12 col-sm-12">
						<span><a class="top_link" href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></span>
					</div>
			</div>		
			<div class="row align-items-center">		
					<div class="logo_fintern col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<?php dynamic_sidebar("logo_footer"); ?>
					</div>
				
						
					<div class="footer_contacts col-lg-4 col-md-6 col-sm-12 col-xs-12">		
						<ul>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span id="phone_number">
									<?php echo carbon_get_theme_option( 'crb_phone' ); ?>
								</span>
							</li>
							<li>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>
									<?php echo antispambot(carbon_get_theme_option( 'crb_email' )); ?>
								</span>
							</li>
						</ul>
					</div>
				
					<div class="footer_nav col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<span class="footer_navitem"><a href="#cat"><?php showCategoryName(129, 131, $lang) ?></a></span>
						<span class="footer_navitem"><a href="#ord"><?php showCategoryName(110, 112, $lang) ?></a></span>
						<span class="footer_navitem"><a href="#cust" data-ps2id-offset="90"><?php showSinglePostTitle(266, 268, $lang) ?></a></span>
						<span class="footer_navitem"><a href="#abus" data-ps2id-offset="-150"><?php showSinglePostTitle(274, 276, $lang) ?></a></span>
						<span class="footer_navitem"><a href="#ourstor"><?php showCategoryName(4, 45, $lang); ?></a></span>
						<span class="footer_navitem"><a href="#cont"><?php if($lang == "uk"){echo "Контакти";}else{echo "Contacts";} ?></a></span>
					</div>
				</div>
				
				<div class="row footer_bottom">
					<div class="copyright offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-6 col-xs-6 align-self-center">
						<div>Copyright <span><i class="fa fa-copyright" aria-hidden="true"></i></span><span id="full_year"></span> Golubika. All rights reserved. </div>
					</div>
					<div class="powered col-lg-4 col-md-4 col-sm-6 col-xs-6 align-self-center">
						<a id="powered_link" href="#">Powered by SD</a>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
	<![endif]-->

		
	<?php 
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', get_template_directory_uri() . '/libs/jquery/jquery-3.2.1.min.js', false, null, true );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('tether', get_template_directory_uri() . '/libs/bootstrap/tether.min.js', array('jquery'), false, true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.js', array('jquery'), false, true);
		wp_enqueue_script('skrollr', get_template_directory_uri() . '/libs/skrollr/skrollr.min.js', array('jquery'), false, true);
		wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), false, true);
		wp_enqueue_script('scroll2id', get_template_directory_uri() . '/libs/scroll2id/jquery.malihu.PageScroll2id.min.js', array('jquery'), false, true);
		wp_enqueue_script('animatecss', get_template_directory_uri() . '/libs/animate/animate-css.js', array('jquery'), false, true);
		wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/libs/owl/owl.carousel.min.js', array('jquery'), false, true);
		wp_enqueue_script('jqvalidate', get_template_directory_uri() . '/libs/jquery_validate/jquery.validate.min.js', array('jquery'), false, true);
		wp_enqueue_script('myscript', get_template_directory_uri() . '/js/common.js', array('jquery'), false, true);

		if($lang == "uk"){
			wp_enqueue_script("myforms", get_template_directory_uri() . "/js/forms.js", array('jquery'), false, true);
			wp_deregister_script("myforms_en");
			wp_dequeue_script( 'myforms_en' );
		}else{
			wp_enqueue_script("myforms_en", get_template_directory_uri() . "/js/forms_en.js", array('jquery'), false, true);
			wp_deregister_script("myforms");
			wp_dequeue_script( 'myforms' );
		}
	?>
	<?php wp_footer(); ?> 

	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>