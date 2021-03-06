$(function(){
		/* -------- FORMS VALIDATION (Jquery validate plugin)--------- */
	jQuery.validator.addMethod("phonenumber", function(phone_number, element) {
	    phone_number = phone_number.replace(/\s+/g, "");
	    return this.optional(element) || phone_number.length > 9 && 
	    phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
	}, "<br />Будь-ласка, вкажіть вірний номер телефону");

	$(".callback_form").validate({
		rules: {
			callback_name: {
				required: true,
				maxlength: 20
			}, 
			callback_phone: {
				required: true,
				phonenumber: true
			}
		}, 
		messages: {
			callback_name: {
				required: "Будь-ласка, введіть своє ім'я",
				maxlength: "Максимальна кількість символів: 30"
			}, 
			callback_phone: {
				required: "Введіть свій телефон, щоб ми могли зателефонувати Вам"
			}
		}
	});

	$(".order_form").validate({
		rules: {
			order_name: {
				required: true,
				maxlength: 30
			}, 
			order_phone: {
				required: true,
				phonenumber: true
			}, 
			order_email: {
				required: true,
				email: true
			},
			order_comment: {
				maxlength: 200
			}
		}, 
		messages: {
			order_name: {
				required: "Будь-ласка, введіть своє ім'я",
				maxlength: "Максимальна кількість символів: 30"
			}, 
			order_phone: {
				required: "Введіть свій телефон, щоб ми могли зателефонувати Вам"
			}, 
			order_email: {
				required: "Будь-ласка, введіть свій email",
				email: "Введіть вірний формат email адреси"
			},
			order_comment: {
				maxlength: "Максимальна кількість символів: 200"
			}
		}
	});

	$(".customorder_form").validate({
		rules: {
			custom_name: {
				required: true,
				maxlength: 20
			}, 
			custom_phone: {
				required: true,
				phonenumber: true
			},
			custom_email: {
				required: true,
				email: true
			},
			custom_comment: {
				required: true,
				maxlength: 300
			}
		}, 
		messages: {
			custom_name: {
				required: "Будь-ласка, введіть своє ім'я",
				maxlength: "Максимальна кількість символів: 30"
			}, 
			custom_phone: {
				required: "Введіть свій телефон, щоб ми могли зателефонувати Вам"
			},
			custom_email: {
				required: "Будь-ласка, введіть свій email",
				email: "Введіть вірний формат email адреси"
			},
			custom_comment: {
				required: "Нам потрібен короткий опис Вашої ідеї",
				maxlength: "Максимальна кількість символів: 300"
			}
		}
	});
	/* --------END OF FORMS VALIDATION ---------- */


	/*-------------FORMS SENDING------------------*/
	//Callback form
	$("#call_me").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/callback_mail.php",
			data: $("#call_me").serialize(),
		}).done(function(){
			$("#call_me").modal("toggle");
	    $("#call_me").trigger("reset");
	    setTimeout(function(){
	     $("#callback_feedback").modal("show");
	    }, 3000);
	 	});
	});

	//Order form
	$("#order_form").submit(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/order_mail.php",
				data: $("#order_form").serialize(),
			}).done(function(){
				$("#order_form").modal("toggle");
		    $("#order_form").trigger("reset");
		    setTimeout(function(){
		     $("#order_feedback").modal("show");
		    }, 3000);
		 	});
		});

	//Custom order form
	$("#customorder_form").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/ind_mail.php",
			data: $("#customorder_form").serialize(),
		}).done(function(){
			$("#customorder_form").modal("toggle");
	    $("#customorder_form").trigger("reset");
	    setTimeout(function(){
	     $("#customOrder_feedback").modal("show");
	    }, 3000);
	 	});
	});

	/*----------END OF FORMS SENDING--------------*/


});