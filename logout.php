<?php

include "config.php";
if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

session_destroy();

?>

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div align="center">
        <p><font size="3">Çıkış Yapıldı!</font></p>
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
                <p><font size="3">Lütfen Giriş Yapınız!</font></p>
                <a href="index.php" >Ana Sayfa</a>
                <a href="login.php" >Giriş Yap</a>
            </div>
            </body>
        </html>
        <?php
    }
    ?>