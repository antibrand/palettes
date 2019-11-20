<?php
/**
 * Palettes
 *
 * @package     Palettes
 * @version     1.0.0
 * @link        https://github.com/antibrand/palettes
 *
 * Plugin Name: palettes
 * Plugin URI: https://github.com/antibrand/palettes
 * Description: User color palettes for your website management system.
 * Version: 1.0.0
 * Author:
 * Author URI:
 * Text Domain: antibrand
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin directory URL
 *
 * @since  1.0.0
 * @return string Returns the URL directory path (with trailing slash)
 *                for the plugin __FILE__ passed in.
 */
if ( ! defined( 'AB_PALETTES' ) ) {
	define( 'AB_PALETTES', plugin_dir_url( __FILE__ ) );
}

class AB_Palettes {

	/**
	 * List of colors registered in this plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 * @var array $colors List of colors registered in this plugin.
	 *                    Needed for registering default palette dependency.
	 */
	private $colors = [
		'vinyard',
		'primary',
		'80s-kid',
		'aubergine',
		'cruise',
		'flat',
		'lawn',
		'seashore'
	];

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access private
	 * @return self
	 */
	public function __construct() {

		// Add the color palettes.
		add_action( 'admin_init' , [ $this, 'add_palettes' ] );

	}

	/**
	 * Register color palettes
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed[] Returns color functions with
	 *                 arrays of color palettes.
	 */
	public function add_palettes() {

		// Set up the right-to-left language type suffix.
		if ( is_rtl() ) {
			$suffix = '-rtl';
		} else {
			$suffix = '';
		}

		wp_admin_css_color( 'light', _x( 'Light', 'admin color scheme' ),
			admin_url( "css/colors/light/colors$suffix.css" ),
			[ '#e5e5e5', '#999999', '#d64e07', '#04a4cc' ],
			[ 'base' => '#999999', 'focus' => '#cccccc', 'current' => '#cccccc' ]
		);

		wp_admin_css_color( 'blue', _x( 'Blue', 'admin color scheme' ),
			admin_url( "css/colors/blue/colors$suffix.css" ),
			[ '#096484', '#4796b3', '#52accc', '#74B6CE' ],
			[ 'base' => '#e5f8ff', 'focus' => '#ffffff', 'current' => '#ffffff' ]
		);

		wp_admin_css_color( 'midnight', _x( 'Midnight', 'admin color scheme' ),
			admin_url( "css/colors/midnight/colors$suffix.css" ),
			[ '#25282b', '#363b3f', '#69a8bb', '#e14d43' ],
			[ 'base' => '#f1f2f3', 'focus' => '#ffffff', 'current' => '#ffffff' ]
		);

		wp_admin_css_color( 'sunrise', _x( 'Sunrise', 'admin color scheme' ),
			admin_url( "css/colors/sunrise/colors$suffix.css" ),
			[ '#b43c38', '#cf4944', '#dd823b', '#ccaf0b' ],
			[ 'base' => '#f3f1f1', 'focus' => '#ffffff', 'current' => '#ffffff' ]
		);

		wp_admin_css_color( 'ectoplasm', _x( 'Ectoplasm', 'admin color scheme' ),
			admin_url( "css/colors/ectoplasm/colors$suffix.css" ),
			[ '#413256', '#523f6d', '#a3b745', '#d46f15' ],
			[ 'base' => '#ece6f6', 'focus' => '#fff', 'current' => '#fffffffff' ]
		);

		wp_admin_css_color( 'ocean', _x( 'Ocean', 'admin color scheme' ),
			admin_url( "css/colors/ocean/colors$suffix.css" ),
			[ '#627c83', '#738e96', '#9ebaa0', '#aa9d88' ],
			[ 'base' => '#f2fcff', 'focus' => '#ffffff', 'current' => '#ffffff' ]
		);

		wp_admin_css_color( 'coffee', _x( 'Coffee', 'admin color scheme' ),
			admin_url( "css/colors/coffee/colors$suffix.css" ),
			[ '#46403c', '#59524c', '#c7a589', '#9ea476' ],
			[ 'base' => '#f3f2f1', 'focus' => '#ffffff', 'current' => '#ffffff' ]
		);

		// Vinyard color scheme.
		wp_admin_css_color(
			'vinyard', __( 'Vinyard', 'admin_schemes' ),
			AB_PALETTES . "vineyard/colors$suffix.css",
			[ '#301D25', '#462b36', '#d3995d', '#eabe3f' ],
			[ 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Primary color scheme.
		wp_admin_css_color(
			'primary', __( 'Primary', 'admin_schemes' ),
			AB_PALETTES .  "primary/colors$suffix.css",
			[ '#282b48', '#35395c', '#f38135', '#e7c03a' ],
			[ 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// 80's Kid color scheme.
		wp_admin_css_color(
			'80s-kid', __( '80\'s Kid', 'admin_schemes' ),
			AB_PALETTES .  "80s-kid/colors$suffix.css",
			[ '#0A3D80', '#0c4da1', '#ed5793', '#eb853b' ],
			[ 'base' => '#e4e5e7', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Aubergine color scheme.
		wp_admin_css_color(
			'aubergine', __( 'Aubergine', 'admin_schemes' ),
			AB_PALETTES .  "aubergine/colors$suffix.css",
			[ '#4c4b5f', '#585a61', '#e87162', '#da9b49' ],
			[ 'base' => '#e4e4e7', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Cruise color scheme.
		wp_admin_css_color(
			'cruise', __( 'Cruise', 'admin_schemes' ),
			AB_PALETTES .  "cruise/colors$suffix.css",
			[ '#292B46', '#36395c', '#8bbc9f', '#d2ac1f' ],
			[ 'base' => '#f1f1f3', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Flat color scheme.
		wp_admin_css_color(
			'flat', __( 'Flat', 'admin_schemes' ),
			AB_PALETTES .  "flat/colors$suffix.css",
			[ '#1F2C39', '#2c3e50', '#1abc9c', '#f39c12' ],
			[ 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Lawn color scheme.
		wp_admin_css_color(
			'lawn', __( 'Lawn', 'admin_schemes' ),
			AB_PALETTES .  "lawn/colors$suffix.css",
			[ '#0F1515', '#1e2a29', '#5D824B', '#a7b145' ],
			[ 'base' => '#f1f3f3', 'focus' => '#fff', 'current' => '#fff' ]
		);

		// Seashore color scheme.
		wp_admin_css_color(
			'seashore', __( 'Seashore', 'admin_schemes' ),
			AB_PALETTES .  "seashore/colors$suffix.css",
			[ '#F8F6F1', '#d5cdad', '#7D6B5C', '#456a7f' ],
			[ 'base' => '#533C2F', 'focus' => '#F8F6F1', 'current' => '#F8F6F1' ]
		);

	}

}

// Define global access.
global $ab_palettes;

// Run the class.
$ab_palettes = new AB_Palettes;