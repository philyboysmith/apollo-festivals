<?php
/**
 * Plugin Name: Apollo for Wordpress
 * Version: 1.0.0
 * Plugin URI: https://github.com/philyboysmith/apollo-festivals
 * Description: Sync Apollo and Wordpress
 * Author: Hugh Lashbrooke
 * Author URI: http://www.amillionmonkeys.co.uk
 * Requires at least: 4.0
 * Tested up to: 4.0.
 *
 * Text Domain: apollo
 * Domain Path: /lang/
 *
 * @author Hugh Lashbrooke
 *
 * @since 1.0.0
 */
if (!defined('ABSPATH')) {
    exit;
}

// Load plugin class files.
require_once 'includes/class-apollo.php';
require_once 'includes/class-apollo-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-apollo-admin-api.php';
require_once 'includes/lib/class-apollo-post-type.php';
require_once 'includes/lib/class-apollo-taxonomy.php';

/**
 * Returns the main instance of Apollo to prevent the need to use globals.
 *
 * @since  1.0.0
 *
 * @return object Apollo
 */
function apollo()
{
    $instance = Apollo::instance(__FILE__, '1.0.0');

    if (is_null($instance->settings)) {
        $instance->settings = Apollo_Settings::instance($instance);
    }

    return $instance;
}

apollo();
