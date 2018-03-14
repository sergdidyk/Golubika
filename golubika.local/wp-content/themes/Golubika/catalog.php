		
		<?php 
			global $lang;
			$lang = pll_current_language();
		?>


		<!-- CATALOG -->

		<div class="catalogue" id="cat">

				<!-- New collection -->
				<div class="container-fluid cat_headline">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">
									<?php 
										if($lang == "uk"){
											echo get_cat_name(73);
										}else{
											echo get_cat_name(75);
										} 
									?>																
							</span>
						</div>
					</div>
				</div>

				<div class="novelty container-fluid">
					<div class="row">
					<?php 
						//предотвращение дублирования постов из др. категорий/циклов
						$query = new WP_Query(array( 'cat' => '-4,-45' ));
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
														echo $main_photo;
														if($second_photo){echo ','.$second_photo;};
														if($third_photo){echo ','.$third_photo;};													
													?>"				
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo carbon_get_the_post_meta( 'crb_main_photo' ); ?>"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text"><?php
														if ($lang == "uk"){echo "замовити";
														}else{echo "order now";} 
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
											?>
									</div>
									<div class="prod_currentprice">
										<span>
											<?php
												echo carbon_get_the_post_meta('crb_good_price'); 
												if ($lang == "uk"){echo " грн";
												}else{echo " &euro;";} 
											?>
										</span>
									</div>	
								</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // сбрасываем переменную $post
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
							<span class="cat_headtext">
								<?php 
									if($lang == "uk"){
										echo get_cat_name(80);
									}else{
										echo get_cat_name(82);
									} 
								?>		
							</span>
						</div>
					</div>
				</div>

				<div class="bags container-fluid">
					<div class="row">

						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/bags/1.jpg" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo get_template_directory_uri(); ?>/img/range/bags/1.jpg"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">Замовити</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name">Сумка для шопінгу</div>
									<div class="prod_descr">салатового кольору з принтом паприка</div>
									<div class="prod_status">В наявності</div>
									<div class="prod_currentprice"><span>1200 грн</span></div>	
								</div>
						</div>

					</div>
				</div>



				<div class="container-fluid cat_headline" id="accs">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">аксесуари</span>
						</div>
					</div>
				</div>
			
				<div class="accessories container-fluid">
					<div class="row">
			
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/accessories/laptop1.jpg" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo get_template_directory_uri(); ?>/img/range/accessories/laptop1.jpg"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">Замовити</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name">Чохол для ноутбуку</div>
									<div class="prod_descr">сірого кольору з магнітною застібкою</div>
									<div class="prod_status">В наявності</div>
									<div class="prod_currentprice"><span>650 грн</span></div>	
								</div>
						</div>

						<div class="good_item little_things">
								<div class="image_container">
										<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/accessories/1.jpg" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo get_template_directory_uri(); ?>/img/range/accessories/1.jpg"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">Замовити</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name">Брошки в асортименті</div>
									<div class="prod_descr">застібка на шпильку</div>
									<div class="prod_status">В наявності</div>
									<div class="prod_currentprice"><span>150 грн</span></div>	
								</div>
						</div>

					</div>	
				</div>
			


				<div class="container-fluid cat_headline" id="men">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">чоловікам</span>
						</div>
					</div>
				</div>

				<div class="for_men container-fluid">
					<div class="row">
						<div class="good_item col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="image_container">
									<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/for_men/1.jpg, 
																							 <?php echo get_template_directory_uri(); ?>/img/range/for_men/2.jpg, 
																							 <?php echo get_template_directory_uri(); ?>/img/range/for_men/3.jpg" 
											 class="magnific_gallery main_photo img-fluid" 
											 src="<?php echo get_template_directory_uri(); ?>/img/range/for_men/1.jpg"/>
								  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
								  	<div class="buy_text">Замовити</div>
								  </div>
	  				  </div>
							<div class="description_container">
								<div class="prod_name">Чоловіча сумка на пояс</div>
								<div class="prod_descr">темно синього кольору, з двома відділеннями та магнітною застібкою</div>
								<div class="prod_status">В наявності</div>
								<div class="prod_currentprice"><span>1000 грн</span></div>	
							</div>
						</div>
					</div>
				</div>



				<div class="container-fluid cat_headline" id="sale">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">розпродаж</span>
						</div>
					</div>
				</div>

				<div class="sale container-fluid">
					<div class="row">
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
							<div class="image_container">
								<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/sale/1.jpg" 
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo get_template_directory_uri(); ?>/img/range/sale/1.jpg"/>
							  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
							  	<div class="buy_text">Замовити</div>
							  </div>
		  				</div>
							<div class="description_container">
								<div class="prod_name">Сумка для шопінгу</div>
								<div class="prod_descr">салатового кольору з принтом паприка</div>
								<div class="prod_status">В наявності</div>
								<div class="container_fluid">
									<div class="row">
										<div class="prod_oldprice col-6"><span>1200 грн</span></div>	
										<div class="prod_newprice col-6"><span>900 грн</span></div>	
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
		
		</div>  

		<!-- Catalog end -->