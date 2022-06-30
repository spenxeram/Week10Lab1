<?php

class PostsController extends Controller {
    // properties

    // constructor
    public function __construct()
    {
        parent::__construct();
    }

    // controller methods
    public function getPosts() {
        $posts = new Post($this->conn);
        $limit = $this->params['limit'] ?? 3;
        $limit = $this->params['limit'] ?? 3;
        if($posts->fetchPosts($offset, $limit)->success()) {
            $num_btns = $posts->getNumBtns();
            var_dump($num_btns);
            $posts = $posts->getPosts();
            
            include "views/posts.php";
        } else {
            echo "error";
        }
    }

    public function getPost($id) {
        $post = new Post($this->conn);
        $comment = new Comment($this->conn);
        if($post->fetchPost($id)->success()) {
            $post = $post->getPost();
            $comments = $comment->fetchComments($post['id'])->getComments();
            include "views/single_post.php";
        } else {
            include "views/_404.php";
        }
    }

    public function newPost() {
        include "views/create_post.php";
    }

    public function create() {
        var_dump($this->req);
        var_dump($this->files);
        // $post = new Post($this->conn);
        // if($post->validatePost($this->req)->success()) {
        //    if($post->createNewPost()->success()) {
        //     Messenger::setMsg("New post created!", "success");
        //     header("Location: " . ROOT . "posts/get/" . $post->post_id);
        //    }
        // } else {
        //     echo "this post has an error";
        //     $errors = $post->errors;
        //     include "views/create_post.php";
        // }
    }

    public function delete() {
        // confirm A or B: A->the post belongs to current user
        // B-> the current user role is 1 (ie admin)
        $post = new Post($this->conn);
        $post->fetchPost($this->req['delete']); // $_POST['delete'] the id
        if($_SESSION['user_id'] == $post->post['user_id'] || $_SESSION['user_role'] == 1) {
            // delete post
           if($post->delete($this->req['delete'])->success()) {
            Messenger::setMsg("Post deleted!", "warning");
               // redirect user to homepage
            Router::redirect("");
           }
        } else {
            include "views/_403.php";
        }
    }

    public function update() {
        $post = new Post($this->conn);
        $post->fetchPost($this->req['post_id']);
        if($_SESSION['user_id'] == $post->post['user_id']) {
            if($post->update($this->req)->success()) {
                Messenger::setMsg("Post updated!", "success");
                Router::redirect("posts/get/" . $this->req['post_id']);
            } //$_POST
        }
        
    }

}