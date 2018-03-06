		
		<?php 
			global $lang;
			$lang = pll_current_language();

      /*Функция вывода имени категории в катомной таксономии в зависимости от полученного id*/
			function echoName($item_id, $taxonomy_name){
				$term = get_term($item_id, $taxonomy_name);
				$name = $term->name;
				echo($name);
			}

		?>


		<!-- Catalog start -->

		<div class="catalogue" id="cat">

				<!-- New collection -->

				<div class="container-fluid cat_headline">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">
								<?php 
									if($lang == "uk"){echoName(70 , 'catalog');
															}else{echoName(72 , 'catalog');}
							  ?>													
							</span>
						</div>
					</div>
				</div>

				
				<div class="novelty container-fluid">
					<div class="row">

					<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="good_item col-lg-3 col-sm-6 col-xs-12">
								<div class="image_container">
										<img alt="image" data-links="<?php echo get_template_directory_uri(); ?>/img/range/new_collection/1.jpg"
												 class="magnific_gallery main_photo img-fluid" 
												 src="<?php echo get_template_directory_uri(); ?>/img/range/new_collection/1.jpg"/>
									  <div class="buy_button buy_desktop" data-toggle="modal" data-target=".order_form">
									  	<div class="buy_text">Замовити</div>
									  </div>
		  				  </div>
								<div class="description_container">
									<div class="prod_name">Кругла сумка</div>
									<div class="prod_descr">cіра з трав'яним принтом, двома відділеннями та комірцем для мобільного</div>
									<div class="prod_status">В наявності</div>
									<div class="prod_currentprice"><span>1500 грн</span></div>	
								</div>
						</div>
						
					<?php endwhile; ?>
						
					</div>
				</div>	

				<!-- New collection end -->
				




				<div class="container-fluid cat_headline" id="bags">
					<div class="row cat_headline_inside">
						<div class="col-12">
							<span class="cat_headtext">сумки</span>
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