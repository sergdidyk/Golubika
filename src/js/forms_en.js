$(function(){
		/* -------- FORMS VALIDATION (Jquery validate plugin)--------- */
	jQuery.validator.addMethod("phonenumber", function(phone_number, element) {
	    phone_number = phone_number.replace(/\s+/g, "");
	    return this.optional(element) || phone_number.length > 9 && 
	    phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
	}, "<br />Your phone number is not valid.");

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
				required: "Please, enter your name",
				maxlength: "Max number of characters: 30"
			}, 
			callback_phone: {
				required: "Please, enter your phone number so we can call you"
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
				required: "Please, enter your name here",
				maxlength: "Max number of characters: 30"
			}, 
			order_phone: {
				required: "Please, enter your phone number so we can call you"
			}, 
			order_email: {
				required: "Please, enter your email",
				email: "Please, enter valid email address"
			},
			order_comment: {
				maxlength: "Max number of characters: 200"
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
				required: "Please, enter your name here",
				maxlength: "Max number of characters: 30"
			}, 
			custom_phone: {
				required: "Please, enter your phone number so we can call you"
			},
			custom_email: {
				required: "Please, enter your email",
				email: "Please, enter valid email address"
			},
			custom_comment: {
				required: "We need your idea description...",
				maxlength: "Max number of characters: 300"
			}
		}
	});
	/* --------END OF FORMS VALIDATION ---------- */

	/*-------------FORMS SENDING------------------*/
	//Callback form
	$("#call_me_en").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/callback_mail.php",
			data: $("#call_me_en").serialize(),
		}).done(function(){
			$("#call_me_en").modal("toggle");
	    $("#call_me_en").trigger("reset");
	    setTimeout(function(){
	     $("#callback_feedback").modal("show");
	    }, 3000);
	 	});
	});

	//Order form
	$("#order_form_en").submit(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/order_mail.php",
				data: $("#order_form_en").serialize(),
			}).done(function(){
				$("#order_form_en").modal("toggle");
		    $("#order_form_en").trigger("reset");
		    setTimeout(function(){
		     $("#order_feedback").modal("show");
		    }, 3000);
		 	});
		});

	//Custom order form
	$("#customorder_form_en").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "http://golubika-bags.com/wp-content/themes/Golubika/mail/ind_mail.php",
			data: $("#customorder_form_en").serialize(),
		}).done(function(){
			$("#customorder_form_en").modal("toggle");
	    $("#customorder_form_en").trigger("reset");
	    setTimeout(function(){
	     $("#customOrder_feedback").modal("show");
	    }, 3000);
	 	});
	});

	/*----------END OF FORMS SENDING--------------*/
});