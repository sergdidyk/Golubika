$(function() {
	
  $('body').removeClass('fade-out');

	/* Высота header по высоте экрана и авторазмер рисунка под размер устройства */
	function heightDetect(){
		$(".main_head").css("height", $(window).height());
	}
	heightDetect();
	$(window).resize(function(){
		heightDetect();
	});

	/* Подключение плагина Parallax для header */
		$('.main_head').parallax({imageSrc: "img/snapseed.jpg"});
	
	/* Удаляет анимацию при hover на меню в моб. версии */
    $(window).resize(function(){
	 if($(window).width()<768){
	    $(".nav-link").removeClass("hvr-underline-from-center");
	 }
	});

    /* Анимация hamburger в моб. версии */
   $(".navbar-toggler").click(function(){
    $(".main_nav").toggleClass("main_nav_mob");
	  if($(this).hasClass("collapsed")){
	    $(this).removeClass("collapsed");
	  }else{
	    $(this).addClass("collapsed");
	  }
	 })
   
   /* Анимация кнопок соц. сетей */
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

					
	/* Активация Tooltip Bootstrap (для кнопки callback)*/
    $('[data-toggle="tooltip"]').tooltip();    

    /* Анимация main_nav и центрального лого*/
    $(window).on("scroll", function(){
    	if($(this).scrollTop()>100){
    		$(".navbar").removeClass("main.nav").addClass("main_nav_small");
    	}else if($(this).scrollTop()>5){
    		$(".logo_center path").css("opacity", 0.30);
    	}else{
    		$(".navbar").addClass("main.nav").removeClass("main_nav_small");
    		$(".logo_center path").css("opacity", 0);
    	}
    });

    /* Закрытие меню при клике на ссылку в мобильной версии 
       dropdown на каталоге открываться не будет. n+2 - чтобы исключить из списка
       языковой dropdown. На языковом - меню закрывается при клике на язык*/
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


    /*АНИМАЦИЯ DROPDOWN. Не работает свертывание. проработать*/
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
    
	/* Анимация товаров */

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


});

	