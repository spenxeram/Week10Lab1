<?php
 include "inc/head.php";
?>
<div class="jumbotron front rounded-0">
        <div class="container">
            <?php if(!$_SESSION['logged_in']): ?>
            <h1 class="display-4">ITEC Mini Blog</h1>
            <p class="lead">Login to create a post</p>
            <p class="lead">Here are all of our posts!</p>
            <a href="login.php" class="btn btn-primary btn-lg"><i class="fas fa-door-open    "></i> Go to Login</a>
            <?php else: ?>
            <h1 class="display-4">Hello <?= $_SESSION['user_name'];?></h1>
            <p class="lead">Ready to post something new?</p>
            <a href="create.php" class="btn btn-outline-primary btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Create a new post</a>
         
            <?php endif; ?>
        </div>
</div>
<div class="container">
    <h3>Recent Posts</h3>
    <hr>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4 my-3 d-flex">
                <div class="card p-4 w-100 bg-light">
                   <a href="<?= ROOT?>posts/get/<?=$post['id']?>">
                   <h3><?= $post['title']; ?></h3>
                   </a>
                   <p><?= substr($post['body'], 0, 100);?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
 include "inc/footer.php";
?>