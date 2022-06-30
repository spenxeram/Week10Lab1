<div>
<form action="post.php" method="post">
    <textarea name="comment" class="form-control my-2" rows="3"></textarea>
    <input type="hidden" name="comment_post_id" value="<?= $post['id'] ?>">
    <button type="submit" class="btn btn-outline-primary"> <i class="fa pr-2 fa-comment" aria-hidden="true"></i>Comment</button>
</form>
</div>