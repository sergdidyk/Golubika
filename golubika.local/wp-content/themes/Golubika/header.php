<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo( 'name' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap.min.css" />
	  <script src="https://use.fontawesome.com/5b8f932355.js"></script>
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.carousel.min.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl/owl.theme.default.min.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

	  <?php wp_head(); ?>
</head>

<body>
	<script>document.body.className += ' fade-out';</script>
	<header class="main_head" data-src="<?php echo get_template_directory_uri(); ?>/img/snapseed.jpg"  data-pos-x="left" data-parallax id="top">
			
	  <nav class="main_nav navbar fixed-top navbar-toggleable-sm">
	    	
	  	<div class="navbar-toggler navbar-toggler-right collapsed" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false" aria-label="Toggle navigation" role="navigation">
				<span class="bar1"></span>
				<span class="bar2"></span>
				<span class="bar3"></span>
		  </div>

		  <a class="navbar-brand" href="<?php echo home_url(); ?>">
		  	<?php dynamic_sidebar("logo_nav"); ?>
		  </a>
		  
		  <div class="collapse navbar-collapse" id="navbar_content">
		  	<ul class="navbar-nav">
		  	 	<li class="nav-item dropdown">
		  	 		  <a class="nav-link dropdown-toggle hvr-underline-from-center" id="catalog_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#cat">Каталог</a>
		  	 		 	<div class="dropdown-menu animated" id="catalog_list" aria-labelledby="#catalog_dropdown">
			          <a class="dropdown-item" href="#cat">Нова колекція</a>
			          <a class="dropdown-item" href="#bags">Сумки</a>
			          <a class="dropdown-item" href="#accs">Аксесуари</a>
			          <a class="dropdown-item" href="#men">Чоловікам</a>
			          <a class="dropdown-item" href="#sale">Розпродаж</a>
			        </div>
		  	 	</li>
		  	 	<li class="nav-item"><a class="nav-link hvr-underline-from-center" href="#ord">Як замовити</a></li>
		  	 	<li class="nav-item"><a class="nav-link hvr-underline-from-center" href="#cust" data-ps2id-offset="90">Індивідуальні замовлення</a></li>
		  	 	<li class="nav-item"><a class="nav-link hvr-underline-from-center" href="#abus" data-ps2id-offset="-150">Про нас</a></li>
		  	 	<li class="nav-item"><a class="nav-link hvr-underline-from-center" href="#ourstor">Наші історії</a></li>
		  	 	<li class="nav-item"><a class="nav-link hvr-underline-from-center" href="#cont">Контакти</a></li>
		  	 	<li class="nav-item dropdown">
		  	 		  <div class="nav-link dropdown-toggle" id="language_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="navigation">
			          <div><span id="lang_code">ukr</span><i class="fa fa-sort-desc" aria-hidden="true"></i><span id="lang_selector">Оберіть мову / Language select</span></div>
			        </div>
		  	 			<div class="dropdown-menu animated" id="language_list" aria-labelledby="#language_dropdown">
			          <a class="dropdown-item" href="#">Українська</a>
			          <a class="dropdown-item" href="#">English</a>
			        </div>
		  	 	</li>
		  	 </ul> 
		  </div>
	  </nav>		

		<div class="facebook">
			<div class="button_wrap">
				<a class="button_aRight" id="button_aRight_fb"><span>Сторінка GOLUBIKA у Facebook</span></a>
				<a href="https://www.facebook.com/golubika.forbeloved/" class="button_bRight slidebttn_fb" id="button_bRight_fb"><i class="fa fa-facebook icons_opacity" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="ig">
			<div class="button_wrap">
				<a class="button_aRight" id="button_aRight_ig"><span>Світлини GOLUBIKA в Instagram </span></a>
				<a href="https://www.instagram.com/golubika.forbeloved/" class="button_bRight slidebttn_ig" id="button_bRight_ig"><i class="fa fa-instagram icons_opacity" aria-hidden="true"></i></a>
			</div>
		</div>		

		<div class="callback" data-toggle="tooltip" data-placement="left" title="Натисніть щоб замовити зворотній дзвінок!">
			<div class="button_wrap_callback">
				<div class="button_callback" data-toggle="modal" data-target=".callback_form"><i class="fa fa-phone" aria-hidden="true"></i></div>
			</div>
		</div>	
	</header>