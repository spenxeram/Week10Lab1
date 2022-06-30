<?php

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $posts = new Post($this->conn);
        $offset = $this->params['offset'] ?? 0;
        $limit = $this->params['limit'] ?? 6;
        if($posts->fetchPosts($offset, $limit)->success()) {
            $num_btns = $posts->getNumBtns();
            var_dump($num_btns);
            $posts = $posts->getPosts();
            include "views/home.php";
        }
    }
}