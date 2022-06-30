<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="<?= ROOT ?>public/css/style.css">
<title>Title</title>
</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">    
    <a class="navbar-brand" href="<?= ROOT?>"> <i class="fa fa-book" aria-hidden="true"></i> ITEC Blog</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= ROOT?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <a class="nav-link" href="<?= ROOT?>posts/create">Create<span class="sr-only">(current)</span></a>
            <?php if($_SESSION['logged_in'] == true): ?>
                </li>
                <a class="nav-link" href="<?= ROOT?>users/details"><i class="fa fa-user-circle" aria-hidden="true"></i> <?= $_SESSION['user_name'];?><span class="sr-only">(current)</span></a>
                </li>
                </li>
                <a class="nav-link" href="<?= ROOT ?>users/logout">Logout<span class="sr-only">(current)</span></a>
                </li>
            <?php else: ?>
                </li>
                <a class="nav-link" href="<?= ROOT ?>users/login"><i class="fa fa-user" aria-hidden="true"></i> Login<span class="sr-only">(current)</span></a>
                </li>
            <?php endif; ?>
            </ul>
        </div>
        </div>
    </nav>
    <?php Messenger::checkMsg(); ?>