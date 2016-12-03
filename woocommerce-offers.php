<?php

/*
  Plugin Name: Woocomerce Brands
  Plugin URI: http://www.itsl.net
  Description: Woocommerce Brands Plugin.
  Author: Ayanindu Santra
  Version: 1.0.0
  Author URI: http://www.itsl.net
 */

/**
 * Check if WooCommerce is active
 * */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }
add_action('woocommerce_init', 'create_taxonomies_offers');

    function create_taxonomies_offers() {
        // Add new taxonomy, make it hierarchical (like categories)
        $shop_page_id = woocommerce_get_page_id('shop');

        $base_slug = $shop_page_id > 0 && get_page($shop_page_id) ? get_page_uri($shop_page_id) : 'shop';

        $category_base = get_option('woocommerce_prepend_shop_page_to_urls') == "yes" ? trailingslashit($base_slug) : '';

        $cap = version_compare(WOOCOMMERCE_VERSION, '2.0', '<') ? 'manage_woocommerce_products' : 'edit_products';
        $labels = array(
            'name' => __('Offers', 'woocommerce-offers'),
            'singular_name' => __('Offers', 'woocommerce-offers'),
            'search_items' => __('Search Genres', 'woocommerce-offers'),
            'all_items' => __('All Offers', 'woocommerce-offers'),
            'parent_item' => __('Parent Offers', 'woocommerce-offers'),
            'parent_item_colon' => __('Parent Offers:', 'woocommerce-offers'),
            'edit_item' => __('Edit Offers', 'woocommerce-offers'),
            'update_item' => __('Update Offers', 'woocommerce-offers'),
            'add_new_item' => __('Add New Offers', 'woocommerce-offers'),
            'new_item_name' => __('New Offers Name', 'woocommerce-offers'),
            'menu_name' => 'Offers',
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'capabilities' => array(
                'manage_terms' => $cap,
                'edit_terms' => $cap,
                'delete_terms' => $cap,
                'assign_terms' => $cap
            ),
            'rewrite' => array('slug' => $category_base . __('offers', 'woocommerce-offers'), 'with_front' => false, 'hierarchical' => true)
        );
        register_taxonomy('product_offers', array('product'), apply_filters('register_taxonomy_product_offers', $args));
    }


}