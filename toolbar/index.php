<?php
// if this file is called directly, abort!
if(!defined('WPINC')) {
    die;
}

/**
 * register and enqueue boardcast toolbar resources.
 */
add_action('wp_enqueue_scripts', 'register_boardcast_resources');
function register_boardcast_resources() {

    // register and enqueue boardcase styles.
    wp_register_style('boardcast-toolbar', 
                      plugins_url('boardcast-toolbar.css', __FILE__),
                      array(), '0.0.1');
    wp_enqueue_style('boardcast-toolbar');
    wp_register_script('boardcast-toolbar-js', 
                      plugins_url('boardcast-toolbar.js', __FILE__),
                      array(), '0.0.1');
    wp_enqueue_script('boardcast-toolbar-js');
}

/**
 * add the boardcast menu on the wordpress toolbar.
 */
function add_boardcast_toolbar_menu() {

    global $wp_admin_bar;
    $icon = '<span class="ab-icon" title="Check our new updates"></span>';
    $title = $icon . 'Site news';

    // add Projects menu for all users.
    $wp_admin_bar->add_menu( array(
        'id' => 'boardcast',
        'parent' => 'top-secondary',
        //'title' => $icon . '<span id="ab-pending-notifications" class="count alert">0</span>'
        'title' => $title
    ));

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'boardcast',
        'title' => $icon . get_site_option('wpb_message_title'),
        'href' => get_site_option('wpb_message_url'),
        'meta' => FALSE
    ));

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'boardcast',
        'title' => $icon . get_site_option('wpb_message1_title'),
        'href' => get_site_option('wpb_message1_url'),
        'meta' => FALSE
    ));

    // add the messages.
    $wp_admin_bar->add_menu(array(
        'parent' => 'boardcast',
        'title' => $icon . get_site_option('wpb_message2_title'),
        'href' => get_site_option('wpb_message2_url'),
        'meta' => FALSE
    ));
}

// hook to action 'admin_bar_menu'.
add_action('admin_bar_menu', 'add_boardcast_toolbar_menu',25);
