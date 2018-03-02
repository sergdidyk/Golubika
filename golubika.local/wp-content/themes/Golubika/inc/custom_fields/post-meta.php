<?php 

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	/* ТЕСТОВЫЕ ПОЛЯ CARBON FIELDS */

	Container::make( 'post_meta', 'Custom Data' )
    ->show_on_category('new_collection_ua')
    ->add_fields( array(
        Field::make( 'map', 'crb_location' )
            ->set_position( 37.423156, -122.084917, 14 ),
        Field::make( 'sidebar', 'crb_custom_sidebar' ),
        Field::make( 'image', 'crb_photo' ),
    ));


Container::make( 'post_meta', 'Custom Data' )
    ->show_on_category('new_collection_en')
    ->add_fields( array(
        Field::make( 'map', 'crb_location' )
            ->set_position( 37.423156, -122.084917, 14 ),
        Field::make( 'sidebar', 'crb_custom_sidebar' ),
        Field::make( 'image', 'crb_photo' ),
    ));