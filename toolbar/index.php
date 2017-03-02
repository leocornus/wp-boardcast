<?php
// if this file is called directly, abort!
if(!defined('WPINC')) {
    die;
}

/**
 * register and enqueue broadcast toolbar resources.
 */
//add_action('wp_enqueue_scripts', 'register_broadcast_resources');
add_action('init', 'register_broadcast_resources');
function register_broadcast_resources() {

    // register and enqueue boardcase styles.
    wp_register_style('broadcast-toolbar', 
                      plugins_url('broadcast-toolbar.css', __FILE__),
                      array(), '0.0.2');
    wp_enqueue_style('broadcast-toolbar');
    wp_register_script('broadcast-toolbar-js', 
                      plugins_url('broadcast-toolbar.js', __FILE__),
                      array(), '0.0.2');
    wp_enqueue_script('broadcast-toolbar-js');
}

/**
 * add the broadcast menu on the wordpress toolbar.
 */
function add_broadcast_toolbar_menu() {

    global $wp_admin_bar;

    $md5Key = md5(get_site_option('wpb_message_title'));
    $icon = '<span class="ab-icon" broadcast-tracker="' . $md5Key . 
            '"></span>';
    $title = $icon . 'Site news';

    // add Projects menu for all users.
    $wp_admin_bar->add_menu( array(
        'id' => 'broadcast',
        'parent' => 'top-secondary',
        //'title' => $icon . '<span id="ab-pending-notifications" class="count alert">0</span>'
        'title' => $title
    ));

    // reset icon.
    $icon = '<span class="ab-icon"></span>';

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'broadcast',
        'title' => $icon . get_site_option('wpb_message_title'),
        'href' => get_site_option('wpb_message_url'),
        'meta' => FALSE
    ));

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'broadcast',
        'title' => $icon . get_site_option('wpb_message1_title'),
        'href' => get_site_option('wpb_message1_url'),
        'meta' => FALSE
    ));

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'broadcast',
        'title' => $icon . get_site_option('wpb_message2_title'),
        'href' => get_site_option('wpb_message2_url'),
        'meta' => FALSE
    ));
}

// hook to action 'admin_bar_menu'.
add_action('admin_bar_menu', 'add_broadcast_toolbar_menu',25);
