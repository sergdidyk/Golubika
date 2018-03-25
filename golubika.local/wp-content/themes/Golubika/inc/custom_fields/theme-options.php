<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	Container::make( 'theme_options', 'Настройки сайта' )
		->set_icon('dashicons-carrot')
    ->add_fields( array(
        Field::make( 'text', 'crb_phone', 'Номер телефона' )
                ->set_attribute( 'placeholder', '+xx xxx xxx xx xx' )
                //->set_required( true )
                ->set_width( 50 ),
        Field::make( 'text', 'crb_email', 'Email' )
                ->set_attribute( 'placeholder', 'yourmail@mail.com' )
                //->set_required( true )
                ->set_width( 50 )
    ) );