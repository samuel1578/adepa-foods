<?php
/**
 * ADEPA Food Hut theme bootstrap.
 *
 * Presentation only. Business logic (menu, ordering, delivery confirmation,
 * payments, notifications) belongs in the ADEPA plugin, not in this theme.
 *
 * @package ADEPA_Food_Hut
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load theme modules.
 */
require_once get_theme_file_path( 'inc/setup.php' );
require_once get_theme_file_path( 'inc/starter-content.php' );
