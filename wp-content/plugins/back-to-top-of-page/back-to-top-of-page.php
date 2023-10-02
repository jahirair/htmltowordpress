<?php 
/*
 * Plugin Name:       Back to Top of Page
 * Plugin URI:        https://wordpress.org/plugins/back-to-top-of-page/
 * Description:       Pretty Simple plugin that allow you add back to top button and get to the top of the page when clicking on it.Allow background color and image changes of your choice.
 * Version:           1.0.0
 * Requires at least: 6.2
 * Requires PHP:      7.2
 * Author:            Web Developer Jahir
 * Author URI:        https://www.facebook.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/jahirair
 * Text Domain:       bttop
 */


 //including plugin css

function bttop_enqueue_style(){
    wp_enqueue_style('bttop-style', plugins_url('css/bttop-style.css',__FILE__));
}
add_action("wp_enqueue_scripts","bttop_enqueue_style");

//include plugin js
function bttop_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('bttop.scrollUp', plugins_url('js/bttop.scrollUp.js',__FILE__));
}
add_action("wp_enqueue_scripts","bttop_enqueue_scripts");

// include plugin jquery activation

function bttop_scrollUp_activation(){ ?>
    <script>
        jQuery(document).ready(function(){
            jQuery.scrollUp();
        });
    </script>
<?php }
add_action("wp_footer","bttop_scrollUp_activation");




// bttop Plugin Customization Settings
add_action( "customize_register", "bttop_scroll_to_top" );
function bttop_scroll_to_top($wp_customize){
  $wp_customize-> add_section('bttop_scroll_top_section', array(
    'title' => __('Scroll To Top', 'bttop'),
    'description' => 'Simple Scroll to top plugin will help you to enable Back to Top button to your WordPress website.',
  ));

  $wp_customize ->add_setting('bttop_default_color', array(
    'default' => '#000000',
  ));
  $wp_customize->add_control('bttop_default_color', array(
      'label'   => 'Background Color',
      'section' => 'bttop_scroll_top_section',
      'type'    => 'color',
  ));
  // Adding Rounded Corner
  $wp_customize ->add_setting('bttop_rounded_corner', array(
    'default' => '5px',
    'description' => 'If you need fully rounded or circular then use 25px here.',
  ));
  $wp_customize->add_control('bttop_rounded_corner', array(
      'label'   => 'Rounded Corner',
      'section' => 'bttop_scroll_top_section',
      'type'    => 'text',
  ));
}

// Theme CSS Customization. Add the input in css
function bttop_theme_color_cus(){
  ?>
  <style>
    #scrollUp {
    background-color: <?php print get_theme_mod("bttop_default_color"); ?>;
    border-radius: <?php print get_theme_mod("bttop_rounded_corner"); ?>;
  }
  </style>
  <?php 
}
add_action('wp_head', 'bttop_theme_color_cus');
?>