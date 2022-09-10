<?php
/*
============ start=======
@hooks
10/09/2022
*/
add_action('admin_menu','kecheco_admin_page_product');
add_action('admin_init','products_custom_setting');



//function
function kecheco_admin_page_product()
{
    //
    add_menu_page('product options','products','manage_options','kecheco_products','create_page_products',get_template_directory_uri().'/assets/images/product.png',120);
    add_submenu_page('kecheco_products','product options','All Product','manage_options','kecheco_products','create_page_products');
    add_submenu_page('kecheco_products','products create','Add New','manage_options','kecheco_products_create','products_create_page');
    add_submenu_page('kecheco_products','products customize','custom','manage_options','kecheco_products_custom','products_custom_page');

}
function create_page_products(){
    
}
function products_create_page(){
    require_once get_template_directory().'/include/templates/products/products_create.php'; 
}
function products_custom_page(){

}
function products_custom_setting(){
    register_setting('products-settings-group','products_name');
    register_setting('products-settings-group','products_Price');
    register_setting('products-settings-group','products_Title');
    add_settings_section('product-general-options','general_option','product_general_options','kecheco_products');
    add_settings_field('general-name','product_name','product_general_name','kecheco_products','product-general-options');
    add_settings_field('general-title','product_title','product_general_title','kecheco_products','product-general-options');
    add_settings_field('general-price','product_price','product_general_price','kecheco_products','product-general-options');
}
function product_general_options(){
 echo 'customize your products informations';
}
function product_general_name(){
    $productName=esc_attr(get_option('product_name'));
    echo '<input type="text" name="first_name"value="' .$productName. '" placeholder="Product Name" />';
}
function product_general_price(){
    $productPrice=esc_attr(get_option('product_Price'));
    echo '<input type="number" name="first_name"value="' .$productPrice. '" placeholder="Price$" />';
}
function product_general_title(){
    $productTitle=esc_attr(get_option('product_Title'));
    echo '<input type="text" name="first_name"value="' .$productTitle. '" placeholder="Title" />';
}