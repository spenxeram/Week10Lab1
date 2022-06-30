<?php
// register routes in your app

Router::get("", function() {
    $homeController = new HomeController;
    $homeController->index();
});

Router::get("posts", function() {
    $postsController = new PostsController;
    $postsController->getPosts();
});

Router::get("posts/get/{id}", function($id) {
    $postsController = new PostsController;
    $postsController->getPost($id);
});

Router::get("posts/create", function() {
    $postsController = new PostsController;
    $postsController->newPost();
});

Router::post("posts/create", function() {
    $postsController = new PostsController;
    $postsController->create();
});

Router::get("users/login", function() {
    $usersController = new UsersController;
    $usersController->getLogin();
});

Router::post("users/login", function() {
    $usersController = new UsersController;
    $usersController->login();
});

Router::post("users/create", function() {
    $usersController = new UsersController;
    $usersController->create();
});

Router::post("posts/delete", function() {
    $postsController = new PostsController;
    $postsController->delete();
});

Router::post("posts/update", function() {
    $postsController = new PostsController;
    $postsController->update();
});

Router::get("posts/api", function() {
    echo "welcome to post api";
});

Router::get("users", function() {
    echo "Welcome MVC user";
});

Router::get("users/logout", function() {
    $usersController = new UsersController;
    $usersController->logout();
});

if(Router::$found === false) {
   include "views/_404.php";
}
