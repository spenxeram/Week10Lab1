<?php
include "views/inc/head.php";
?>
<div class="container my-5 py-5">
  <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
      <?php var_dump($errors); ?>
    </div>
  <?php endif; ?>

 <div class="row">
     <div class="col-md-6">
         <h3><i class="fa fa-user" aria-hidden="true"></i> Create New Account</h3>
        <form action="<?= ROOT ?>users/create" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Choose a username...">
            </div>    
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
            </div> 
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control">
            </div> 
            <div class="form-group">
              <label for="password-confirm">Password Confirm</label>
              <input type="password" name="password_confirm" class="form-control">
            </div>  
            <?php CSRF::outputToken(); ?>
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-plus-square" aria-hidden="true"></i> Create Account</button>
        </form>     
   </div> <!-- end of col-md-6 -->
   <div class="col-md-6">
        <h3><i class="fa fa-user-circle" aria-hidden="true"></i> Login Existing User</h3>
        <form action="<?= ROOT ?>users/login" method="post">
        <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Choose a username...">
            </div>    

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control">
            </div> 
            <?php CSRF::outputToken(); ?>
            <button type="submit" class="btn btn-success btn-block"><i class="fa fa-book" aria-hidden="true"></i> Login</button>
          </form>
          <?php var_dump($_SESSION) ?>
   </div> <!-- end of col-md-6 -->
 </div>
</div>


<?php
include "views/inc/footer.php";
?>