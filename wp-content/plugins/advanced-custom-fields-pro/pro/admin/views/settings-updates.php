<?php 

// extract
extract($args);


// vars
$active = $license ? true : false;
$nonce = $active ? 'deactivate_pro_licence' : 'activate_pro_licence';
$input = $active ? 'password' : 'text';
$button = $active ? __('Deactivate License', 'acf') : __('Activate License', 'acf');
$readonly = $active ? 1 : 0;

?>
<div class="wrap acf-settings-wrap">
	
	<h1><?php _e('Updates', 'acf'); ?></h1>
	
	<div class="acf-box">
		<div class="title">
			<h3><?php echo acf_get_setting('name'); ?> <?php _e('License','acf') ?></h3>
		</div>
		<div class="inner">
			<p><?php _e("To unlock updates, please enter your license key below. If you don't have a licence key, please see",'acf'); ?> <a href="http://www.advancedcustomfields.com/pro" target="_blank"><?php _e('details & pricing', 'acf'); ?></a></p>
			<form action="" method="post">
			<div class="acf-hidden">
				<input type="hidden" name="_acfnonce" value="<?php echo wp_create_nonce( $nonce ); ?>" />
			</div>
			<table class="form-table">
                <tbody>
                	<tr>
                    	<th>
                    		<label for="acf-field-acf_pro_licence"><?php _e('License Key', 'acf'); ?></label>
                    	</th>
						<td>
							<?php 
							
							// render field
							acf_render_field(array(
								'type'		=> $input,
								'name'		=> 'acf_pro_licence',
								'value'		=> str_repeat('*', strlen($license)),
								'readonly'	=> $readonly
							));
							
							?>
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" value="<?php echo $button; ?>" class="acf-button blue">
						</td>
					</tr>
				</tbody>
			</table>
			</form>
            
		</div>
		
	</div>
	
	<div class="acf-box">
		<div class="title">
			<h3><?php _e('Update Information', 'acf'); ?></h3>
		</div>
		<div class="inner">
			<table class="form-table">
                <tbody>
                	<tr>
                    	<th>
                    		<label><?php _e('Current Version', 'acf'); ?></label>
                    	</th>
						<td>
							<?php echo $current_version; ?>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
            
		</div>
		
		
	</div>
	
</div>
<style type="text/css">
	#acf_pro_licence {
		width: 75%;
	}
</style>
