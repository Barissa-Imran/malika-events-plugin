<?php
// Register Custom Taxonomy
function malika_custom_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Event Categories', 'Taxonomy General Name', 'malika-events' ),
        'singular_name'              => _x( 'Event Category', 'Taxonomy Singular Name', 'malika-events' ),
        'menu_name'                  => __( 'Event Categories', 'malika-events' ),
        'all_items'                  => __( 'All Categories', 'malika-events' ),
        'parent_item'                => __( 'Parent Category', 'malika-events' ),
        'parent_item_colon'          => __( 'Parent Category:', 'malika-events' ),
        'new_item_name'              => __( 'New Category Name', 'malika-events' ),
        'add_new_item'               => __( 'Add New Category', 'malika-events' ),
        'edit_item'                  => __( 'Edit Category', 'malika-events' ),
        'update_item'                => __( 'Update Category', 'malika-events' ),
        'view_item'                  => __( 'View Category', 'malika-events' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'malika-events' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'malika-events' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'malika-events' ),
        'popular_items'              => __( 'Popular Categories', 'malika-events' ),
        'search_items'               => __( 'Search Categories', 'malika-events' ),
        'not_found'                  => __( 'No categories found', 'malika-events' ),
        'no_terms'                   => __( 'No categories', 'malika-events' ),
        'items_list'                 => __( 'Categories list', 'malika-events' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'malika-events' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'event_category', array( 'event' ), $args );
}
add_action( 'init', 'malika_custom_taxonomy', 0 );

?>
