	<!-- Callback form -->
	<form method="post"
				class="callback_form modal fade" 
	      id="call_me" 
	      tabindex="-1" 
	      aria-labelledby="callbackForm" 
	      aria-hidden="true">
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
              <input type="tel" class="form-control" id="callback_phone" name="callback_phone" placeholder="Введіть тут Ваш номер телефону" required />
            </div>
          </div>
				</div>
	      <div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Закрити</button>
	        <button type="submit "class="send_form btn" id="callback_btn">Зателефонуйте мені</button>
		    </div>
			</div>
		</div>
	</form>

	<div class="modal fade show" id="callback_feedback">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body feedback_body">
	        <p>Дякуємо! <br> Найближчим часом ми Вам зателефонуємо.</p>
	        <p>З повагою, Golubika.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm feedback" data-dismiss="modal">OK</button>
	      </div>
	    </div>
	  </div>
	</div>



	<!-- Order form -->
	<form method="post" 
				class="order_form modal fade"
				id="order_form" 
				tabindex="-1" 
				aria-labelledby="orderForm" 
				aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="orderForm">Ваше замовлення</h5>
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
              <textarea class="form-control" id="order_comment" name="order_comment" rows="3" placeholder="Коментар до Вашого замовлення..."></textarea>
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
	
	<div class="modal fade show" id="order_feedback">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body feedback_body">
	        <p>Дякуємо за замовлення! <br> Найближчим часом ми зв'яжемось з Вами для узгодження всіх деталей.</p>
	        <p>З повагою, Golubika.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm feedback" data-dismiss="modal">OK</button>
	      </div>
	    </div>
	  </div>
	</div>


	<!-- Individual order form -->
	<form method="post" 
				class="modal fade customorder_form"
				id="customorder_form" 
				tabindex="-1" 
				aria-labelledby="customOrderForm" 
				aria-hidden="true">
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
              <textarea class="form-control" id="custom_comment" name="custom_comment" rows="4" placeholder="Будь-ласка, опишіть тут Вашу ідею..." required></textarea>
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

	<div class="modal fade show" id="customOrder_feedback">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body feedback_body">
	        <p>Дякуємо! <br> Найближчим часом ми зв'яжемось з Вами для узгодження всіх деталей Вашого індивідуального замовлення.</p>
	        <p>З повагою, Golubika.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-sm feedback" data-dismiss="modal">OK</button>
	      </div>
	    </div>
	  </div>
	</div>