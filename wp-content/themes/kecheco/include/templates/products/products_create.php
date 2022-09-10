<h1>Add New</h1>
<?php settings_errors();?>
<form method="post" action="options.php">
    <?php settings_fields( 'products-settings-group' ); ?>
    <?php do_settings_sections( 'kecheco_products' ); ?> 
    <?php submit_button(); ?> 
</form>