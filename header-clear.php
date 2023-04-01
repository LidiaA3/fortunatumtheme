<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="<?php the_field ( 'options_meta_color', 'option' ); ?>">

        <?php the_field ( 'options_scripts_head', 'option' ); ?>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class( 'sticky-footer' ); ?>>
        