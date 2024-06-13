<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman1</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['is_logged_id'] != TRUE)
    {
        header("Location: biodata.html");
        exit();
    }

    echo $_SESSION ['nama'];
    ?>
    <h1> selamat datang, <?php echo $_SESSION['nama']?></h1>
    <a href ="logout.php">logout</a>
    <a href ="halaman2.php">halaman 2 </a>
</body>
</html>