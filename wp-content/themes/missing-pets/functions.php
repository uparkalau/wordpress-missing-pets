<?php
function missing_pets_directory_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );

    // Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Enqueue jQuery UI (for Autocomplete)
    wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true );

    // Enqueue theme stylesheet
    wp_enqueue_style( 'missing-pets-directory-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'missing_pets_directory_scripts' );
