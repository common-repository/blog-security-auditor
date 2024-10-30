<?php
	$user = wp_get_current_user();

	if ( in_array( 'administrator', (array) $user->roles ) ) {
		
		$username = $user->user_login;
                                
		echo __('<h5> Username Security / SEO Checkup </h5>','blog-security-auditor');

		if( strpos( $username, "admin") >= 0 ) {
			echo '<div class="alert alert-info alert-with-icon alert alert-success">
					<span data-notify="icon" class="pe-7s-bel"><i class="fa fa-check-square" aria-hidden="true"></i></span>
				    <span data-notify="message">'.__('<b> Success - </b> Username Security Test Passed','blog-security-auditor').'</span>
				    <br />
				    <span data-notify="message">'.__('<b> Good Job</b> Your username does not contain any words like admin, administrator etc.','blog-security-auditor').'</span>

				</div>';
		} else {
			echo '<div class="alert alert-info alert-with-icon alert alert-danger">
					<span data-notify="icon" class="pe-7s-paint-bucke"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>
					<span data-notify="message">'.__('<b> Warning - </b> Your username contains "admin" words in username. Change it by following link.','blog-security-auditor').'   <a href="'.site_url().'/wp-admin/profile.php">'.__('Edit Profile','blog-security-auditor').'</a></span>
				</div>';
		}
	}
?>