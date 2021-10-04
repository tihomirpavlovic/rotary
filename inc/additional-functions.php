<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function get_img_by_id($id) {
    if( $id ) {
        $image_alt = get_post_meta($id, '_wp_attachment_image_alt', TRUE);
        $image_url = wp_get_attachment_url( $id );

        $image = array(
            'url' => $image_url,
            'alt' => $image_alt,
        );
    }

    return $image;
}