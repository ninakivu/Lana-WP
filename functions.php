<?php

function lana_files() {
  wp_enqueque_style('lana_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueque_scripts', 'lana_files');