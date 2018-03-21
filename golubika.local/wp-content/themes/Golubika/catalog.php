		
		<?php 
			global $lang;
			$lang = pll_current_language();

			function selectProductAvailability($avl, $lang){
				if( $avl === false  ){
					if($lang == "uk"){
							    $text = 'Поле не вибрано';
						}else{$text = 'Field is not specified';}	
				}
				if( $avl == 'available' ){
					if($lang == "uk"){
						    $text = 'В наявності';
					}else{$text = 'Available';}	
				}
				if( $avl == 'not_available' ){
					if($lang == "uk"){
						    $text = 'Немає в наявності';
					}else{$text = 'Not available';}	
				}
				if( $avl == 'pre_order' ){
					if($lang == "uk"){
						    $text = 'Доступний за передзамовленням';
					}else{$text = 'Available for pre-order';}	
				}
				echo $text;
			}

			function showProductPhoto($main_photo, $second_photo, $third_photo){
				echo $main_photo;
				if($second_photo){echo ','.$second_photo;};
				if($third_photo){echo ','.$third_photo;};	
			}

			function showProductPrice($numPrice, $lang){
				echo $numPrice;
				if ($lang == "uk"){echo " грн";
				}else{echo " &euro;";} 
			}

			function showOldPrice($numOldPrice, $lang){
				echo $numOldPrice;
				if ($lang == "uk"){echo " грн";
				}else{echo " &euro;";} 
			}

			function showOrderBtnText($lang){
				if ($lang == "uk"){echo "замовити";
				}else{echo "order now";}
			}
		?>


		<!-- CATALOG -->

		<div class="catalogue" id="cat">

				<!-- New collection -->
				<div class="container-fluid cat_headline">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext"> <?php showCategoryName(73, 75, $lang); ?> </span>
						</div>
					</div>
				</div>

				<div class="novelty container-fluid">
					<div class="row">
					<?php 
						//post duplicate prevention
						$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-80,-82,-89,-91,-93,-95,-101,-103,-107,-109,-110,-112' ));
						if( $query->have_posts() ){
								while( $query->have_posts() ){ $query->the_post();
					?>
						<!-- post -->			
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);												
													?>"				
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text"><?php
														showOrderBtnText($lang);
													?>
											</div>
									  </div>
		  				  </div>					  
							  <div class="description_container">
									<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' ); ?></div>
									<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
									<div class="prod_status">
										<?php 
											$avl = carbon_get_the_post_meta('crb_order_availability');
											selectProductAvailability($avl, $lang);
											?>
									</div>
									<div class="prod_currentprice">
										<span>
											<?php
												$numPrice = carbon_get_the_post_meta('crb_good_price'); 
												showProductPrice($numPrice, $lang);
											?>
										</span>
									</div>	
								</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>
				</div>	
				<!-- Post end -->
				<!-- New collection end -->
				
				
				<!-- Bags -->
				<div class="container-fluid cat_headline" id="bags">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext"><?php showCategoryName(80, 82, $lang); ?> </span>
						</div>
					</div>
				</div>

				<div class="bags container-fluid">
					<div class="row">
					<?php 
						//post duplicate prevention
						$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-73,-75,-89,-91,-93,-95,-101,-103,-107,-109,-110,-112' ));
						if( $query->have_posts() ){
								while( $query->have_posts() ){ $query->the_post();
					?>
						<!-- post -->			
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);												
													?>" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">
								  			<?php
													showOrderBtnText($lang);
												?>
											</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' ); ?></div>
									<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
									<div class="prod_status">
										<?php 
											$avl = carbon_get_the_post_meta('crb_order_availability');
											selectProductAvailability($avl, $lang);
										?>
									</div>
									<div class="prod_currentprice">
										<span>
											<?php
												$numPrice = carbon_get_the_post_meta('crb_good_price'); 
												showProductPrice($numPrice, $lang);
											?>
										</span>
									</div>	
								</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>
				</div>
				<!-- Post end -->
				<!-- Bags category end -->


				<!-- Accessories -->
				<div class="container-fluid cat_headline" id="accs">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext"> <?php showCategoryName(85, 87, $lang); ?></span>
						</div>
					</div>
				</div>
			
				<!-- Big accessories-->
				<div class="accessories container-fluid">
					<div class="row">
						<?php 
							//post duplicate prevention
							$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-73,-75,-80,-82,-93,-95,-101,-103,-107,-109,-110,-112' ));
							if( $query->have_posts() ){
									while( $query->have_posts() ){ $query->the_post();
						?>
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);												
													?>" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">
												<?php
													showOrderBtnText($lang);
												?>
									  	</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' );?></div>
									<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
									<div class="prod_status">
										<?php 
											$avl = carbon_get_the_post_meta('crb_order_availability');
											selectProductAvailability($avl, $lang);
										?>
									</div>
									<div class="prod_currentprice">
										<span>
											<?php
												$numPrice = carbon_get_the_post_meta('crb_good_price'); 
												showProductPrice($numPrice, $lang); 
											?>
										</span>
									</div>	
								</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>
				</div>
				<!-- Big accessories end-->


				<!-- Small accessories -->
				<div class="accessories container-fluid">
					<div class="row">

						<?php 
							//post duplicate prevention
							$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-73,-75,-80,-82,-89,-91,-101,-103,-107,-109,-110,-112' ));
							if( $query->have_posts() ){
									while( $query->have_posts() ){ $query->the_post();
						?>
						<div class="good_item little_things">
								<div class="image_container">
										<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);														
													?>" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">
									  		<?php
													showOrderBtnText($lang);
												?>
											</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' );?></div>
									<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
									<div class="prod_status">
										<?php 
											$avl = carbon_get_the_post_meta('crb_order_availability');
											selectProductAvailability($avl, $lang);
										?>
									</div>
									<div class="prod_currentprice">
										<span>
											<?php
												$numPrice = carbon_get_the_post_meta('crb_good_price'); 
												showProductPrice($numPrice, $lang);
											?>
										</span>
									</div>	
								</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>	
				</div>
				<!-- Small accessories end -->
				<!-- Accessories end -->


				<!-- For men -->
				<div class="container-fluid cat_headline" id="men">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext"><?php showCategoryName(101, 103, $lang); ?></span>
						</div>
					</div>
				</div>

				<div class="for_men container-fluid">
					<div class="row">
						<?php 
							//post duplicate prevention
							$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-73,-75,-80,-82,-89,-91,-93,-95,-107,-109,-110,-112' ));
							if( $query->have_posts() ){
									while( $query->have_posts() ){ $query->the_post();
						?>
						<!-- post -->
						<div class="good_item col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="image_container">
									<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);												
													?>" 
											 class="magnific_gallery main_photo img-fluid"		
											 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
								  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
								  	<div class="buy_text"><?php showOrderBtnText($lang); ?></div>
								  </div>
	  				  </div>
							<div class="description_container">
								<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' );?></div>
								<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
								<div class="prod_status"><?php $avl = carbon_get_the_post_meta('crb_order_availability');
																								selectProductAvailability($avl, $lang);?>
								</div>
								<div class="prod_currentprice">
									<span>
										<?php
											$numPrice = carbon_get_the_post_meta('crb_good_price'); 
											showProductPrice($numPrice, $lang);
										?>
									</span>
								</div>	
							</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>
				</div>
				<!-- For men end-->


				<div class="container-fluid cat_headline" id="sale">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext"><?php showCategoryName(107, 109, $lang); ?></span>
						</div>
					</div>
				</div>

				<div class="sale container-fluid">
					<div class="row">
						<?php 
							//post duplicate prevention
							$query = new WP_Query(array( 'cat' => '-1,-125,-4,-45,-73,-75,-80,-82,-89,-91,-93,-95,-101,-103,-110,-112'));
							if( $query->have_posts() ){
									while( $query->have_posts() ){ $query->the_post();
						?>
						<!-- post -->
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
							<div class="image_container">
								<img alt="image" data-links="<?php 
														$main_photo = carbon_get_the_post_meta('crb_main_photo');
														$second_photo = carbon_get_the_post_meta('crb_secondary_photo1');
														$third_photo = carbon_get_the_post_meta('crb_secondary_photo2');
														showProductPhoto($main_photo, $second_photo, $third_photo);												
													?>" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
							  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
							  	<div class="buy_text"><?php showOrderBtnText($lang); ?></div>
							  </div>
		  				</div>
							<div class="description_container">
								<div class="prod_name"><?php echo carbon_get_the_post_meta( 'crb_good_name' );?></div>
								<div class="prod_descr"><?php echo carbon_get_the_post_meta( 'crb_good_descr' ); ?></div>
								<div class="prod_status"><?php $avl = carbon_get_the_post_meta('crb_order_availability');
																							 selectProductAvailability($avl, $lang);?></div>
								<div class="container_fluid">
									<div class="row">
										<div class="prod_oldprice col-6">
											<span>
												<?php
													$numPrice = carbon_get_the_post_meta('crb_good_price'); 
													showProductPrice($numPrice, $lang);
												?>
											</span>
									  </div>	
										<div class="prod_newprice col-6">
											<span>
												<?php
													$numOldPrice = carbon_get_the_post_meta('crb_good_old_price'); 
													showProductPrice($numOldPrice, $lang);
												?>
											</span>
										</div>	
									</div>	
								</div>
							</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // reset variable $post
							} 
							else echo 'Отсутствуют товары в категории';
						?>
					</div>
				</div>
		
		</div>  

		<!-- Catalog end -->