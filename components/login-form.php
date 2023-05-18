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
			echo '<div class="flex gap-6 items-center justify-center py-12"><a class="password-reset underline decoration-accent-default decoration-1" href="' . wp_lostpassword_url( ) . '" title="Lost Password">Click this link to reset your password</a></div>';
			
		} else {

			$current_user = wp_get_current_user();
		
			echo '<div class="flex flex-col gap-6 items-center justify-center py-12">
			<p>Hi, ' . $current_user->display_name . '</p>
			<a class="rounded-md inline-block w-fit bg-secondary text-white px-6 py-2 hover:ring-2 focus:ring-2 ring-offset-2 ring-transparent hover:ring-secondary focus:ring-secondary" href="' . esc_url( wp_logout_url() ) . '">Logout</a></div>';
			
		}

?>