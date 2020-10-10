<?php 
// remove_action('rest_api_init', 'create_initial_rest_routes', 99);

add_filter('rest_endpoints', function($endpoints){
    unset($endpoints['/wp/v2/users']);
    unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    return $endpoints;
});

$dirbase = get_template_directory();

require_once $dirbase . '/endpoint/user_post.php';
require_once $dirbase . '/endpoint/user_get.php';

require_once $dirbase . '/endpoint/photo_post.php';
require_once $dirbase . '/endpoint/photo_get.php';
require_once $dirbase . '/endpoint/photo_delete.php';

require_once $dirbase . '/endpoint/comment_post.php';
require_once $dirbase . '/endpoint/comment_get.php';

require_once $dirbase . '/endpoint/password.php';


update_option('large_size_w', 1000);
update_option('large_size_h', 1000);
update_option('large_crop', 1);

function change_api(){
    return 'json';
}

add_filter('rest_url_prefix', 'change_api');

function expire_token() {
    return time() + (60 * 60 * 24);
}

add_action('jwt_auth_expire', 'expire_token');

?>