<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );

    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'map', 'crb_location' )
                ->set_position( 37.423156, -122.084917, 14 ),
            Field::make( 'sidebar', 'crb_custom_sidebar' ),
            Field::make( 'image', 'crb_photo' ),
            Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
        ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );

function crb_attach_post_meta() {

    Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
        ->where( 'post_type', '=', 'post' )
        ->add_fields( array(
            Field::make( 'text', 'crb_venue', 'Venue' ),
        ) );

    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->add_fields( array(
            Field::make( 'complex', 'crb_slides', 'Slides' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Title' ),
                    Field::make( 'color', 'title_color', 'Title Color' ),
                    Field::make( 'image', 'image', 'Image' ),
                ) ),
        ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_term_meta' );

function crb_attach_term_meta() {
    Container::make( 'term_meta', __( 'Term Options', 'crb' ) )
        ->where( 'term_taxonomy', '=', 'category' ) // only show our new field for categories
        ->add_fields( array(
            Field::make( 'color', 'crb_color', 'Color' )
                ->set_required( true ),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );

function crb_load() {
    // require_once( 'vendor/autoload.php' );
    require_once( __DIR__ . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_theme_support('title-tag');