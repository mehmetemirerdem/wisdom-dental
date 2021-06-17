<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){


    $urandevu_id = $_POST["urid"];
    $urtercih = $_POST["urtercih"];
    $urdate = $_POST["urdate"];
    $urtime = $_POST["urtime"];

    $result = $mysqli -> query("UPDATE randevu SET doctor='".$urtercih."', date='".$urdate."', time='".$urtime."' WHERE randevu_id=".$urandevu_id." AND id=".$_SESSION['id']);

    if (!$result)
    {
        echo "Hata meydana geldi!";
        echo $mysqli -> error;
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
                <p><font size="3">Randevu Düzenleme Başarılı!</font></p>
                <a href="index.php" >Ana Sayfa</a>
                <a href="randevu_duzen.php" >Randevu Bilgiler / Düzenleme</a>
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