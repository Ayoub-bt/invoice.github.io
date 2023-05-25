<?php
if (!defined('APP_RUN')) {
    exit('No direct access allowed');
}

authenticate_admin();

$action = route(1);
if ($request_method === 'GET') {
    switch ($action) {
        case '':
        case 'posts':

            $posts = Post::all();
            $home_page = Post::where('is_home_page', 1)->first();
            \view('posts', [
                'posts' => $posts,
                'home_page' => $home_page,
            ]);

            break;

        case 'post':
            $id = route(2);
            $post = Post::find($id);
            if($post)
            {
                $post_settings = $post->settings;
                \view('post', [
                    'post' => $post,
                    'post_settings' => $post_settings,
                ]);
            }

            break;


            case 'create-post':

                $type = route(2);

                switch ($type)
                {
                    case 'home':

                        $post = Post::where('is_home_page', 1)->first();

                        if($post)
                        {
                            $post->is_home_page = 0;
                            $post->save();
                        }

                        $post = new Post();
                        $post->title = 'Home Page';
                        $post->name = 'Home Page';
                        $post->slug = 'home';
                        $post->is_home_page = 1;
                        $post->type = 'page';
                        $post->api_name = 'page';
                        $post->save();

                        redirect_to('cms/post/' . $post->id);

                        break;
                }

                break;
    }
}

if ($request_method === 'POST') {

    $data = request()->all();

    switch ($action) {
        case 'post':

            $id = $data['id'];
            $post = Post::find($id);
            if($post)
            {
                $post->title = $data['title'] ?? '';
                $post->settings = $data['settings'] ?? '';
                $post->save();
            }

            api_response([
                'status' => 'success',
                'message' => __('Saved successfully'),
            ]);

            break;


    }

}
