<?php

/**
 * Plugin Name:       MV Slider
 * Plugin URI:        http://plugindev/
 * Description:       Slider plugin for WP development training.
 * Version:           1.0
 * Requires at least: 5.6
 * Requires PHP:      7.4
 * Author:            Don Svederus
 * Author URI:        https://svederus.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mv-slider
 * Domain Path:       /languages
 */

/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV Slider. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
 }

if(!class_exists ('MV_Slider')){
    class MV_Slider {
        function __construct(){
            $this->define_constants();
        }

        public function define_constants(){
            define('MV_SLIDER_PATH', plugin_dir_path( __FILE__ ));
            define('MV_SLIDER_URL', plugin_dir_url( __FILE__ ));
            define('MV_SLIDER_VERSION', '1.0.0' );


        }

    }
}

if(class_exists('MV_Slider')){
    $mv_slider = new MV_Slider();
}
