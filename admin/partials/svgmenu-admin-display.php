<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://manish.dev
 * @since      1.0.0
 *
 * @package    Svgmenu
 * @subpackage Svgmenu/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->


<h2 >SVG Menu</h2>
<h3 style="text-align:center">Select a Menu</h3>

<form method="post" name="cleanup_options" action="options.php" class="formbox">

<?php
    //Grab all options
    $options = get_option($this->plugin_name);

    // Cleanup
    $demo2 = $options['demo2'];
    $demo3 = $options['demo3'];
    $demo4 = $options['demo4'];
    
?>

<?php
    settings_fields($this->plugin_name);
    do_settings_sections($this->plugin_name);
?>

<!-- remove some meta and generators from the <head> -->
<fieldset class="bgdemo2">
    <legend class="screen-reader-text">
        <span>Activate</span>
    </legend>
    <label for="<?php echo $this->plugin_name; ?>-demo2">
        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-demo2" name="<?php echo $this->plugin_name; ?>[demo2]" value="1" <?php checked($demo2, 1); ?> />
        <span><?php esc_attr_e('Menu 1', $this->plugin_name); ?></span>
    </label>
</fieldset>

<fieldset class="bgdemo3">
    <legend class="screen-reader-text">
        <span>Activate</span>
    </legend>
    <label for="<?php echo $this->plugin_name; ?>-demo3">
        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-demo3" name="<?php echo $this->plugin_name; ?>[demo3]" value="1" <?php checked($demo3, 1); ?> />
        <span><?php esc_attr_e('Menu 2', $this->plugin_name); ?></span>
    </label>
</fieldset>
<fieldset class="bgdemo4">
    <legend class="screen-reader-text">
        <span>Activate</span>
    </legend>
    <label for="<?php echo $this->plugin_name; ?>-demo4" >
        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-demo4" name="<?php echo $this->plugin_name; ?>[demo4]" value="1" <?php checked($demo4, 1); ?> />
        <span><?php esc_attr_e('Menu 3', $this->plugin_name); ?></span>
    </label>
</fieldset>


<div class="btnsb">
<?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
</div>
