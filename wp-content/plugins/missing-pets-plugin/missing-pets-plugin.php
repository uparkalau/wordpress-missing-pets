<?php
/*
Plugin Name: Missing Pets Plugin
Description: Provides REST API endpoints for fetching pet data.
Version: 1.0
Author: VladP
*/

// Register REST API endpoints
add_action('rest_api_init', 'register_missing_pets_endpoints');

function register_missing_pets_endpoints() {
    $namespace = 'missing-pets/v1';

    register_rest_route($namespace, '/pets', array(
        'methods' => 'GET',
        'callback' => 'get_missing_pets_data',
    ));
}

// Callback function to return pet data from JSON file
function get_missing_pets_data(WP_REST_Request $request) {
    $response = array();

    $file_path = plugin_dir_path(__FILE__) . 'pet-data.json';

    if (file_exists($file_path)) {
        $pet_data = file_get_contents($file_path);

        if ($pet_data !== false) {
            $decoded_data = json_decode($pet_data, true);

            if ($decoded_data !== null) {
                $search = $request->get_param('search');
                if (!empty($search)) {
                    $filtered_data = array_filter($decoded_data, function($pet) use ($search) {
                        return strpos(strtolower($pet['name']), strtolower($search)) !== false;
                    });
                    
                    $response = array_values($filtered_data);
                } else {
                    $response = $decoded_data;
                }
            } else {
                $response['error'] = 'Failed to decode JSON data';
            }
        } else {
            $response['error'] = 'Failed to read data from JSON file';
        }
    } else {
        $response['error'] = 'JSON file not found';
    }

    return $response;
}

