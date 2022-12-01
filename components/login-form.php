<?php
/**
 * Template part for displaying login form / logout button
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blockhaus
 */

?>

<?php

		$args = array(
			'id_username' => 'user',
			'id_password' => 'pass',
		);

		if( !is_user_logged_in() ) {

			wp_login_form( $args );
			echo '<div class="flex gap-6 items-center justify-center mt-6"><a class="password-reset underline decoration-accent decoration-4" href="' . wp_lostpassword_url( ) . '" title="Lost Password">Click this link to reset your password</a></div>';
			
		} else {

			$current_user = wp_get_current_user();
		
			echo '<div class="flex flex-col gap-6 items-center justify-center mt-6">
			<p>Hi, ' . $current_user->display_name . '</p>
			<a class="bg-offset py-1 px-2 border border-current shadow-md" href="' . esc_url( wp_logout_url() ) . '">Logout</a></div>';
		}

?>