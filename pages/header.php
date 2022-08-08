<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>class-20</title>
    <link rel="stylesheet" href="assetes/css/bootstrap.css">
    <link rel="stylesheet" href="assetes/css/all.css">
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <div class="navabar-brand"><a href="action.php?page=home" class="">PDN</a> </div>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link"> Home </a></li>
            <li><a href="" class="nav-link"> About </a></li>
            <li class="dropdown">

                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category)  { ?>
                    <li><a href="action.php?page=category&&id=<?php echo  $category['id']; ?>" class="dropdown-item"> <?php echo  $category['name'];?> </a> </li>
                    <?php } ?>
                </ul>


            </li>
            <li><a href="" class="nav-link"> Contact</a></li>
        </ul>
    </div>
</nav>

