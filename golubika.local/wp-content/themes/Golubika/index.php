	
	<?php 
		get_header(); 
		global $lang;
		$lang = pll_current_language();	
	?>

	<section>
		<?php get_template_part('catalog'); ?>

		<div class="order">
			<div class="order_headline" id="ord">
				<span class="order_headtext"><?php showCategoryName(110, 112, $lang) ?></span>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 how_to_order">
						<div class="picture">
							<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p><?php showSinglePostTitle(244, 246, $lang) ?></p>
						</div>
						<div class="order_descr">
							<div>
								<?php showSinglePostContent(244, 246, $lang); ?>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-4 how_to_pay">
						<div class="picture">
							<span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p><?php showSinglePostTitle(253, 255, $lang) ?></p>
						</div>
						<div class="order_descr">
							<div>
								<?php showSinglePostContent(253, 255, $lang); ?>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-4 how_to_receive">
						<div class="picture">
							<span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p><?php showSinglePostTitle(260, 262, $lang) ?></p>
						</div>
						<div class="order_descr">
							<div>
								<?php showSinglePostContent(260, 262, $lang); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<div class="container-fluid custom_order" id="cust">
			<div class="row">
				<div class="custom_image col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img src="<?php showSinglePostImage(266, 268, $lang); ?>" alt="custom order image" class="img-fluid">
				</div>
				<div class="custom_descr col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="container-fluid">
						<div class="row">
							<div class="custom_headline col-12">
								<span class="custom_headtext"><?php showSinglePostTitle(266, 268, $lang) ?></span>
							</div>
							<div class="custom_text col-12">
								<?php showSinglePostContent(266, 268, $lang); ?>
								<div class="custom_button_wrapper">	
									<button class="custom_button" data-toggle="modal" data-target=".customorder_form">
										<span>
											<?php 
												if($lang == "uk"){
													echo "зробити індивідуальне замовлення";
												}else{
													echo "your individual order";
												} 
											?>
										</span>
									</button>
								</div>	
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>

		<div class="about" id="abus">
			<div class="about_image" data-src="<?php showSinglePostImage(274, 276, $lang); ?>"  
															 data-pos-x="left" 
															 data-parallax id="top"
															 data-over-scroll-fix="true">
			</div>
			<div class="col-12 about_headline">
				<div class="about_headtext"><?php showSinglePostTitle(274, 276, $lang) ?></div>
			</div>
			<div class="container-fluid about_container">
				<div class="row">
					  <div class="about_text col-12">
							<?php dynamic_sidebar("logo_about"); ?>
							<?php showSinglePostContent(274, 276, $lang); ?>
						</div>
				</div>
			</div> 
		</div>


		<div class="stories" id="ourstor">
			<div class="stories_headline">
				<span class="stories_headtext">
					<?php showCategoryName(4, 45, $lang); ?>
				</span>
			</div>
			<div class="container-fluid stories_container">
				<div class="row owl-carousel owl-theme stories_slider">
				 	<?php 
						//no post duplicates
						$query = new WP_Query(array( 'cat' => '-1,-125,-73,-75,-80,-82,-89,-91,-93,-95,-101,-103,-107,-109,-110,-112' ));
						if( $query->have_posts() ){
								while( $query->have_posts() ){ $query->the_post();
					?>
					<!-- post -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stories_wrapper">
							<div class="row align-items-center">
								<div class="story_image col-lg-3 col-md-4 col-sm-12">
									<?php the_post_thumbnail('full', 'class=img-fluid'); ?>
								</div>
								<div class="story_text col-lg-9 col-md-8 col-sm-12">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					<?php
							}
							wp_reset_postdata(); // сбрасываем переменную $post
						} 
						else echo 'Записи отсутствуют';
					?>
				</div>
			</div>
		</div>	



	<!-- ***********ALL FORMS************ -->
	<?php get_template_part('forms'); ?>
	<!-- ***********ALL FORMS************ -->

	</section>

	<?php get_footer(); ?>
