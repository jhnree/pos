<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/add-user.css">
    <link rel="stylesheet" href="css/menu-list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>POS - admin</title>
</head>
<?php require_once('../db.php'); ?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5">
        <a class="navbar-brand text-white">POS</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="menu-list.php">Menu List<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white disabled" href="account-list.php" tabindex="-1" aria-disabled="true">Account List</a>
                </li>
            </ul>
        </div>        
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">