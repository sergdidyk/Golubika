<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	  /* CUSTOM FIELDS FOR NEW COLLECTION*/
  Container::make( 'post_meta', 'Добавление товара в новую коллекцию. Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 73,
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


    Container::make( 'post_meta', 'Add your product to New Collection. English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 75,
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


  /* CUSTOM FIELDS FOR BAGS*/
  Container::make( 'post_meta', 'Добавление товара в раздел "Сумки". Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 80,
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


    Container::make( 'post_meta', 'Add your product to BAGS category. English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 82,
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

   /* CUSTOM FIELDS FOR BIG ACCESSORIES*/
  Container::make( 'post_meta', 'Добавление товара в категорию АКСЕСУАРЫ (большие фото). Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 89,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Информация о товаре', array(
            Field::make( 'text', 'crb_good_name', 'Название товара' )
                   ->set_help_text( 'Например: <i>Чохол для ноутбуку</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Описание товара' )
                   ->set_help_text( 'Например: <i>сірого кольору з магнітною застібкою</i>' )
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


    Container::make( 'post_meta', 'Add your product to ACCESSORIES category (big photos). English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 91,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Product information', array(
            Field::make( 'text', 'crb_good_name', 'Product name' )
                   ->set_help_text( 'For example: <i>Cover for laptop</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Product description' )
                   ->set_help_text( 'For exapmle: <i>grey colored</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),

            Field::make( 'select', 'crb_order_availability', 'Select your product avalibility' )
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

  /* CUSTOM FIELDS FOR SMALL ACCESSORIES*/
  Container::make( 'post_meta', 'Добавление товара в категорию АКСЕСУАРЫ (маленькие фото). Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 93,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Информация о товаре', array(
            Field::make( 'text', 'crb_good_name', 'Название товара' )
                   ->set_help_text( 'Например: <i>Брошки в асортименті</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Описание товара' )
                   ->set_help_text( 'Например: <i>застібка на шпильку</i>' )
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


    Container::make( 'post_meta', 'Add your product to ACCESSORIES category (small photos). English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 95,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Product information', array(
            Field::make( 'text', 'crb_good_name', 'Product name' )
                   ->set_help_text( 'For example: <i>Brooches</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Product description' )
                   ->set_help_text( 'For exapmle: <i>with a pin clasp</i>' )
                   ->set_required( true )
                   ->set_width( 60 ),

            Field::make( 'select', 'crb_order_availability', 'Select your product avalibility' )
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


  /* CUSTOM FIELDS FOR "FOR MEN" SECTION*/
    Container::make( 'post_meta', 'Добавление товара в категорию ДЛЯ ЧОЛОВІКІВ. Украинская версия.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 101,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Информация о товаре', array(
            Field::make( 'text', 'crb_good_name', 'Название товара' )
                   ->set_help_text( 'Например: <i>Чоловіча сумка на пояс</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Описание товара' )
                   ->set_help_text( 'Например: <i>темно синього кольору, з двома відділеннями та магнітною застібкою</i>' )
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


    Container::make( 'post_meta', 'Add your product to FOR MEN category (small photos). English version.' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 103,
                   'taxonomy' => 'category',
                ) )
        ->add_tab( 'Product information', array(
            Field::make( 'text', 'crb_good_name', 'Product name' )
                   ->set_help_text( 'For example: <i>Men belt bag</i>' )
                   ->set_required( true )
                   ->set_width( 40 ),

            Field::make( 'text', 'crb_good_descr', 'Product description' )
                   ->set_help_text( 'For exapmle: <i>Dark blue colored 2 sections inside, magnet clasp </i>' )
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
