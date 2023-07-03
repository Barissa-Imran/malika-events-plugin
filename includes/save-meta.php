<?php
// Save custom meta box data
function malika_events_save_meta($post_id)
{
  if (isset($_POST['event_from_date'])) {
    update_post_meta($post_id, 'event_from_date', sanitize_text_field($_POST['event_from_date']));
  }

  if (isset($_POST['event_to_date'])) {
    update_post_meta($post_id, 'event_to_date', sanitize_text_field($_POST['event_to_date']));
  }

  if (isset($_POST['event_from_time'])) {
    update_post_meta($post_id, 'event_from_time', sanitize_text_field($_POST['event_from_time']));
  }

  if (isset($_POST['event_to_time'])) {
    update_post_meta($post_id, 'event_to_time', sanitize_text_field($_POST['event_to_time']));
  }

  if (isset($_POST['event_location'])) {
    update_post_meta($post_id, 'event_location', sanitize_text_field($_POST['event_location']));
  }

  if (isset($_POST['event_register_link'])) {
    update_post_meta($post_id, 'event_register_link', sanitize_text_field($_POST['event_register_link']));
  }
}
add_action('save_post_malika_event', 'malika_events_save_meta');

?>
