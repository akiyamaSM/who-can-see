<?php
/**
 * Plugin Name: Who Can See
 * Plugin URI: https://github.com/akiyamaSM/who-can-see
 * Description: This plugin controls the parts that can be seen.
 * Version: 1.0.0
 * Author: El Houssain Inani
 * Author URI: https://github.com/akiyamaSM
 * License: GPL2
 */

require_once 'RoleManager.php';

add_shortcode('whocansee', function ($attributes, $content )
{
    $filter = RoleManager::getOperation($attributes);
    if( is_null($filter)){
        return $content;
    }
    return $filter->apply($content);
});