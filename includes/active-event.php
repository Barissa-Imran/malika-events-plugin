<?php
// Display active event
function malika_events_display_active_event()
{
  $today = date('Y-m-d');
  $args = array(
    'post_type' => 'malika_event',
    'meta_query' => array(
      // 'relation' => 'AND',
      // array(
        // 'key' => 'event_to_date',
        // 'value' => $today,
      //   'compare' => '>=',
      //   'type' => 'DATE',
      // ),
      // array(
      //   'key' => 'malika_event_category',
      //   'value' => 'featured',
      //   'compare' => 'LIKE',
      // ),
    ),
    'posts_per_page' => 1,
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      $post_id = get_the_ID();

      $current_date = date('Y-m-d');

      $event_to_date =  get_post_meta($post_id, 'event_to_date', true);

      $event_category = get_the_category($post_id)[0];

      if ($event_to_date < $current_date) {

        // Retrieve event data
        $event_title = get_the_title();
        $event_link = get_permalink();
        $event_image = get_the_post_thumbnail_url();
        $output = '';

              // Display active event at the top of the navigation bar
              $output .= '<div class="active-event-navigation">';
              $output .= '<a href="' . esc_url($event_link) . '">' . esc_html($event_title) . ($event_category) . '</a>';
              $output .= '<button id="eventNavCloseBtn" class="event_nav-close" type="button"><i class="bi bi-x-lg"></i></button>';
              $output .= '</div>';

              // Display active event as a pop-up
              $output .= '<div class="active-event-popup_container" style="display: none;">';
              $output .= '<button id="eventPopBtn" class="event_nav-close btn-close btn-light bg-light text-light p-2 m-2" type="button" aria-label="Close"></button>';
              $output .= '<div class="active-event-popup row">';
              $output .= '<div class="col-md-6 event-bg" style="background: url(\'' . $event_image . '\');">';
              $output .= '<img src="' . esc_url($event_image) . '" width="100%" alt="event poster"/>';
              $output .= '</div>';
              $output .= '<div class="col-md-6 d-flex flex-column text-center justify-content-center align-items-center">';
              $output .= '<span class="active-event-title">' . esc_html($event_title) .'</span>';
              $output .= '<a href="' . esc_url($event_link) . '" class="active-event-link m-3 btn btn-lg btn-success">View Event</a>';
              $output .= '</div>';
              $output .= '</div>';
              $output .= '</div>';

              // Display active event as a widget in the sidebar
              $output .= '<div class="widget active-event-widget collapse">';
              $output .= '<h3 class="widget-title">' . esc_html($event_title) . '</h3>';
              $output .= '<a href="' . esc_url($event_link) . '" class="active-event-link">View Event</a>';
              $output .= '</div>';

              echo $output;
      }

    }
    wp_reset_postdata();
  }
}
