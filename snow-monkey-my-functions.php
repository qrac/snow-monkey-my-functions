<?php
/**
 * Plugin name: Snow Monkey My Functions
 * Plugin URI: https://github.com/qrac/snow-monkey-my-functions
 * Description: Function only for theme Snow Monkey.
 * Version: 0.1.0
 * Author: Qrac
 * Author URI: https://qrac.jp
 * Text Domain: snow-monkey-my-functions
 * License: GPLv2 or later
 */

//----------------------------------------------------
// Enabled only if theme is Snow Monkey
//----------------------------------------------------

$theme = wp_get_theme( get_template() );

if ( 'snow-monkey' !== $theme->template ) {
  return;
}

//----------------------------------------------------
// Write the function from here to below
//----------------------------------------------------

// Overwrite function here
