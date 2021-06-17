<?php
    include "config.php";


    $newuser_username = $_POST["uname"];
    $newuser_password = $_POST["upass"];
    $newuser_telno = $_POST["utel"];
    $newuser_bdate = $_POST["ubdate"];
    $newuser_ad = $_POST["ad"];
    $newuser_soyad = $_POST["soyad"];




    $islem = $mysqli -> query("INSERT INTO users (username,password,telnumber,birthdate,name,surname) VALUES ('".$newuser_username."', '".$newuser_password."', ".$newuser_telno.", '".$newuser_bdate."', '".$newuser_ad."', '".$newuser_soyad."')");

    if ($islem == false)
    {
        ?>
        <html>
            <head>
            <link rel="stylesheet" href="style.css">
            </head>
            <body>
            <div align="center">
                <p><font size="3">Lütfen Giriş Yapınız!</font></p>
                <a href="index.php" >Ana Sayfa</a>
                <a href="login.php" >Giriş Yap</a>
            </div>
            </body>
        </html>
        <?php
    }
    else
    {
        ?>
        <html>
            <head>
            <link rel="stylesheet" href="style.css">
            </head>
            <body>
            <div align="center">
                <p><font size="3">Kayıt Başarılı!</font></p>
                <a href="index.php" >Ana Sayfa</a>
                <a href="login.php" >Giriş Yap</a>
            </div>
            </body>
        </html>
        <?php
    }
?>
