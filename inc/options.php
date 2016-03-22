<?php
	
function yw_add_submenu() {
		add_submenu_page( 'themes.php', 'My Super Awesome Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
	}
add_action( 'admin_menu', 'yw_add_submenu' );
	

function yw_settings_init() { 
	register_setting( 'theme_options', 'yw_options_settings' );
	
	add_settings_section(
		'yw_options_page_section', 
		'Use this page to modify the header and footer of the theme', 
		'yw_options_page_section_callback', 
		'theme_options'
	);
	
	function yw_options_page_section_callback() { 
		echo 'You have three main options to change the appearance of your there! The options are listed below:
';
	}


	add_settings_field( 
		'yw_radio_field', 
		'Choose an option', 
		'yw_radio_field_render', 
		'theme_options', 
		'yw_options_page_section'  
	);
	
	add_settings_field( 
		'yw_textarea_field', 
		'Enter content in the textarea', 
		'yw_textarea_field_render', 
		'theme_options', 
		'yw_options_page_section'  
	);
	
	add_settings_field( 
		'yw_select_field', 
		'Choose from the dropdown', 
		'yw_select_field_render', 
		'theme_options', 
		'yw_options_page_section'  
	);

	
	function yw_radio_field_render() { 
		$options = get_option( 'yw_options_settings' );
		?>
		<input type="radio" name="yw_options_settings[yw_radio_field]" <?php if (isset($options['yw_radio_field'])) checked( $options['yw_radio_field'], 1 ); ?> value="rgba(34,38,75,0.8)" /> <label>Default</label><br />
		<input type="radio" name="yw_options_settings[yw_radio_field]" <?php if (isset($options['yw_radio_field'])) checked( $options['yw_radio_field'], 2 ); ?> value="#b56969" /> <label>Light Pink</label><br />
		<input type="radio" name="yw_options_settings[yw_radio_field]" <?php if (isset($options['yw_radio_field'])) checked( $options['yw_radio_field'], 3 ); ?> value="#22264B" /> <label>Dark Blue</label>
		<?php
	}
	
	function yw_textarea_field_render() { 
		$options = get_option( 'yw_options_settings' );
		?>
		<textarea cols="40" rows="5" name="yw_options_settings[yw_textarea_field]"><?php if (isset($options['yw_textarea_field'])) echo $options['yw_textarea_field']; ?></textarea>
		<?php
	}

	function yw_select_field_render() { 
		$options = get_option( 'yw_options_settings' );
		?>
		<select name="yw_options_settings[yw_select_field]">
			<option value="#e6cf8b" <?php if (isset($options['yw_select_field'])) selected( $options['yw_select_field'], 1 ); ?>>Default</option>
			<option value="#b56969" <?php if (isset($options['yw_select_field'])) selected( $options['yw_select_field'], 2 ); ?>>Light Pink</option>
		</select>
	<?php
	}
	
	function my_theme_options_page(){ 
		?>
		<form action="options.php" method="post">
			<h2>Waffle Options Page</h2>
			<?php
			settings_fields( 'theme_options' );
			do_settings_sections( 'theme_options' );
			submit_button();
			?>
		</form>
		<?php
	}

}

add_action( 'admin_init', 'yw_settings_init' );
