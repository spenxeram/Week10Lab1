<?php

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $post = new Post($this->conn);
        $posts = $post->fetchPosts()->getPosts();
        include "views/home.php";
    }
}