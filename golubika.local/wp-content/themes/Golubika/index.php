	
	<?php 
		get_header(); 	 
		
		global $lang;
		$lang = pll_current_language(); //определяем текущий язык страницы (функция Polylang);
	?>

	<section>

		<?php get_template_part('catalog'); ?>


		<div class="order">
			<div class="order_headline" id="ord">
				<span class="order_headtext">як замовити</span>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 how_to_order">
						<div class="picture">
							<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p>замовити</p>
						</div>
						<div class="order_descr">
							<div>
								<p>Все дуже просто - достатньо натиснути на кнопку “Замовити” поряд з уподобаною моделлю та заповнити необхідні дані.</p>
								<p>Далі ми зв'яжемося з Вами для узгодження деталей замовлення.</p>
								<p>Поспілкуватися з нами, щось уточнити та замовити також можливо по телефону, Viber, Telegram та e-mail.</p>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-4 how_to_pay">
						<div class="picture">
							<span><i class="fa fa-credit-card" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p>оплатити</p>
						</div>
						<div class="order_descr">
							<div>
								<p>Коли усі деталі узгоджені, ми запропонуємо один з наступних способів оплати:</p>
								<p>1. Передоплата на карту ПриватБанк (реквізити ми повідомимо по смс)</p>
								<p>або</p>
								<p>2. Оплата при отриманні замовлення у відділенні Нової Пошти (вартість послуги складає 20 грн + 2% від суми замовлення).</p>
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 col-md-4 how_to_receive">
						<div class="picture">
							<span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
						</div>
						<div class="order_action">
							<p>отримати</p>
						</div>
						<div class="order_descr">
							<div>
								<p>Ми здійснюємо доставку по Україні та усьому світу.</p>
								<p>Доставка по Україні здійснюється Новою Поштою - на відділення або адресна доставка.</p>
								<p>Доставка на відділення безкоштовна.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

		<div class="container-fluid custom_order" id="cust">
			<div class="row">
				<div class="custom_image col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<img alt="image" src="<?php echo get_template_directory_uri(); ?>/img/custom_order.jpg" alt="custom order image" class="img-fluid">
				</div>
				<div class="custom_descr col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="container-fluid">
						<div class="row">
							<div class="custom_headline col-12">
								<span class="custom_headtext">індивідуальні &nbspзамовлення</span>
							</div>
							<div class="custom_text col-12">
								<p>Більшість виробів <span>GOLUBIKA</span> - це результат натхнення якоюсь конкретною  людиною, її унікальністю та стилем. Так, готуючи подарунок на день народження Андрію, народилася чоловіча сумка на пояс. Він пряцює у дельфінарії та постійно носить усе із собою. Одного разу, на хендмейд-маркеті до мене підійшов Анатолій та спитав, чи можу я зробити йому cover на ноутбук.
								<p>Ми з радістю створимо щось унікальне для вас, про вас та разом з вами. Виконати вподобану модель у іншому кольорі, зробити авторський принт, створити сумку такої форми, про яку ви давно мрієте - ми з радістю попрацюємо над цим. Напишіть нам!</p>
								<div class="custom_button_wrapper">	
									<button class="custom_button" data-toggle="modal" data-target=".customorder_form">
										<span>зробити індивідуальне замовлення</span>
									</button>
								</div>	
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>

		<div class="about" id="abus">
			<div class="about_image" data-src="<?php echo get_template_directory_uri(); ?>/img/test.jpg"  data-pos-x="left" data-parallax id="top"></div>
			<div class="col-12 about_headline">
				<div class="about_headtext">про нас</div>
			</div>
			<div class="container-fluid about_container">
				<div class="row">
					  <div class="about_text col-12">
							
							<?php dynamic_sidebar("logo_about"); ?>
							<p id="aboutFirstLine">- це сумки та аксесуари з фетру, які створені з любов'ю та натхненням зробити щось унікальне саме для вас.</p>
							<p>Ми прагнемо поєднати відчуття краси та практичність у користуванні, зробити наші вироби зручними та створеними для життя. </p>
							<p>Ми віримо, що майстерність - в деталях: у комірці зі стічкою, за яку легко потягнути та дістати мобільний телефон, у невидимих магнітах, що легко відстібуються та надійно тримають, у принтах, що зроблені вручну стародавнім мистецтвом вибійки. </p>
							<p>Ми не маємо наміру опанувати весь світ, бо знаємо, що своє до свого лине. Але відчуваємо, що наші вироби відгукнуться саме тим, для кого вони народилися.</p>
						</div>
				</div>
			</div> 
		</div>


		<div class="stories" id="ourstor">
			<div class="stories_headline">
				<!--Заголовки содержат уникальный id. Без условия Polylang не переводит из админки-->
				<span class="stories_headtext"><?php if($lang == "uk"){
						echo get_cat_name(4);
					}else{
						echo get_cat_name(45);
					} ?></span>
			</div>
			<div class="container-fluid stories_container">
				<div class="row owl-carousel owl-theme stories_slider">
				  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>
		</div>	



	<!-- ***********ALL FORMS************ -->
	
	<form action="#" method="#" class="callback_form modal fade" tabindex="-1" role="dialog" aria-labelledby="orderForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="callbackForm">Ваші контакти</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
				<div class="modal-body">
					<div class="form-group">
            <label class="control-label col-12" for="callback_name">Ваше ім'я:</label>
            <div class="col-12">
              <input type="text" class="form-control" id="callback_name" name="callback_name" placeholder="Введіть тут Ваше ім'я" required />
            </div>
          </div>
					<div class="form-group">
            <label class="control-label col-12" for="callback_phone">Ваш телефон:</label>
            <div class="col-12">
              <input type="phone" class="form-control" id="callback_phone" name="callback_phone" placeholder="Введіть тут Ваш номер телефону" required />
            </div>
          </div>
				</div>
	      <div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Закрити</button>
	        <button type="submit" value="Submit" class="send_form btn">Зателефонуйте мені</button>
		    </div>
			</div>
		</div>
	</form>

	<form action="#" method="#" class="order_form modal fade" tabindex="-1" role="dialog" aria-labelledby="orderForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="orderForm">Замовлення</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>	        
	      </div>

				<div class="modal-body">
					<div class="form-group">
            <div class="input-group col-12">
					    <span class="input-group-addon input_colored"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
					    <input id="order_product" type="text" class="form-control" name="order_product" readonly>
					  </div>
						<div class="input-group col-12">
					    <span class="input-group-addon input_colored"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
					    <input id="order_price" type="text" class="form-control" name="order_price" readonly>
					  </div>
					  <div class="input-group col-12">
					  	<input id="order_product_descr" type="hidden" class="form-control" name="order_descr" readonly>
					  </div>
          </div>

					<div class="form-group">
            <div class="col-12">
              <input type="text" class="form-control" id="order_name" name="order_name" placeholder="Ваше ім'я" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <input type="phone" class="form-control" id="order_phone" name="order_phone" placeholder="Ваш номер телефону" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <input type="email" class="form-control" id="order_email" name="order_email" placeholder="Ваш email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <textarea type="text" class="form-control" id="order_comment" name="order_comment" rows="3" placeholder="Коментар до Вашого замовлення..."></textarea>
            </div>
          </div>
				</div>

	      <div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Закрити</button>
	        <button type="submit" value="Submit" class="send_form btn">Відправити замовлення</button>
	      </div>
			</div>
		</div>
	</form>
	
	<form action="#" method="#" class="modal fade customorder_form" tabindex="-1" role="dialog" aria-labelledby="customOrderForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    <div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="customOrderForm">Індивідуальне замовлення</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
	
				<div class="modal-body">
					<div class="form-group">
            <label class="control-label col-12" for="custom_name">Ваше ім'я:</label>
            <div class="col-12">
              <input type="text" class="form-control" id="custom_name" name="custom_name" placeholder="Введіть тут Ваше ім'я" required />
            </div>
          </div>
					<div class="form-group">
            <label class="control-label col-12" for="custom_phone">Ваш телефон:</label>
            <div class="col-12">
              <input type="phone" class="form-control" id="custom_phone" name="custom_phone" placeholder="Введіть тут Ваш номер телефону" required />
            </div>
          </div>
          <div class="form-group">
          	<label class="control-label col-12" for="custom_phone">Ваш email:</label>
            <div class="col-12">
              <input type="email" class="form-control" id="custom_email" name="custom_email" placeholder="Ваш email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <textarea type="text" class="form-control" id="custom_comment" name="custom_comment" rows="4" placeholder="Будь-ласка, опишіть тут Вашу ідею..." required></textarea>
            </div>
          </div>
				</div>

				<div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Закрити</button>
	        <button type="submit" class="send_form btn">Відправити повідомлення</button>
	      </div>
			</div>
		</div>	
	</form>

		<!-- ***********ALL FORMS************ -->

	</section>

	<?php get_footer(); ?>
