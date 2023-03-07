<?php
    include("dbcon.php");
    include("sql.php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login próba 14.SZ</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/css/bootstrap.bundle.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="./">Főoldal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="login.php">Belépés</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="reg.php">Regisztráció</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="mypage.php">Mypage</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>