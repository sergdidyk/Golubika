
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
								<span id="phone_number">+38 097 227 93 43</span>
							</li>
							<li>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>golubika.forbeloved@gmail.com</span>
							</li>
						</ul>
					</div>
				
					<div class="footer_nav col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<span class="footer_navitem"><a href="#cat">каталог</a></span>
						<span class="footer_navitem"><a href="#ord">як замовити</a></span>
						<span class="footer_navitem"><a href="#cust" data-ps2id-offset="90">індивідуальні замовлення</a></span>
						<span class="footer_navitem"><a href="#abus" data-ps2id-offset="-150">про нас</a></span>
						<span class="footer_navitem"><a href="#ourstor">наші історії</a></span>
						<span class="footer_navitem"><a href="#cont">контакти</a></span>
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
	
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/tether.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/parallax/jquery.parallax.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>  
	<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/jquery.malihu.PageScroll2id.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery_validate/jquery.validate.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
	
	<?php wp_footer(); ?> 

	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>