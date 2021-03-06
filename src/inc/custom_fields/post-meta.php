<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	/* CUSTOM FIELDS FOR catalog, Ukrainian version (all except of SALE category)*/
  Container::make( 'post_meta', 'Добавление товара в категорию каталога. Украинская версия.' )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 73,
                   'taxonomy' => 'category',
                ) )
         ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 80,
                   'taxonomy' => 'category',
                ) )
         ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 89,
                   'taxonomy' => 'category',
                ) )
         ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 93,
                   'taxonomy' => 'category',
                ) )
         ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 101,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Информация о товаре', array(
            Field::make( 'text', 'crb_good_name', 'Название товара' )
                   ->set_help_text( 'Например: <i>Сумка для шопінгу</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),
            Field::make( 'text', 'crb_good_descr', 'Описание товара' )
                   ->set_help_text( 'Например: <i>салатового кольору з принтом паприка</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),
            Field::make( 'select', 'crb_order_availability', 'Выберите наличие товара' )
                    ->set_options( array(
                        'available' => 'В наявності'
                    ) )    
                    ->set_width( 40 )
                    ->add_options( array(
                        'available' => 'В наявності',
                        'not_available' => 'Немає в наявності',
                        'pre_order' => 'Доступний за передзамовленням',
                    ) ),
            Field::make( 'text', 'crb_good_price', 'Укажите цену товара в гривнах' )
                   ->set_help_text( 'Просто цифра, <i>грн</i> писать не надо' )
                   ->set_required( true )
                   ->set_width( 60 ),       
                ) )
        ->add_tab( 'Изображения товара', array(
            Field::make( 'image', 'crb_main_photo', 'Основное фото' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_required( true )
                ->set_help_text( 'Это обязательное фото' ),
            Field::make( 'image', 'crb_secondary_photo1', 'Доп. фото 1' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_help_text( 'Необязательное фото.<br>Добавится в карусель.' ),  
            Field::make( 'image', 'crb_secondary_photo2', 'Доп. фото 2' )
                ->set_value_type( 'url' )
                ->set_width( 33 )  
                ->set_help_text( 'Необязательное фото.<br>Добавится в карусель.' )
        ) );
  /*-------------------------------------------------------------------------------*/

  /* CUSTOM FIELDS FOR catalog, English version (all except of SALE category)*/
    Container::make( 'post_meta', 'Add your product to category of catalog. English version.' )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 75,
                   'taxonomy' => 'category',
                ) )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 82,
                   'taxonomy' => 'category',
                ) )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 91,
                   'taxonomy' => 'category',
                ) )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 95,
                   'taxonomy' => 'category',
                ) )
        ->or_where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 103,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Product information', array(
            Field::make( 'text', 'crb_good_name', 'Product name' )
                   ->set_help_text( 'For example: <i>Shopping bag</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),
            Field::make( 'text', 'crb_good_descr', 'Product description' )
                   ->set_help_text( 'For exapmle: <i>orange colored with tree stamping
2 sections inside, magnet clasp</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),
            Field::make( 'select', 'crb_order_availability', 'Select your product availability' )
                    ->set_options( array(
                        'available' => 'Available'
                    ) )    
                    ->set_width( 40 )
                    ->add_options( array(
                        'available' => 'Available',
                        'not_available' => 'Not available',
                        'pre_order' => 'Available by preorder',
                    ) ), 
            Field::make( 'text', 'crb_good_price', 'Specify the price, EUR' )
                   ->set_help_text( 'Just number, don\'t write <i>EUR</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),       
                ) )
        ->add_tab( 'Product images', array(
            Field::make( 'image', 'crb_main_photo', 'Main photo' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_required( true )
                ->set_help_text( 'This is obligatory photo' ),
            Field::make( 'image', 'crb_secondary_photo1', 'Secondary photo 1' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_help_text( 'This photo is not obligatory.<br>It could be shown in <br>the modal window only.' ),  
            Field::make( 'image', 'crb_secondary_photo2', 'Secondary photo 2' )
                ->set_value_type( 'url' )
                ->set_width( 33 )  
                ->set_help_text( 'This photo is not obligatory.<br>It could be shown in <br>the modal window only.' )
    ));
  /*-------------------------------*/


  /* CUSTOM FIELDS FOR "SALE" SECTION. Ukarainian version */
   Container::make( 'post_meta', 'Добавление товара в категорию каталога РОЗПРОДАЖ. Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 107,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Информация о товаре', array(
            Field::make( 'text', 'crb_good_name', 'Название товара' )
                   ->set_help_text( 'Например: <i>Сумка для шопінгу</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),
            Field::make( 'text', 'crb_good_descr', 'Описание товара' )
                   ->set_help_text( 'Например: <i>салатового кольору з принтом паприка</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),
            Field::make( 'select', 'crb_order_availability', 'Выберите наличие товара' )
                    ->set_options( array(
                        'available' => 'В наявності'
                    ) )    
                    ->set_width( 40 )
                    ->add_options( array(
                        'available' => 'В наявності',
                        'not_available' => 'Немає в наявності',
                        'pre_order' => 'Доступний за передзамовленням',
                    ) ),           
            Field::make( 'text', 'crb_good_price', 'Укажите старую цену товара в гривнах' )
                   ->set_help_text( 'Просто цифра, <i>грн</i> писать не надо. <br> Будет выводиться зачеркнутой' )
                   ->set_required( true )
                   ->set_width( 30 ),           
            Field::make( 'text', 'crb_good_old_price', 'Укажите распродажную цену товара в гривнах' )
                   ->set_help_text( 'Просто цифра, <i>грн</i> писать не надо' )
                   ->set_required( true )
                   ->set_width( 30 ),       
                ) )
        ->add_tab( 'Изображения товара', array(
            Field::make( 'image', 'crb_main_photo', 'Основное фото' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_required( true )
                ->set_help_text( 'Это обязательное фото' ),
            Field::make( 'image', 'crb_secondary_photo1', 'Доп. фото 1' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_help_text( 'Необязательное фото.<br>Добавится в карусель.' ),  
            Field::make( 'image', 'crb_secondary_photo2', 'Доп. фото 2' )
                ->set_value_type( 'url' )
                ->set_width( 33 )  
                ->set_help_text( 'Необязательное фото.<br>Добавится в карусель.' )
        ) );

    /* CUSTOM FIELDS FOR "SALE" SECTION. English version */
    Container::make( 'post_meta', 'Add your product to SALE category. English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 109,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Product information', array(
            Field::make( 'text', 'crb_good_name', 'Product name' )
                   ->set_help_text( 'For example: <i>Shopping bag</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),
            Field::make( 'text', 'crb_good_descr', 'Product description' )
                   ->set_help_text( 'For exapmle: <i>orange colored with tree stamping 2 sections inside, magnet clasp</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),
            Field::make( 'select', 'crb_order_availability', 'Select your product availability' )
                    ->set_options( array(
                        'available' => 'Available'
                    ) )    
                    ->set_width( 40 )
                    ->add_options( array(
                        'available' => 'Available',
                        'not_available' => 'Not available',
                        'pre_order' => 'Available by preorder',
                    ) ),            
            Field::make( 'text', 'crb_good_price', 'Specify old price' )
                   ->set_help_text( 'Just number, don\'t write <i>EUR</i>. <br> It will be shown strikethrough.' )
                   ->set_required( true )
                   ->set_width( 30 ),                  
            Field::make( 'text', 'crb_good_old_price', 'Specify the price for sale, EUR' )
                   ->set_help_text( 'Just number, don\'t write <i>EUR</i>.' )
                   ->set_required( true )
                   ->set_width( 30 ),       
                ) )

        ->add_tab( 'Product images', array(
            Field::make( 'image', 'crb_main_photo', 'Main photo' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_required( true )
                ->set_help_text( 'This is obligatory photo' ),
            Field::make( 'image', 'crb_secondary_photo1', 'Secondary photo 1' )
                ->set_value_type( 'url' )
                ->set_width( 33 )
                ->set_help_text( 'This photo is not obligatory.<br>It could be shown in <br>the modal window only.' ),  
            Field::make( 'image', 'crb_secondary_photo2', 'Secondary photo 2' )
                ->set_value_type( 'url' )
                ->set_width( 33 )  
                ->set_help_text( 'This photo is not obligatory.<br>It could be shown in <br>the modal window only.' )
    ));
  /*------------------------------------*/