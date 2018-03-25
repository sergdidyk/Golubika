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
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/catalog.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/forms.css" />
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

	  <?php 
	  	wp_head(); 
	  	global $lang;
			$lang = pll_current_language();
		?>
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
		  	 		  <a class="nav-link dropdown-toggle hvr-underline-from-center" 
		  	 		  	 id="catalog_dropdown" data-toggle="dropdown" 
		  	 		  	 aria-haspopup="true" 
		  	 		  	 aria-expanded="false" 
		  	 		  	 href="#cat"><?php showCategoryName(129, 131, $lang) ?>
		  	 		  </a>
  	 		 				<div class="dropdown-menu animated" id="catalog_list" aria-labelledby="#catalog_dropdown">
  			          <a class="dropdown-item" href="#cat"><?php showCategoryName(73, 75, $lang); ?></a>
  			          <a class="dropdown-item" href="#bags"><?php showCategoryName(80, 82, $lang); ?></a>
  			          <a class="dropdown-item" href="#accs"><?php showCategoryName(85, 87, $lang); ?></a>
  			          <a class="dropdown-item" href="#men"><?php showCategoryName(101, 103, $lang); ?></a>
  			          <a class="dropdown-item" href="#sale"><?php showCategoryName(107, 109, $lang); ?></a>
  			        </div>
		  	 	</li>
		  	 	<li class="nav-item">
		  	 		<a class="nav-link hvr-underline-from-center" href="#ord">
		  	 			<?php showCategoryName(110, 112, $lang) ?>
		  	 		</a>
		  	 	</li>
		  	 	<li class="nav-item">
		  	 		<a class="nav-link hvr-underline-from-center" href="#cust" data-ps2id-offset="90">
		  	 			<?php showSinglePostTitle(266, 268, $lang) ?>
		  	 		</a>
		  	 	</li>
		  	 	<li class="nav-item">
		  	 		<a class="nav-link hvr-underline-from-center" href="#abus" data-ps2id-offset="-150">
		  	 			<?php showSinglePostTitle(274, 276, $lang) ?>
		  	 		</a>
		  	 	</li>
		  	 	<li class="nav-item">
		  	 		<a class="nav-link hvr-underline-from-center" href="#ourstor">
		  	 			<?php showCategoryName(4, 45, $lang); ?>
		  	 		</a>
		  	 	</li>
		  	 	<li class="nav-item">
		  	 		<a class="nav-link hvr-underline-from-center" href="#cont">
		  	 		<?php if($lang == "uk"){echo "Контакти";}else{echo "Contacts";} ?>
		  	 	</a>
		  	 </li>
		  	 	<li class="nav-item dropdown">
		  	 		  <div class="nav-link dropdown-toggle" id="language_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="navigation">
			          <div>
			          	<span id="lang_code">
			          		<?php if($lang == "uk"){echo "ukr";}else{echo "eng";} ?>
			          	</span>
			          	<i class="fa fa-sort-desc" aria-hidden="true"></i>
			          	<span id="lang_selector">
			          		<?php if($lang == "uk"){echo "оберіть мову";}else{echo "select language";} ?>
			        		</span>
			        	</div>
		  			  </div>
		  	 			<div class="dropdown-menu animated" id="language_list" aria-labelledby="#language_dropdown">
		  			          <a class="dropdown-item" href="<?php $url = site_url(); echo $url; ?>">Українська</a>
		  			          <a class="dropdown-item" href="<?php $url = site_url('en/'); echo $url; ?>">English</a>
		  			        </div>
		  	 	</li>
		  	 </ul> 
		  </div>
	  </nav>		

		<div class="facebook">
			<div class="button_wrap">
				<a class="button_aRight" id="button_aRight_fb">
					<span>
						<?php 
							if($lang == "uk"){
								echo "Сторінка GOLUBIKA у Facebook";
							}else{
								echo "FB.com/golubika.forbeloved";
							} 
						?>
					</span>
				</a>
				<a href="https://www.facebook.com/golubika.forbeloved/" class="button_bRight slidebttn_fb" id="button_bRight_fb"><i class="fa fa-facebook icons_opacity" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="ig">
			<div class="button_wrap">
				<a class="button_aRight" id="button_aRight_ig">
					<span> 
						<?php 
							if($lang == "uk"){
								echo "Світлини GOLUBIKA в Instagram";
							}else{
								echo "@golubika.forbeloved";
							} 
						?>
					</span>
				</a>
				<a href="https://www.instagram.com/golubika.forbeloved/" class="button_bRight slidebttn_ig" id="button_bRight_ig"><i class="fa fa-instagram icons_opacity" aria-hidden="true"></i></a>
			</div>
		</div>		

		<div class="callback" 
				 data-toggle="tooltip" 
				 data-placement="left" 
				 title="
				 		<?php 
							if($lang == "uk"){
								echo "Натисніть щоб замовити зворотній дзвінок!";
							}else{
								echo "Click to call back!";
							} 
						?>
				 ">
			<div class="button_wrap_callback">
				<div class="button_callback" data-toggle="modal" data-target=".callback_form"><i class="fa fa-phone" aria-hidden="true"></i></div>
			</div>
		</div>	
	</header>