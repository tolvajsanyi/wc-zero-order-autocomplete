<?php
/**
 * Plugin Name: WooCommerce Zero Ft automatikus teljesítés
 * Description: Ha egy terméknél be van pipálva, hogy 0 Ft-os rendelés esetén automatikusan teljesítve legyen, akkor a rendelés leadás után teljesített státuszt kap.
 * Version: 1.0
 * Author: Tolvaj Sándor & ChatGPT
 */

// 1️⃣ Termék admin mező: checkbox a 0 Ft-os automatikus teljesítéshez
add_action( 'woocommerce_product_options_general_product_data', function() {
    woocommerce_wp_checkbox( array(
        'id' => '_zero_autocomplete',
        'label' => '0 Ft automatikus teljesítés',
        'desc_tip' => true,
        'description' => 'Ha be van pipálva, 0 Ft esetén ez a termék automatikusan teljesítve lesz.'
    ));
});

add_action( 'woocommerce_process_product_meta', function( $post_id ) {
    update_post_meta( $post_id, '_zero_autocomplete', isset( $_POST['_zero_autocomplete'] ) ? 'yes' : 'no' );
});

// 2️⃣ Rendelés után ellenőrzés, és teljesítés ha kell
add_action( 'woocommerce_thankyou', function( $order_id ) {
    if ( ! $order_id ) return;

    $order = wc_get_order( $order_id );

    if ( $order->get_status() == 'completed' ) return;
    if ( $order->get_total() != 0 ) return;

    foreach ( $order->get_items() as $item ) {
        $product = $item->get_product();
        if ( ! $product ) continue;

        if ( get_post_meta( $product->get_id(), '_zero_autocomplete', true ) === 'yes' ) {
            $order->update_status( 'completed', 'Automatikusan teljesítve: termék beállítása alapján.' );
            return;
        }
    }
});
