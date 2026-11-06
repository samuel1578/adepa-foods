<?php
require_once 'wp-load.php';
global $wpdb;

$post = $wpdb->get_row( "SELECT post_content FROM {$wpdb->posts} WHERE ID = 14" );
echo $post->post_content;
