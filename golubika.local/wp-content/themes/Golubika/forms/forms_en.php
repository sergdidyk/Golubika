	<!-- Callback form -->
	<form method="post"
				class="callback_form modal fade" 
				id="callback" tabindex="-1" 
				aria-labelledby="orderForm"
				aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="callbackForm">Your contacts</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
				<div class="modal-body">
					<div class="form-group">
            <label class="control-label col-12" for="callback_name">Your name:</label>
            <div class="col-12">
              <input type="text" class="form-control" id="callback_name" name="callback_name" placeholder="Please, enter your name" required />
            </div>
          </div>
					<div class="form-group">
            <label class="control-label col-12" for="callback_phone">Your phone number:</label>
            <div class="col-12">
              <input type="tel" class="form-control" id="callback_phone" name="callback_phone" placeholder="Please, enter your phone number" required />
            </div>
          </div>
				</div>
	      <div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" value="Submit" class="send_form btn" id="callback_btn">Contact me</button>
		    </div>
			</div>
		</div>
	</form>
	

	<!-- Order form -->
	<form method="post"
				class="order_form modal fade" 
				tabindex="-1" 
				aria-labelledby="orderForm" 
				aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="orderForm">Your order</h5>
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
              <input type="text" class="form-control" id="order_name" name="order_name" placeholder="Your name" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <input type="phone" class="form-control" id="order_phone" name="order_phone" placeholder="Your phone number" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <input type="email" class="form-control" id="order_email" name="order_email" placeholder="Your email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <textarea class="form-control" id="order_comment" name="order_comment" rows="3" placeholder="Your comments..."></textarea>
            </div>
          </div>
				</div>

	      <div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" value="Submit" class="send_form btn">Send order</button>
	      </div>
			</div>
		</div>
	</form>
	

	<!-- Individual order form -->
	<form method="post"
			  class="modal fade customorder_form"
			  tabindex="-1"
			  aria-labelledby="customOrderForm"
			  aria-hidden="true">
		<div class="modal-dialog" role="document">
	    <div class="modal-content">
				<div class="modal-header">
	        <h5 class="modal-title" id="customOrderForm">Individual order</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
      	</div>
	
				<div class="modal-body">
					<div class="form-group">
            <label class="control-label col-12" for="custom_name">Your name:</label>
            <div class="col-12">
              <input type="text" class="form-control" id="custom_name" name="custom_name" placeholder="Please, enter your name" required />
            </div>
          </div>
					<div class="form-group">
            <label class="control-label col-12" for="custom_phone">Your phone number:</label>
            <div class="col-12">
              <input type="phone" class="form-control" id="custom_phone" name="custom_phone" placeholder="Please, enter your phone number" required />
            </div>
          </div>
          <div class="form-group">
          	<label class="control-label col-12" for="custom_phone">Your email:</label>
            <div class="col-12">
              <input type="email" class="form-control" id="custom_email" name="custom_email" placeholder="Your email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="col-12">
              <textarea class="form-control" id="custom_comment" name="custom_comment" rows="4" placeholder="Please, describe your idea..." required></textarea>
            </div>
          </div>
				</div>

				<div class="modal-footer">
	        <button type="button" class="close_form btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="send_form btn">Send message</button>
	      </div>
			</div>
		</div>	
	</form>
