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
});