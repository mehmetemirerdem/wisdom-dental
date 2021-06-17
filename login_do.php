<?php
    include "config.php";


    $uname = $_POST["uname"];
    $upass = $_POST["upass"];

    $result = $mysqli -> query("SELECT * FROM users WHERE username='$uname' AND password='$upass' LIMIT 1");

    $satir_sayisi = $result->num_rows;

    if($satir_sayisi == 0)
    {
    ?>

    <html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div align="center">
            <p><font size="3">Kullanıcı Bulunamadı!</font></p>
            <a href="index.php" >Ana Sayfa</a>
            <a href="login.php" >Giriş Yap</a>
        </div>
        </body>
    </html>

    <?php
    die();
    }

    $satir = $result->fetch_assoc();

    $_SESSION["id"] = $satir["id"];
    $_SESSION["username"] = $satir["username"];

    ?>

    <html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div align="center">
            <p><font size="3"><?php echo $satir["id"] . " numaralı kullanıcı için giriş yapıldı."; ?></font></p>
            <a href="index.php" >Ana Sayfa</a>
        </div>
        </body>
    </html>

    <?php

?>

