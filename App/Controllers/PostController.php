<?php

namespace App\Controllers;

use App\Models\User;

class PostController{
    public function single(){
        global $request;

        $user = new User(9);
        $result = $user->remove();
        var_dump($result);

        $slug = $request->get_route_param('slug');
        echo "slug: $slug";
    }
    public function comment(){
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug<br>comment_id: $cid";
    }
}