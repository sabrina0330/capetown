<?php
/**
 * Plugin Name: capetown
 * * Description: Handle the custom functions for woocommerce pop up
 */
 /**
 * Plugin Name: Capetown
 * Plugin URI: http://ibelongatimpact.com/shop
 * Description: Quanity change adverts a pop up window
 * Version: 1.0.0
 * Author: Your Name Sabrina Gordon
 * Author URI: http://ibelongatimpact.com/
 * Developer: Sabrina Gordon
 * Developer URI: http://ibelongatimpact.com/
 * Text Domain: woocommerce-extension
 * Domain Path: /languages
 *
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 * WC requires at least: 2.2
 * WC tested up to: 2.3
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * 
 */
register_activation_hook( __FILE__, 'pluginprefix_function_to_run' )


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    
    /**
     <?php
/**
 * Plugin Name: capetown
**/
add_action( 'wp_footer', 'cart_update_qty_script', 'persistent_cart_update');

function persistent_cart_update() {
    foreach ( WC()->cart->get_cart() as $cart_item ) {
        // gets the cart item quantity
        $quantity           = $cart_item['quantity'];}
    }
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
function cart_update_qty_script() {
    if (is_cart()) :
    ?>
    <script>
         jQuery('div.woocommerce').on('change', '.qty', function(){
        jQuery("[name='update_cart']").prop("disabled", false);
        jQuery("[name='update_cart']").trigger("click"); 
    });
    
    </script>
<?php phpAlert(   "Your have changed the quantity of ABC to 2 " .$quantity.".");  ?>
   
    <?php
    endif;
}

? >