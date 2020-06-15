<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $data;
    function __construct() {
        $this->data = config('blog.data');
    }
    function index(){
        $post = $this->data;
        return view('blog', compact('post'));
    }

    function show($slug) {
        
        $single_post = $this->checkPost($slug, $this->data);

        if(! $single_post) {
            abort('404');
        }

        return view('show', ['post' => $single_post]);
    }

    private function checkPost($slug, $array) {
        foreach ($array as $post) {
            if($post['slug'] == $slug) {
                return $post;
            }
        }
        return false;
    }
}
