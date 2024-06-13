<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['is_logged_id'] != TRUE)
    {
        header("Location: form_login.php");
        exit();
    }

    echo $_SESSION['nama'];
    ?>
    <p> Lorem ipsum dolor sit amet consectetur, adipsicing elit. Illo ea earum architecto vol
    <a href="logout.php">logout</a>
    <a href="halaman1.php">halaman1</a>
</body>
</html>
