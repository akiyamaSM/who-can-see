<?php
/**
 * Plugin Name: Who Can See
 * Plugin URI: http://github.com/akiyamaSM
 * Description: This plugin controls the parts that can be seen.
 * Version: 1.0.0
 * Author: El Houssain Inani
 * Author URI: http://github.com/akiyamaSM
 * License: GPL2
 */

require_once 'RoleManager.php';
add_shortcode('whocansee', function ($atts, $content ){

    // only
    // except
    // all
    // no
    $filter = RoleManager::getOperation($atts);
    if( is_null($filter)){
        return $content;
    }
    return $filter->apply($content);

});