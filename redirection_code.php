function Tutor_redirect_users_by_role() {
 
    $current_user   = wp_get_current_user();
    $role_name      = $current_user->roles[0];
 
    if ( 'subscriber' === $role_name ) {
        wp_redirect( 'https://yoursite.com/dashboard' );
    } // if
 
} // Tutor_Student_redirect_users_by_role
add_action( 'admin_init', 'Tutor_redirect_users_by_role' );

function Tutor_redirect_users_by_role_two() {
 
    $current_user   = wp_get_current_user();
    $role_name      = $current_user->roles[0];
 
    if ( 'tutor_instructor' === $role_name ) {
        wp_redirect( 'https://yoursite.com/dashboard' );
    } // if
 
} // Tutor_Student_redirect_users_by_role
add_action( 'admin_init', 'Tutor_redirect_users_by_role_two' );
