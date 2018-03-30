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
			var $this 		= $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"100%"},300);
			$slidelem.find("span").stop(true,true).fadeIn();
			$this.addClass("button_c_fb");
		},
		function(){
			var $this 		= $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"40px"},200);
			$slidelem.find("span").stop(true,true).fadeOut();
			$this.removeClass("button_c_fb");
		}
	);

	$(".slidebttn_ig").hover(
		function(){
			var $this 		= $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"100%"},300);
			$slidelem.find("span").stop(true,true).fadeIn();
			$this.addClass("button_c_ig");
		},
		function(){
			var $this 		= $(this);
			var $slidelem 	= $this.prev();
			$slidelem.stop().animate({"width":"40px"},200);
			$slidelem.find("span").stop(true,true).fadeOut();
			$this.removeClass("button_c_ig");
		}
	);

					
		/* Tooltip Bootstrap activation (for callback button)*/
    $('[data-toggle="tooltip"]').tooltip();    

    /* main_nav onscroll animation*/
    $(window).on("scroll", function(){
    	if($(this).scrollTop()>100){
    		$(".navbar").removeClass("main.nav").addClass("main_nav_small");
    		$(".logo_nav path").css("fill", "#FEFCFF");
    		$(".navbar-toggler span").css("background-color", "#FEFCFF");
    	}else{
    		$(".navbar").addClass("main.nav").removeClass("main_nav_small");
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
	$(".main_nav a, .top_link, .footer_nav a, #back_to_top").mPageScroll2id();


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

	/* Products animation, Magnific Popup gallery*/
	$(window).scroll(function(){
		var height = $(window).scrollTop();
		if(height>1200){
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
 
      nav: true, // показывать кнопки next и prev 
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



