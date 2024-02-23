<?php
/**
 * Plugin Name: Custom ACF Settings
 * Description: Dodaje klucz API Google Maps do Advanced Custom Fields.
 * Version: 1.0
 * Author: Twój Autor
 */

// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyA5Abai4kFDx1P1ZvK5EQg9d24cCqVXOT0'; // Zastąp 'xxx' własnym kluczem API Google Maps.
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

