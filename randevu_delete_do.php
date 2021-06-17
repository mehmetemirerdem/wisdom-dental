<?php
    include "config.php";
    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){

    $drandevu_id = $_POST["delrid"];

    $result = $mysqli -> query("DELETE FROM randevu WHERE randevu_id=".$drandevu_id." AND id=".$_SESSION['id']);


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
                <p><font size="3">Randevu Silindi!</font></p>
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