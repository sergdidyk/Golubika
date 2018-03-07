<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	/* ТЕСТОВЫЕ ПОЛЯ CARBON FIELDS */

	Container::make( 'post_meta', 'Добавление товара в новую коллекцию' )
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




    Container::make( 'post_meta', 'Добавление товара в новую коллекцию' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 75,
                   'taxonomy' => 'category',
                ) )
        ->add_fields( array(
          


    ));