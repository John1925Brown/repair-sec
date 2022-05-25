<?php

wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css');
wp_enqueue_style( 'animate.compat', get_template_directory_uri().'/css/animate.compat.css');
wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');

wp_deregister_script('jquery');
wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js', true);
wp_enqueue_script('jquery');

wp_enqueue_script('jquery.vide.min', get_template_directory_uri().'/js/jquery.vide.min.js', 'jquery', true);
wp_enqueue_script('wow.min', get_template_directory_uri().'/js/wow.min.js', 'jquery', true);
wp_enqueue_script('jquery.validate.min', get_template_directory_uri().'/js/jquery.validate.min.js', 'jquery', true);
wp_enqueue_script('jquery.mask.min', get_template_directory_uri().'/js/jquery.mask.min.js', 'jquery', true);
wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', 'jquery', true);
wp_enqueue_script('swiper', get_template_directory_uri().'https://unpkg.com/swiper@8/swiper-bundle.min.js', 'jquery', true);

add_theme_support( 'post-thumbnails' );

/*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>*/