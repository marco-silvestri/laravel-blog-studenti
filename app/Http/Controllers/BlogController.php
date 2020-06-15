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
}
