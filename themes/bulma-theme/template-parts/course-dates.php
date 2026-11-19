<?php
/**
 * Lists a course's registration dates (CFS loop field "registration_dates").
 *
 * Optional $args: 'style' — inline style for each date paragraph.
 */
$registration_dates = viscar_field('registration_dates');
$style = isset($args['style']) ? ' style="' . esc_attr($args['style']) . '"' : '';

if (!empty($registration_dates) && is_array($registration_dates)) {
    foreach ($registration_dates as $dates) {
        $start = viscar_format_date($dates['start_date'] ?? '');
        $end = viscar_format_date($dates['end_date'] ?? '');

        if ($start && $end) {
            echo '<p' . $style . '>' . esc_html($start . ' - ' . $end) . '</p>';
        } elseif ($start) {
            echo '<p' . $style . '>' . esc_html($start) . '</p>';
        }
    }
}
