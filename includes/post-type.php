<?php

// Register custom post type for events
function malika_events_register_post_type() {
    $labels = array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'menu_name' => 'Events',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'view_item' => 'View Event',
        'search_items' => 'Search Events',
        'not_found' => 'No events found',
        'not_found_in_trash' => 'No events found in trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('event_category'), // Enable event categories
        'rewrite' => array('slug' => 'events'), //custom slug for event archives
    );

    register_post_type('malika_event', $args);
}
add_action('init', 'malika_events_register_post_type');

?>
