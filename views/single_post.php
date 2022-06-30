<?php 
include "views/inc/head.php";
?>
 <div class="container py-3">
    <?php if(!empty($post)): ?>
        <img src="<?= PUBLIC_ROOT . $post['post_img'];?>" height="300px" width="100%" alt="" class="post-img my-3">
    <div class="d-flex justify-content-between">
     <div class="post-header">
        <h2 class="post-title" data-id="<?php echo $post['id']?>"> <?php echo $post['title']; ?></h2>
        <h6 class="font-italic font-weight-light text-muted"><?php echo $post['username'] . " | " . date("d-M-Y", strtotime($post['date_created'])); ?></h6>
        <?php if($_SESSION['logged_in'] === true && $_SESSION['user_id'] == $post['user_id']) {
            include "views/inc/editModal.php";
        }
        ?>
    </div>

     <div>
        <div class="p-3 rating post">
            <i class="fa fa-thumbs-up"></i> 0
            <i class="fa fa-thumbs-down"></i> 0
        </div>
    </div>
    </div>
        <hr class="my-4">
        <p class="post-body"><?php echo $post['body']; ?></p>
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>" class="btn btn-outline-warning btn-sm">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <?php if($_SESSION['logged_in']): ?>
            <?php if($_SESSION['user_role'] == 1 || $_SESSION['user_id'] == $post["user_id"]): ?>
            <form action="<?= ROOT ?>posts/delete" method='post'>
                <input type="hidden" name="delete" value="<?php echo $post['id'];?>">
                <?php CSRF::outputToken(); ?>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
            </form>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <h4 class="font-weight-light my-3">Comments</h4>
        <hr>
        <?php if($_SESSION['logged_in']) {
            include "views/inc/comment.php";
        } else {
            echo "<h3>Please login to comment</h3>";
        }
        ?>
    <?php if(!empty($comments)): ?>
        <div class="comments">
        <?php foreach($comments as $comment): ?>
            <div class="bg-light p-4 my-3 rounded">
                <p><?php echo $comment['comment'];?></p>
                <h5 class="font-weight-light">
                <?php echo $comment['username'] . " | " . date("d M Y", strtotime($comment['date_created'])) ?>
                </h5>
            </div>
        <?php endforeach; ?>
        </div>
    <?php else: ?>
        <h6 class="text-muted mt-4">No comments yet...</h6>
    <?php endif; ?>
    <?php else: ?>
        <h1>Post not found!</h1>
    <?php endif; ?>
</div>
<?php
 include "views/inc/footer.php";
?>