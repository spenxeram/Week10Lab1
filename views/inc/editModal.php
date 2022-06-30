<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success btn-sm edit-post" data-toggle="modal" data-target="#exampleModalLong">
 <i class="fa fa-pencil" aria-hidden="true"></i> Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= ROOT; ?>posts/update" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <label for="title">Post Title</label>
          <input type="text" name="title" value="<?php echo $post['title']; ?>" class="form-control edit-title">
          <label for="body">Post Body</label>
          <textarea name="body" rows="4" class="form-control edit-body"><?php echo $post['body']; ?></textarea>
          <input type="hidden" name="post_id" class="edit-post-id" value="<?php echo $post['id']?>">
          <?php CSRF::outputToken(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary save-edit">Save changes</button>

      </div>
      </form>
    </div>
  </div>
</div>