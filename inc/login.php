<?php

/**
 * Custom login function
 *
 */ 

$page_id = "";
$product_pages_args = array(
'meta_key' => '_wp_page_template',
'meta_value' => 'page-login.php'
);

$product_pages = get_pages( $product_pages_args );
foreach ( $product_pages as $product_page ) {
$page_id.= $product_page->ID;
}

function goto_login_page() {
global $page_id;
$login_page = home_url( '/?page_id='. $page_id. '/' );
$page = basename($_SERVER['REQUEST_URI']);

if( $page == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
wp_redirect($login_page);
exit;
}
}
add_action('init','goto_login_page');

function login_failed() {
global $page_id;
$login_page = home_url( '/?page_id='. $page_id. '/' );
wp_redirect( $login_page . '&login=failed' );
exit;
}
add_action( 'wp_login_failed', 'login_failed' );

function blank_username_password( $user, $username, $password ) {
global $page_id;
$login_page = home_url( '/?page_id='. $page_id. '/' );
if( $username == "" || $password == "" ) {
wp_redirect( $login_page . "&login=blank" );
exit;
}
}
add_filter( 'authenticate', 'blank_username_password', 1, 3);

//echo $login_page = $page_path ;

function logout_page() {
global $page_id;
$login_page = home_url( '/?page_id='. $page_id. '/' );
wp_redirect( $login_page . "&login=false" );
exit;
}
add_action('wp_logout', 'logout_page');

$page_showing = basename($_SERVER['REQUEST_URI']);

// if (strpos($page_showing, 'failed') !== false) {
// echo '<p class="error-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
// }
// elseif (strpos($page_showing, 'blank') !== false ) {
// echo '<p class="error-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
// }

class SiteRules {

    /**
     * Redirect anyone visiting the wordpress register link to the /register page
     */
    public function redirect_register($link) {
        wp_redirect( wp_registration_url() );
        exit();
    }

    /**
     * Rewrite the register url
     */
    public function register_url($url) {
        return home_url( '' );
    }
}
//
// Rewrite the register url to the custom page
//
add_filter( 'register_url', array( 'SiteRules', 'register_url' ) );
//
// Redirect the registration form
//
add_action( 'login_form_register', array( 'SiteRules', 'redirect_register' ) );