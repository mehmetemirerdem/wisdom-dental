<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $rtercih = $_POST["rtercih"];
    $rdate = $_POST["rdate"];
    $rtime = $_POST["rtime"];



    $result = $mysqli -> query("INSERT INTO randevu (id,doctor,date,time) VALUES ('".$theuser["id"]."', '".$rtercih."', '".$rdate."', '".$rtime."')");

    if ($result == false)
    {
        echo("Error description: " . $mysqli -> error);
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
                <p><font size="3">Randevu Alındı!</font></p>
                <a href="index.php" >Ana Sayfa</a>
            </div>
            </body>
        </html>
        <?php
    }


?>

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