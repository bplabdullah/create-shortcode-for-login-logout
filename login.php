// Add this code in functions.php

function wp_login_profile() { 
if ( is_user_logged_in() ) {
    $current_user = wp_get_current_user();
    if ( ($current_user instanceof WP_User) ) {
        echo esc_html( $current_user->display_name );
        echo get_avatar( $current_user->ID, 32 );
        echo '<ul class = "logout-drp"><li><a href = "'. home_url() .'/wp-login.php?action=logout">Logout</a></li></ul>';
    }
}
}

add_shortcode('wpb_login', 'wp_login_profile');
