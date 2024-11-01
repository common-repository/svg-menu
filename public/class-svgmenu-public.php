<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://manish.dev
 * @since      1.0.0
 *
 * @package    Svgmenu
 * @subpackage Svgmenu/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Svgmenu
 * @subpackage Svgmenu/public
 * @author     Manish Mandal <manish.mandal21@gmail.com>
 */
class Svgmenu_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */


	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function svg_menu_enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Svgmenu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Svgmenu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/svgmenu-public.css', array(), $this->version, 'all' );
		wp_enqueue_style("demo", plugin_dir_url( __FILE__ ) . 'css/demo.css', array(), $this->version, 'all' );
		wp_enqueue_style("normalize", plugin_dir_url( __FILE__ ) . 'css/normalize.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function svg_menu_enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Svgmenu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Svgmenu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/svgmenu-public.js', array( 'jquery' ), $this->version, true);
		wp_enqueue_script( 'easings', plugin_dir_url( __FILE__ ) . 'js/easings.js', array( 'jquery' ), $this->version, true );
		
		

		if(!empty($this->svgmenu_options['demo2'])){
			wp_enqueue_script( 'demo2', plugin_dir_url( __FILE__ ) . 'js/demo2.js', array( 'jquery' ), $this->version, true );
		}
	
		elseif (!empty($this->svgmenu_options['demo3'])) {
			wp_enqueue_script( 'demo3', plugin_dir_url( __FILE__ ) . 'js/demo3.js', array( 'jquery' ), $this->version, true );
		 }
		 elseif (!empty($this->svgmenu_options['demo4'])) {
			wp_enqueue_script( 'demo4', plugin_dir_url( __FILE__ ) . 'js/demo4.js', array( 'jquery' ), $this->version, true );
		 }
		

	}
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->svgmenu_options = get_option($this->plugin_name);
	}

// Menu addded to front page using wp_footer hook and used items_wrap to wrap the menu inside my custom html

public function svg_menu_add_menu_to_page($items){
	 if(!empty($this->svgmenu_options['demo2'])){
		wp_nav_menu(array(
			'theme_location' => 'hm',
			'menu' => 'Manishhai',
			'menu_id'        => 'SVG-menu',
		   'menu_class'        => 'manu-menu',
		   'container_class' => 'my_extra_menu_class',
		   'container' => false,
		   'items_wrap' => '<main class="main main--demo-2"> <div class="content content--demo-2"> <div class="hamburger js-hover"> <div class="hamburger__line hamburger__line--01"> <div class="hamburger__line-in hamburger__line-in--01"></div> </div> <div class="hamburger__line hamburger__line--02"> <div class="hamburger__line-in hamburger__line-in--02"></div> </div> <div class="hamburger__line hamburger__line--03"> <div class="hamburger__line-in hamburger__line-in--03"></div> </div> <div class="hamburger__line hamburger__line--cross01"> <div class="hamburger__line-in hamburger__line-in--cross01"></div> </div> <div class="hamburger__line hamburger__line--cross02"> <div class="hamburger__line-in hamburger__line-in--cross02"></div> </div> </div> <div class="global-menu"> <div class="global-menu__wrap">%3$s </div> </div> <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none"> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> </svg> </div> </main>'
		));
	 }
	 else if (!empty($this->svgmenu_options['demo3'])) {
		wp_nav_menu(array(
			'theme_location' => 'hm',
			'menu' => 'Manishhai',
			'menu_id'        => 'SVG-menu',
		   'menu_class'        => 'manu-menu',
		   'container_class' => 'my_extra_menu_class',
		   'container' => false,
		   'items_wrap' => '<main class="main main--demo-3"> <div class="content content--demo-3"> <div class="hamburger hamburger--demo-3 js-hover"> <div class="hamburger__line hamburger__line--01"> <div class="hamburger__line-in hamburger__line-in--01"></div> </div> <div class="hamburger__line hamburger__line--02"> <div class="hamburger__line-in hamburger__line-in--02"></div> </div> <div class="hamburger__line hamburger__line--03"> <div class="hamburger__line-in hamburger__line-in--03"></div> </div> <div class="hamburger__line hamburger__line--cross01"> <div class="hamburger__line-in hamburger__line-in--cross01"></div> </div> <div class="hamburger__line hamburger__line--cross02"> <div class="hamburger__line-in hamburger__line-in--cross02"></div> </div> </div>  <div class="global-menu"> <div class="global-menu__wrap"> %3$s</div> </div> <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none"> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> </svg> </div> </main>'
		));}
		else if (!empty($this->svgmenu_options['demo4'])) {
			wp_nav_menu(array(
				'theme_location' => 'hm',
				'menu' => 'Manishhai',
				'menu_id'        => 'SVG-menu',
			   'menu_class'        => 'manu-menu',
			   'container_class' => 'my_extra_menu_class',
			   'container' => false,
			   'items_wrap' => '<main class="main main--demo-4"> <div class="content content--demo-4"> <div class="hamburger hamburger--demo-4 js-hover"> <div class="hamburger__line hamburger__line--01"> <div class="hamburger__line-in hamburger__line-in--01 hamburger__line-in--demo-4"></div> </div> <div class="hamburger__line hamburger__line--02"> <div class="hamburger__line-in hamburger__line-in--02 hamburger__line-in--demo-4"></div> </div> <div class="hamburger__line hamburger__line--03"> <div class="hamburger__line-in hamburger__line-in--03 hamburger__line-in--demo-4"></div> </div> <div class="hamburger__line hamburger__line--cross01"> <div class="hamburger__line-in hamburger__line-in--cross01 hamburger__line-in--demo-4"></div> </div> <div class="hamburger__line hamburger__line--cross02"> <div class="hamburger__line-in hamburger__line-in--cross02 hamburger__line-in--demo-4"></div> </div> </div> <div class="global-menu"> <div class="global-menu__wrap">%3$s </div> </div> <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none"> <path class="shape-overlays__path"></path> <path class="shape-overlays__path"></path> </svg> </div> </main>'
			));
	 }
			 
	
   
}

//Adding demo-2 class to body tag



public function svg_menu_add_class_to_body(){
	
	if (!empty($this->svgmenu_options['demo2'])) {
		$classes[] = 'demo-2';
     
		return $classes;
	}
	else if(!empty($this->svgmenu_options['demo3'])){
		$classes[] = 'demo-3';
     
		return $classes;
	}
}

//Adding custom class to a tag in menu

public function svg_menu_add_class_to_a_tag($atts){
	
	if (!empty($this->svgmenu_options['demo2'])) {
		$atts['class'] = "global-menu__item global-menu__item--demo-2";
		return $atts;
	}
	else if(!empty($this->svgmenu_options['demo3'])){
		$atts['class'] = "global-menu__item global-menu__item--demo-3";
		return $atts;
	}
	else if(!empty($this->svgmenu_options['demo4'])){
		$atts['class'] = "global-menu__item global-menu__item--demo-4";
		return $atts;
	}
}
 

	

}
