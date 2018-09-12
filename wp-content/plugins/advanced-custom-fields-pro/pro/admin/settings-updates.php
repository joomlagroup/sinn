<?php 

class acf_settings_updates {
	
	var $view;
	
	
	/*
	*  __construct
	*
	*  Initialize filters, action, variables and includes
	*
	*  @type	function
	*  @date	23/06/12
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
	
		// actions
		add_action('admin_menu', array($this, 'admin_menu'), 20 );
		
	}
	
	
	/*
	*  admin_menu
	*
	*  This function will add the ACF menu item to the WP admin
	*
	*  @type	action (admin_menu)
	*  @date	28/09/13
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function admin_menu() {
		
		// vars
		$basename = acf_get_setting('basename');
		
		
		// bail early if no show_admin
		if( !acf_get_setting('show_admin') ) {
			
			return;
			
		}
		
		
		// bail early if no show_updates
		if( !acf_get_setting('show_updates') ) {
			
			return;
			
		}
		
		
		// bail early if not a plugin (included in theme)
		if( !is_plugin_active($basename) ) {
			
			return;
			
		}
				
		
		// add page
		$page = add_submenu_page('edit.php?post_type=acf-field-group', __('Updates','acf'), __('Updates','acf'), acf_get_setting('capability'),'acf-settings-updates', array($this,'html') );
		
		
		// actions
		add_action('load-' . $page, array($this,'load'));
		
	}
	
	
	/*
	*  load
	*
	*  description
	*
	*  @type	function
	*  @date	7/01/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function load() {
		
		// $_POST
		if( acf_verify_nonce('activate_pro_licence') ) {
		
			$this->activate_pro_licence();
			
		} elseif( acf_verify_nonce('deactivate_pro_licence') ) {
		
			$this->deactivate_pro_licence();
			
		}
		
		
		// view
		$this->view = array(
			'license'			=> '',
			'active'			=> 0,
			'current_version'	=> acf_get_setting('version'),
		);
		
		
		// license
		if( acf_pro_is_license_active() ) {
		
			$this->view['license'] = acf_pro_get_license();
			$this->view['active'] = 1;
			
		}	
	}
	
	
	/*
	*  html
	*
	*  description
	*
	*  @type	function
	*  @date	7/01/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function html() {
		
		// load view
		acf_pro_get_view('settings-updates', $this->view);
		
	}
	
	
	/*
	*  activate_pro_licence
	*
	*  description
	*
	*  @type	function
	*  @date	16/01/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function activate_pro_licence() {

    $response = array();
	$response['license'] = 1;
	$response['message'] = 'Thank you';
	$class = '';

    acf_pro_update_license($response['license']);	
	acf_add_admin_notice($response['message'], $class);
		
	}
	
	
	/*
	*  deactivate_pro_licence
	*
	*  description
	*
	*  @type	function
	*  @date	16/01/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (int)
	*  @return	$post_id (int)
	*/
	
	function deactivate_pro_licence() {
		
		// validate
		if( !acf_pro_is_license_active() ) {
			
			return;
			
		}

		$response = array();
		$response['status'] = 1;
		$response['message'] = 'The License is Deactivate now';
		$class = '';
		
		
		// allways clear DB
		acf_pro_update_license('');
		
		
		// action
		if( $response['status'] == 1 ) {	
			
		}
		
		
		// show message
		if( $response['message'] ) {
		
			acf_add_admin_notice($response['message'], $class);
			
		}
		
	}
	
}


// initialize
new acf_settings_updates();

?>
