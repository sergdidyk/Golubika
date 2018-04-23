$(function(){
	/*Remove fade out effect when window is loaded*/
  $('body').removeClass('fade-out');

	/* Always adjust header height to window height and picture autosize to device screen size */
	function heightDetect(){
		$(".main_head").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	});

	/* Remove animation on hover at mobile version */
  $(window).width(function(){
	 if($(window).width()<768){
	    $(".nav-link").removeClass("hvr-underline-from-center");
	 }
	});

	// Init Skrollr
	window.mobileAndTabletcheck = function() {
	  var check = false;
	  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
	  return check;
	};

	var s = skrollr.init({
      render: function(data) {
      		//Debugging - Log the current scroll position.
          //console.log(data.curTop);
      }
  });	
  var _skrollr = skrollr.get(); // get() returns the skrollr instance or undefined
  if (window.mobileAndTabletcheck()) {
  	$(".about_bcg").css("background-attachment", "scroll");
  	$(".bcg").css("background-attachment", "scroll");
	  _skrollr.destroy();
	}

	
			
	
			
		/* Hamburger menu animation and support functions*/
   var toggler = document.querySelector(".navbar-toggler");
	 var mainNav = document.querySelector(".main_nav");
	 $(toggler).click(function(){
	 	 $(mainNav).toggleClass("main_nav_mob");
	 	 	if($(this).hasClass("collapsed") && !$("body").hasClass("overflowHidden")){
	 	 		$(this).removeClass("collapsed");
	 	 		$("body").addClass("overflowHidden");
	 	 		$(".logo_nav path").css("fill", "#FEFCFF");
		    $(".navbar-toggler span").css("background-color", "#FEFCFF");
		  }else{
	 	 		$(this).addClass("collapsed");
	 	 		$(".logo_nav path").css("fill", "#0C090A");
		    $(".navbar-toggler span").css("background-color", "#0C090A");
		    $("body").removeClass("overflowHidden");
	 	 	}
	 });
	/* Prevent background color change when nav is on top*/
	 $(".nav-item, .dropdown-item").click(function(){
		$(mainNav).removeClass("main_nav_mob");
	});
	/* Prevent scroll when modal is opened*/
	$(window).on("scroll", function(){
	 if($(toggler).hasClass("collapsed")){
	 		$("body").removeClass("overflowHidden");
	 	}
	});
  
  /* Social media buttons animation */
	$(".slidebttn_fb").hover(
		function(){
			var $this 		  = $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"100%"},300);
			$slidelem.find("span").stop(true,true).fadeIn();
			$this.addClass("button_c_fb");
		},
		function(){
			var $this 		  = $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"40px"},200);
			$slidelem.find("span").stop(true,true).fadeOut();
			$this.removeClass("button_c_fb");
		}
	);

	$(".slidebttn_ig").hover(
		function(){
			var $this 		  = $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"100%"},300);
			$slidelem.find("span").stop(true,true).fadeIn();
			$this.addClass("button_c_ig");
		},
		function(){
			var $this 		  = $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"40px"},200);
			$slidelem.find("span").stop(true,true).fadeOut();
			$this.removeClass("button_c_ig");
		}
	);
				
		/* Tooltip Bootstrap activation (for callback button)*/
    $('[data-toggle="tooltip"]').tooltip();    

		/* Navbar Animation */
		var headerBottom = $(".main_head").offset().top + $(".main_head").height();
		// возвращает высоту header
		$(window).on("scroll",function(){
			var stop = Math.round($(window).scrollTop());
			    if (stop > headerBottom){
			    	$(".navbar").addClass("main_nav_small");
			    	$(".logo_nav path").css("fill", "#FEFCFF");
			    	$(".navbar-toggler span").css("background-color", "#FEFCFF");
			    }else{
			    	$(".navbar").removeClass("main_nav_small");
			    	$(".logo_nav path").css("fill", "#0C090A");
    				$(".navbar-toggler span").css("background-color", "#0C090A");
			    }
		});

    /* Close menu on click of link in mobile version. 
    * n+2 in order to except language dropdown from list
    * When language clicked menu is closing.
    */
    $(".nav-item:nth-last-child(n+2)").click(function(){
    	if($(window).width()<768){
    		function nav_change(){
		        $(".navbar-toggler").addClass("collapsed");
		        $(".navbar-collapse").removeClass("show");
		    }
		    nav_change();
		    $("#language_list a").click(function(){
		    	nav_change();
		    });
    	}
    });


   /*Dropdown animation*/
	  $(".dropdown").mouseenter(function(){
	  	$(".dropdown-menu").addClass("zoomIn");
	  	if($(".dropdown-menu").hasClass("zoomOut")){
	  		$(".dropdown-menu").removeClass("zoomOut");
	  	}
	  });
		$(".dropdown").mouseleave(function(){
				$(".dropdown-menu").addClass("zoomOut");
	    	if($(".dropdown-menu").hasClass("zoomIn")){
	    		$(".dropdown-menu").removeClass("zoomIn");
	    	}
	  });
  
	/* --------- Scroll TO Id Plugin-------------*/
	$(".main_nav a, .top_link, .footer_nav a, #back_to_top").mPageScroll2id({
		scrollSpeed: 1500,
		scrollEasing: "easeInOutQuint",
		layout: "vertical",
		appendHash: false
	});


	/* Products animation, Magnific Popup gallery*/
	$('.magnific_gallery').each(function(index , value){
  var gallery = $(this);
  var galleryImages = $(this).data('links').split(',');
    var items = [];
    for(var i=0;i<galleryImages.length; i++){
      items.push({
        src:galleryImages[i],
        title:''
      });
    }
    gallery.magnificPopup({
      mainClass: 'mfp-fade',
      items:items,
      gallery:{
        enabled:true,
        tPrev: $(this).data('prev-text'),
        tNext: $(this).data('next-text')
      },
      type: 'image'
    });
	});

	/*Scroll-to-top button animation*/
	$(window).scroll(function(){
		var height = $(window).scrollTop();
		var to_bottom = Math.floor($(document).height() - height);
		if(to_bottom<=700){
			$('#back_to_top').fadeOut(500);
		}else if(height>1200){
			 $('#back_to_top').css("display", "inline-block");
			 $('#back_to_top').addClass('animated rotateInUpRight');
   	}else{
     	$('#back_to_top').fadeOut(1000);
    	$('#back_to_top').removeClass('animated rotateInUpRight');
    }
	});


	/* Ordered product name and price to readonly order form inputs */
	$(".buy_button").click(function(){
		var x = $(this).parent().parent(); // parent element of 2nd level
		var prod_name = x.find("div.prod_name").html(); 
		var prod_descr = x.find("div.prod_descr").html();
		var ch_prodName = $("#order_product").val(prod_name); // product name to input
		var ch_prodDescr = $("#order_product_descr").val(prod_descr);
		var good_price = x.find(".prod_currentprice>span, .prod_newprice>span").html(); //find product price
		$("#order_price").val(good_price);
	});

	/* STORIES SLIDER OWL carousel*/
	$(".stories_slider").owlCarousel({
      nav: true, // show next and prev buttons 
 			loop: true,
 			center: true,
 			smartSpeed: 500,
      items : 1,
      navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
  });

	/* Date at footer */
	var y = new Date();
	document.getElementById("full_year").innerHTML = " " + y.getFullYear() + " ";

});



