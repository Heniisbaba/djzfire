<?php
/**
 * Skin file for the theme.
 */

// Disable direct call
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Theme init
if (!function_exists('jarvis_action_skin_theme_setup')) {
	add_action( 'jarvis_action_init_theme', 'jarvis_action_skin_theme_setup', 1 );
	function jarvis_action_skin_theme_setup() {

		// Add skin fonts in the used fonts list
		add_filter('jarvis_filter_used_fonts',			'jarvis_filter_skin_used_fonts');
		// Add skin fonts (from Google fonts) in the main fonts list (if not present).
		add_filter('jarvis_filter_list_fonts',			'jarvis_filter_skin_list_fonts');

		// Add skin stylesheets
		add_action('jarvis_action_add_styles',			'jarvis_action_skin_add_styles');
		// Add skin inline styles
		add_filter('jarvis_filter_add_styles_inline',		'jarvis_filter_skin_add_styles_inline');
		// Add skin responsive styles
		add_action('jarvis_action_add_responsive',		'jarvis_action_skin_add_responsive');
		// Add skin responsive inline styles
		add_filter('jarvis_filter_add_responsive_inline',	'jarvis_filter_skin_add_responsive_inline');

		// Add skin scripts
		add_action('jarvis_action_add_scripts',			'jarvis_action_skin_add_scripts');
		// Add skin scripts inline
		add_action('jarvis_action_add_scripts_inline',	'jarvis_action_skin_add_scripts_inline');

		// Add skin less files into list for compilation
		add_filter('jarvis_filter_compile_less',			'jarvis_filter_skin_compile_less');


		/* Color schemes
		
		// Accenterd colors
		accent1			- theme accented color 1
		accent1_hover	- theme accented color 1 (hover state)
		accent2			- theme accented color 2
		accent2_hover	- theme accented color 2 (hover state)		
		accent3			- theme accented color 3
		accent3_hover	- theme accented color 3 (hover state)		
		
		// Headers, text and links
		text			- main content
		text_light		- post info
		text_dark		- headers
		inverse_text	- text on accented background
		inverse_light	- post info on accented background
		inverse_dark	- headers on accented background
		inverse_link	- links on accented background
		inverse_hover	- hovered links on accented background
		
		// Block's border and background
		bd_color		- border for the entire block
		bg_color		- background color for the entire block
		bg_image, bg_image_position, bg_image_repeat, bg_image_attachment  - first background image for the entire block
		bg_image2,bg_image2_position,bg_image2_repeat,bg_image2_attachment - second background image for the entire block
		
		// Alternative colors - highlight blocks, form fields, etc.
		alter_text		- text on alternative background
		alter_light		- post info on alternative background
		alter_dark		- headers on alternative background
		alter_link		- links on alternative background
		alter_hover		- hovered links on alternative background
		alter_bd_color	- alternative border
		alter_bd_hover	- alternative border for hovered state or active field
		alter_bg_color	- alternative background
		alter_bg_hover	- alternative background for hovered state or active field 
		alter_bg_image, alter_bg_image_position, alter_bg_image_repeat, alter_bg_image_attachment - background image for the alternative block
		
		*/

		// Add color schemes
		jarvis_add_color_scheme('original', array(

			'title'					=> esc_html__('Original', 'jarvis'),

			// Accent colors
			'accent1'				=> '#f92056',
			'accent1_hover'			=> '#00deff',
			
			// Headers, text and links colors
			'text'					=> '#9fa9b1',
			'text_light'			=> '#a6b0b9',
			'text_dark'				=> '#ffffff',
			'inverse_text'			=> '#ffffff',
			'inverse_light'			=> '#ffffff',
			'inverse_dark'			=> '#9fa9b1',
			'inverse_link'			=> '#ffffff',
			'inverse_hover'			=> '#ffffff',
			
			// Whole block border and background
			'bd_color'				=> '#33414c',
			'bg_color'				=> '#0a1116',
			'bg_image'				=> jarvis_get_file_url('images/bg_header.jpg'),
			'bg_image_position'		=> 'center center',
			'bg_image_repeat'		=> 'no-repeat',
			'bg_image_attachment'	=> 'scroll',
			'bg_image2'				=> '',
			'bg_image2_position'	=> 'center center',
			'bg_image2_repeat'		=> 'no-repeat',
			'bg_image2_attachment'	=> 'scroll',
		
			// Alternative blocks (submenu items, form's fields, etc.)
			'alter_text'			=> '#a6b0b9',
			'alter_light'			=> '#626a71',
			'alter_dark'			=> '#ffffff',
			'alter_link'			=> '#ffffff',
			'alter_hover'			=> '#a6b0b9',
			'alter_bd_color'		=> '#182530',
			'alter_bd_hover'		=> '#24303b',
			'alter_bg_color'		=> '#182530',
			'alter_bg_hover'		=> '#0a1116',
			'alter_bg_image'			=> jarvis_get_file_url('images/bg-404.png'),
			'alter_bg_image_position'	=> 'center center',
			'alter_bg_image_repeat'		=> 'no-repeat',
			'alter_bg_image_attachment'	=> 'scroll',
			)
		);

		// Add color schemes
		jarvis_add_color_scheme('color_scheme_2', array(

                'title'					=> esc_html__('Color 2', 'jarvis'),

                // Accent colors
                'accent1'				=> '#f5be58',
                'accent1_hover'			=> '#f30072',

                // Headers, text and links colors
                'text'					=> '#9fa9b1',
                'text_light'			=> '#a6b0b9',
                'text_dark'				=> '#ffffff',
                'inverse_text'			=> '#ffffff',
                'inverse_light'			=> '#ffffff',
                'inverse_dark'			=> '#9fa9b1',
                'inverse_link'			=> '#ffffff',
                'inverse_hover'			=> '#ffffff',

                // Whole block border and background
                'bd_color'				=> '#33414c',
                'bg_color'				=> '#0a1116',
                'bg_image'				=> jarvis_get_file_url('images/bg_header.jpg'),
                'bg_image_position'		=> 'center center',
                'bg_image_repeat'		=> 'no-repeat',
                'bg_image_attachment'	=> 'scroll',
                'bg_image2'				=> '',
                'bg_image2_position'	=> 'center center',
                'bg_image2_repeat'		=> 'no-repeat',
                'bg_image2_attachment'	=> 'scroll',

                // Alternative blocks (submenu items, form's fields, etc.)
                'alter_text'			=> '#a6b0b9',
                'alter_light'			=> '#626a71',
                'alter_dark'			=> '#ffffff',
                'alter_link'			=> '#ffffff',
                'alter_hover'			=> '#a6b0b9',
                'alter_bd_color'		=> '#1c2a35',
                'alter_bd_hover'		=> '#24303b',
                'alter_bg_color'		=> '#182530',
                'alter_bg_hover'		=> '#0a1116',
                'alter_bg_image'			=> jarvis_get_file_url('images/bg-404.png'),
                'alter_bg_image_position'	=> 'center center',
                'alter_bg_image_repeat'		=> 'no-repeat',
                'alter_bg_image_attachment'	=> 'scroll',
			)
		);

		// Add color schemes
		jarvis_add_color_scheme('color_scheme_3', array(

                'title'					=> esc_html__('Color 3', 'jarvis'),

                // Accent colors
                'accent1'				=> '#9c60e6',
                'accent1_hover'			=> '#24c0b3',

                // Headers, text and links colors
                'text'					=> '#9fa9b1',
                'text_light'			=> '#a6b0b9',
                'text_dark'				=> '#ffffff',
                'inverse_text'			=> '#ffffff',
                'inverse_light'			=> '#ffffff',
                'inverse_dark'			=> '#9fa9b1',
                'inverse_link'			=> '#ffffff',
                'inverse_hover'			=> '#ffffff',

                // Whole block border and background
                'bd_color'				=> '#33414c',
                'bg_color'				=> '#0a1116',
                'bg_image'				=> jarvis_get_file_url('images/bg_header.jpg'),
                'bg_image_position'		=> 'center center',
                'bg_image_repeat'		=> 'no-repeat',
                'bg_image_attachment'	=> 'scroll',
                'bg_image2'				=> '',
                'bg_image2_position'	=> 'center center',
                'bg_image2_repeat'		=> 'no-repeat',
                'bg_image2_attachment'	=> 'scroll',

                // Alternative blocks (submenu items, form's fields, etc.)
                'alter_text'			=> '#a6b0b9',
                'alter_light'			=> '#626a71',
                'alter_dark'			=> '#ffffff',
                'alter_link'			=> '#ffffff',
                'alter_hover'			=> '#a6b0b9',
                'alter_bd_color'		=> '#1c2a35',
                'alter_bd_hover'		=> '#24303b',
                'alter_bg_color'		=> '#182530',
                'alter_bg_hover'		=> '#0a1116',
                'alter_bg_image'			=> jarvis_get_file_url('images/bg-404.png'),
                'alter_bg_image_position'	=> 'center center',
                'alter_bg_image_repeat'		=> 'no-repeat',
                'alter_bg_image_attachment'	=> 'scroll',
			)
		);

		// Add color schemes
		jarvis_add_color_scheme('color_scheme_4', array(

                'title'					=> esc_html__('Color 4', 'jarvis'),

                // Accent colors
                'accent1'				=> '#00dabc',
                'accent1_hover'			=> '#ffec00',

                // Headers, text and links colors
                'text'					=> '#9fa9b1',
                'text_light'			=> '#a6b0b9',
                'text_dark'				=> '#ffffff',
                'inverse_text'			=> '#ffffff',
                'inverse_light'			=> '#ffffff',
                'inverse_dark'			=> '#9fa9b1',
                'inverse_link'			=> '#ffffff',
                'inverse_hover'			=> '#ffffff',

                // Whole block border and background
                'bd_color'				=> '#33414c',
                'bg_color'				=> '#0a1116',
                'bg_image'				=> jarvis_get_file_url('images/bg_header.jpg'),
                'bg_image_position'		=> 'center center',
                'bg_image_repeat'		=> 'no-repeat',
                'bg_image_attachment'	=> 'scroll',
                'bg_image2'				=> '',
                'bg_image2_position'	=> 'center center',
                'bg_image2_repeat'		=> 'no-repeat',
                'bg_image2_attachment'	=> 'scroll',

                // Alternative blocks (submenu items, form's fields, etc.)
                'alter_text'			=> '#a6b0b9',
                'alter_light'			=> '#626a71',
                'alter_dark'			=> '#ffffff',
                'alter_link'			=> '#ffffff',
                'alter_hover'			=> '#a6b0b9',
                'alter_bd_color'		=> '#1c2a35',
                'alter_bd_hover'		=> '#24303b',
                'alter_bg_color'		=> '#182530',
                'alter_bg_hover'		=> '#0a1116',
                'alter_bg_image'			=> jarvis_get_file_url('images/bg-404.png'),
                'alter_bg_image_position'	=> 'center center',
                'alter_bg_image_repeat'		=> 'no-repeat',
                'alter_bg_image_attachment'	=> 'scroll',
			)
		);

		/* Font slugs:
		h1 ... h6	- headers
		p			- plain text
		link		- links
		info		- info blocks (Posted 15 May, 2015 by John Doe)
		menu		- main menu
		submenu		- dropdown menus
		logo		- logo text
		button		- button's caption
		input		- input fields
		*/

		// Add Custom fonts
		jarvis_add_custom_font('h1', array(
			'title'			=> esc_html__('Heading 1', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '5.385rem',
			'font-weight'	=> '700',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('h2', array(
			'title'			=> esc_html__('Heading 2', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '2.308rem',
			'font-weight'	=> '700',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('h3', array(
			'title'			=> esc_html__('Heading 3', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '2.077rem',
			'font-weight'	=> '400',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('h4', array(
			'title'			=> esc_html__('Heading 4', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '1.385rem',
			'font-weight'	=> '400',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('h5', array(
			'title'			=> esc_html__('Heading 5', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '0.846rem',
			'font-weight'	=> '400',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('h6', array(
			'title'			=> esc_html__('Heading 6', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '0.846rem',
			'font-weight'	=> '400',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '',
			'margin-bottom'	=> ''
			)
		);
		jarvis_add_custom_font('p', array(
			'title'			=> esc_html__('Text', 'jarvis'),
			'description'	=> '',
			'font-family'	=> 'Montserrat',
			'font-size' 	=> '13px',
			'font-weight'	=> '400',
			'font-style'	=> '',
			'line-height'	=> '1.6em',
			'margin-top'	=> '',
			'margin-bottom'	=> '1em'
			)
		);
		jarvis_add_custom_font('menu', array(
			'title'			=> esc_html__('Main menu items', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '0.769rem',
			'font-weight'	=> '700',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '2.15rem',
			'margin-bottom'	=> '2.15rem'
			)
		);
		jarvis_add_custom_font('submenu', array(
			'title'			=> esc_html__('Dropdown menu items', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '0.846rem',
			'font-weight'	=> '700',
			'font-style'	=> '',
			'line-height'	=> '1.3em',
			'margin-top'	=> '1rem',
			'margin-bottom'	=> '1rem'
			)
		);
		jarvis_add_custom_font('logo', array(
			'title'			=> esc_html__('Logo', 'jarvis'),
			'description'	=> '',
			'font-family'	=> '',
			'font-size' 	=> '2.308rem',
			'font-weight'	=> '700',
			'font-style'	=> '',
			'line-height'	=> '0.8em',
			'margin-top'	=> '2.75rem',
			'margin-bottom'	=> '2.75rem'
			)
		);
	}
}





//------------------------------------------------------------------------------
// Skin's fonts
//------------------------------------------------------------------------------

// Add skin fonts in the used fonts list
if (!function_exists('jarvis_filter_skin_used_fonts')) {
	//add_filter('jarvis_filter_used_fonts', 'jarvis_filter_skin_used_fonts');
	function jarvis_filter_skin_used_fonts($theme_fonts) {
        $theme_fonts['Montserrat'] = 1;
		return $theme_fonts;
	}
}

// Add skin fonts (from Google fonts) in the main fonts list (if not present).
// To use custom font-face you not need add it into list in this function
// How to install custom @font-face fonts into the theme?
// All @font-face fonts are located in "theme_name/css/font-face/" folder in the separate subfolders for the each font. Subfolder name is a font-family name!
// Place full set of the font files (for each font style and weight) and css-file named stylesheet.css in the each subfolder.
// Create your @font-face kit by using Fontsquirrel @font-face Generator (http://www.fontsquirrel.com/fontface/generator)
// and then extract the font kit (with folder in the kit) into the "theme_name/css/font-face" folder to install
if (!function_exists('jarvis_filter_skin_list_fonts')) {
	//add_filter('jarvis_filter_list_fonts', 'jarvis_filter_skin_list_fonts');
	function jarvis_filter_skin_list_fonts($list) {
		if (!isset($list['Lato']))	$list['Lato'] = array('family'=>'sans-serif');
        if (!isset($list['Montserrat']))	    $list['Montserrat'] = array('family'=>'sans-serif', 'link'=>'Montserrat:,400,700,900');
		return $list;
	}
}



//------------------------------------------------------------------------------
// Skin's stylesheets
//------------------------------------------------------------------------------
// Add skin stylesheets
if (!function_exists('jarvis_action_skin_add_styles')) {
	//add_action('jarvis_action_add_styles', 'jarvis_action_skin_add_styles');
	function jarvis_action_skin_add_styles() {
		// Add stylesheet files
		jarvis_enqueue_style( 'jarvis-skin-style', jarvis_get_file_url('skin.css'), array(), null );
		if (file_exists(jarvis_get_file_dir('skin.customizer.css')))
			jarvis_enqueue_style( 'jarvis-skin-customizer-style', jarvis_get_file_url('skin.customizer.css'), array(), null );
	}
}

// Add skin inline styles
if (!function_exists('jarvis_filter_skin_add_styles_inline')) {
	//add_filter('jarvis_filter_add_styles_inline', 'jarvis_filter_skin_add_styles_inline');
	function jarvis_filter_skin_add_styles_inline($custom_style) {
		// Todo: add skin specific styles in the $custom_style to override
		//       rules from style.css and shortcodes.css
		return $custom_style;
	}
}

// Add skin responsive styles
if (!function_exists('jarvis_action_skin_add_responsive')) {
	//add_action('jarvis_action_add_responsive', 'jarvis_action_skin_add_responsive');
	function jarvis_action_skin_add_responsive() {
		$suffix = jarvis_param_is_off(jarvis_get_custom_option('show_sidebar_outer')) ? '' : '-outer';
		if (file_exists(jarvis_get_file_dir('skin.responsive'.($suffix).'.css'))) 
			jarvis_enqueue_style( 'theme-skin-responsive-style', jarvis_get_file_url('skin.responsive'.($suffix).'.css'), array(), null );
	}
}

// Add skin responsive inline styles
if (!function_exists('jarvis_filter_skin_add_responsive_inline')) {
	//add_filter('jarvis_filter_add_responsive_inline', 'jarvis_filter_skin_add_responsive_inline');
	function jarvis_filter_skin_add_responsive_inline($custom_style) {
		return $custom_style;	
	}
}

// Add skin.less into list files for compilation
if (!function_exists('jarvis_filter_skin_compile_less')) {
	//add_filter('jarvis_filter_compile_less', 'jarvis_filter_skin_compile_less');
	function jarvis_filter_skin_compile_less($files) {
		if (file_exists(jarvis_get_file_dir('skin.less'))) {
		 	$files[] = jarvis_get_file_dir('skin.less');
		}
		return $files;	
	}
}



//------------------------------------------------------------------------------
// Skin's scripts
//------------------------------------------------------------------------------

// Add skin scripts
if (!function_exists('jarvis_action_skin_add_scripts')) {
	//add_action('jarvis_action_add_scripts', 'jarvis_action_skin_add_scripts');
	function jarvis_action_skin_add_scripts() {
		if (file_exists(jarvis_get_file_dir('skin.js')))
			jarvis_enqueue_script( 'theme-skin-script', jarvis_get_file_url('skin.js'), array(), null );
		if (jarvis_get_theme_option('show_theme_customizer') == 'yes' && file_exists(jarvis_get_file_dir('skin.customizer.js')))
			jarvis_enqueue_script( 'theme-skin-customizer-script', jarvis_get_file_url('skin.customizer.js'), array(), null );
        /*Special script from Animate background color*/
        if (jarvis_get_theme_option('animate_bg') == 'yes' && file_exists(jarvis_get_file_dir('special.animate-bg.js')))
			jarvis_enqueue_script( 'theme-special-animate-bg-script', jarvis_get_file_url('special.animate-bg.js'), array(), null );
        /*Special script from Gradient border-image*/
        if (file_exists(jarvis_get_file_dir('special.gradient-bd.js')))
			jarvis_enqueue_script( 'theme-special-gradient-bd-script', jarvis_get_file_url('special.gradient-bd.js'), array(), null );
        /*Special script from Collapse Audio*/
        if (file_exists(jarvis_get_file_dir('special.collapse-audio.js')))
            jarvis_enqueue_script( 'theme-special-collapse-audio-script', jarvis_get_file_url('special.collapse-audio.js'), array(), null );
        /*Special script from Fix autocomplete in Chrome*/
        if (file_exists(jarvis_get_file_dir('special.fix-autocomplete.js')))
			jarvis_enqueue_script( 'theme-skin-fix-autocomplete-script', jarvis_get_file_url('special.fix-autocomplete.js'), array(), null );
        /*Special script from table cart Woocommerce*/
        if (file_exists(jarvis_get_file_dir('special.table-woo.js')))
			jarvis_enqueue_script( 'theme-skin-table-woo-script', jarvis_get_file_url('special.table-woo.js'), array(), null );
	}
}

// Add skin scripts inline
if (!function_exists('jarvis_action_skin_add_scripts_inline')) {
	//add_action('jarvis_action_add_scripts_inline', 'jarvis_action_skin_add_scripts_inline');
	function jarvis_action_skin_add_scripts_inline() {
		// Todo: add skin specific scripts
		// Example:
		// echo '<script type="text/javascript">'
		//	. 'jQuery(document).ready(function() {'
		//	. "if (JARVIS_STORAGE['theme_font']=='') JARVIS_STORAGE['theme_font'] = '" . jarvis_get_custom_font_settings('p', 'font-family') . "';"
		//	. "JARVIS_STORAGE['theme_skin_color'] = '" . jarvis_get_scheme_color('accent1') . "';"
		//	. "});"
		//	. "< /script>";
	}
}
?>