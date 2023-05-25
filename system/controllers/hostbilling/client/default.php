<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

require APP_SYSTEM_PATH . '/controllers/hostbilling/client/init.php';
$post = Post::where('is_home_page', 1)->first();
\view(get_theme_file('home'), [
    'type' => 'client_auth',
    'admin' => User::admin(),
    'post' => $post,
]);
