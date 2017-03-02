<?php
// we need a admin page on dashboard for configuration.
add_action('network_admin_menu', 'wpb_admin_init');

/**
 * the main function to set up admin page.
 */
function wpb_admin_init() {

    // add the WP Broadcast section on wp-admin dashboard.
    add_menu_page('WP Broadcast', 'WP Broadcast', 
                  'manage_options', // this is only for administrator
                  // menu slug, slug is like keyword.
                  'wp-broadcast/admin/settings.php', 
                  // the function name leave it empty to use the value in slug.
                  // this will also be the default option page.
                  ''
                 );
    // the general settings page.
    add_submenu_page('wp-broadcast/admin/settings.php', // parent slug.
                     'General Settings', 'General Settings',
                     'manage_options', 
                     'wp-broadcast/admin/settings.php'
                    );
}
