<?php
    include "config.php";

    if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 align="center">WISDOM DENTAL</h1>
        <table align="center">
        <tr>
            <td><a href="index.php" >Ana Sayfa</a></td>
            <td><a href="hekimlerimiz.php" >Hekimlerimiz</a></td>
            <td><a href="randevu.php" >Randevu Al</a></td>
            <?php
                if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){
                ?>
                <td><a href="randevu_duzen.php" >Randevu Bilgiler / Düzenleme</a></td>
                <td><a href="profile.php" >Profili Düzenle</a></td>
                <?php
                }
                else{
                ?>
                <?php
                }
                ?>
            <td><?php
                if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){
                ?>
                <a href="logout.php" >Çıkış Yap</a>
                <?php
                }
                else{
                ?>
                <a href="login.php" >Giriş Yap</a>
                <?php
                }
                ?>
            </td><?php
                if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){
                ?>
                <?php
                }
                else{
                ?>
                <td><a href="signup.php" >Kayıt Ol</a></td>
                <?php
                }
                ?>
        </tr>
        </table>
        <br />
        
        <br />
        
        <?php
            if(isset($_SESSION["id"]) && $_SESSION["id"] > 0){
            ?>
            <table align="center" width="80%" cellpadding="10">
                <tr>
                    <th class="header" align="left">Hoşgeldiniz, <?php echo $_SESSION["id"]; ?> numaralı kullanıcı</th>
                </tr>
            </table>
            <?php
            }
            else{
            ?>
            <?php
            }
            ?>

        <br /><br /><br />


        <table align="center" width="50%" cellpadding="10">
            <tr>
                <th class="header"> Randevu Al</th>
            </tr>
            <tr>
                <td class="sutun" align="center">
                <form action="randevu_do.php" method="POST">
                Doktor Seçiniz:<select name="rtercih">
                    <option value="Dt. Ahmet Yılmaz (Ortodonti)">Dt. Ahmet Yılmaz (Ortodonti)</option>
                    <option value="Dt. Mehmet Yıldırım (Ağız Diş ve Çene Cerrahisi)">Dt. Mehmet Yıldırım (Ağız Diş ve Çene Cerrahisi)</option>
                    <option value="Dt. Elif Kaya (Endodonti)">Dt. Elif Kaya (Endodonti)</option>
                    <option value="Dt. Zeynep Demir (Diş Hekimi)">Dt. Zeynep Demir (Diş Hekimi)</option>
                </select><br /><br />
                Tarih Seçiniz:<input style="width:50%;" type="date" name="rdate"><br /><br />
                Saat Seçiniz:<input type="time" name="rtime"><br /><br />
                <input type="submit" value="Randevu Al!">
                </form>
                </td>
            </tr>
        </table>
        <br/><br/><br/> 

        <br />
        <br />
        <footer>
            <p>Tüm Hakları Saklıdır. &copy; 2021</p>
        </footer>
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
