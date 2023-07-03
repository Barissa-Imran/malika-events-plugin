<?php
// custom meta boxes for event details
function malika_events_add_meta_boxes() {
    add_meta_box(
        'malika_event_details',
        'Event Details',
        'malika_event_details_callback',
        'malika_event',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'malika_events_add_meta_boxes');

function malika_event_details_callback($post)
{
  // Display and handle the custom meta box fields
  ?>
  <label for="event_from_date">From Date:</label>
  <input type="date" id="event_from_date" name="event_from_date" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_from_date', true)); ?>">

  <label for="event_to_date">To Date:</label>
  <input type="date" id="event_to_date" name="event_to_date" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_to_date', true)); ?>">

  <label for="event_from_time">From Time:</label>
  <input type="time" id="event_from_time" name="event_from_time" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_from_time', true)); ?>">

  <label for="event_to_time">To Time:</label>
  <input type="time" id="event_to_time" name="event_to_time" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_to_time', true)); ?>">

  <label for="event_location">Location:</label>
  <input type="text" id="event_location" name="event_location" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_location', true)); ?>">

  <label for="event_register_link">Link:</label>
  <input type="url" id="event_register_link" name="event_register_link" value="<?php echo esc_attr(get_post_meta($post->ID, 'event_register_link', true)); ?>">
  <?php
}


