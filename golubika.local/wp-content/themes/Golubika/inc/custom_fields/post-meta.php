<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	/* ТЕСТОВЫЕ ПОЛЯ CARBON FIELDS */

	Container::make( 'post_meta', 'Добавление товара в новую коллекцию' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 70,
                   'taxonomy' => 'catalog',
                ) )
        ->add_tab( 'Информация о товаре', array(
        
        ) )

        ->add_tab( 'Изображения товара', array(
          
        ) );


    Container::make( 'post_meta', 'Добавление товара в новую коллекцию' )
        ->where( 'post_term', '=', array(
                   'field' => 'id',
                   'value' => 72,
                   'taxonomy' => 'catalog',
                ) )
        ->add_fields( array(
          


    ));