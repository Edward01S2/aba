<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
// add_filter('excerpt_more', function () {
//     return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
// });

// add_filter( 'wp_get_nav_menu_items', __NAMESPACE__ . '\\prefix_nav_menu_classes', 10, 3 );

// function prefix_nav_menu_classes($items, $menu, $args) {
//     _wp_menu_item_classes_by_context($items);
//     return $items;
// }

add_filter('excerpt_more', function() {
    global $post;
    return '…';
 });

add_filter( 'gform_submit_button', __NAMESPACE__ . '\\input_to_button', 10, 2 );
function input_to_button( $button, $form ) {
    $dom = new \DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $new_button->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    $input->removeAttribute( 'value' );
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    $input->parentNode->replaceChild( $new_button, $input );
 
    return $dom->saveHtml( $new_button );
}
