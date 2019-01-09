///////*********Custom Login Page************///////

//the stylesheet or styles for the login page
function my_custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-style.css" />';
}
add_action('login_head', 'my_custom_login');

//the url of the logo
function custom_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

//for the title of the logo (hover)
function custom_login_logo_url_title() {
    return 'Bohol One Stop Info';
}
add_filter( 'login_headertitle', 'custom_login_logo_url_title' );

//tricks for the remember me 
//set to checked
function default_rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}
add_filter( 'login_footer', 'default_rememberme_checked' );

