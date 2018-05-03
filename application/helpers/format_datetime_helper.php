<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function dt_format($datetime_str='', $format_str='', $time_zone=DATETIME_ZONE) {
    $datetime = new DateTime($datetime_str, new DateTimeZone($time_zone));
    return $datetime->format($format_str);
}

function dt_now($format_str='', $time_zone=DATETIME_ZONE) {
    return dt_format('now', $format_str, $time_zone);
}

function dt_today($format_str='', $time_zone=DATETIME_ZONE) {
    return dt_format('today', $format_str, $time_zone);
}

function dt_format_system_datetime($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format($datetime_str, SYSTEM_DATETIME_FORMAT, DATETIME_ZONE);
}

function dt_format_system_date($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format($datetime_str, SYSTEM_DATE_FORMAT, DATETIME_ZONE);
}

function dt_format_display_datetime($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format($datetime_str, DISPLAY_DATETIME_FORMAT, DATETIME_ZONE);
}

function dt_format_display_date($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format($datetime_str, DISPLAY_DATE_FORMAT, DATETIME_ZONE);
}

function dt_format_rfc($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format($datetime_str, DISPLAY_RFC_FORMAT, DATETIME_ZONE);
}

function dt_format_last_updated($datetime_str='', $time_zone=DATETIME_ZONE) {
    return dt_format_rfc($datetime_str, DATETIME_ZONE);
}

//end of script