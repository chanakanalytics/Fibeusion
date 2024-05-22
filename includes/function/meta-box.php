<?php

//////////////////////// Contact Us /////////////////////
add_action('add_meta_boxes', 'enqueue_metabox_css');

function enqueue_metabox_css(){
    add_meta_box(
        'css_metabox',
        'CSS Metabox',
        'display_css_metabox',
        'post',
        'normal',
        'high'
    );

    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/assets/css/bootstrap.min.css'
    );
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/meta-box-custome.js'
    );
    wp_enqueue_style(
        'fontawsom-css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
    );
}

function contact_meta_box(){
    add_meta_box(
        'contact_enquiry',
        __('Contact Enquiry', 'contact_enquiry'),
        'contact_enquiry_html',
        'contact_enquiry',
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'contact_meta_box');

