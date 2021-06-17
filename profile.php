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
                <th class="header"> Profil Bilgileriniz</th>
            </tr>
            <tr>
                <td class="sutun" align="center">
                ID: <?php echo $_SESSION["id"];?><br/><br/>
                Kullanıcı Adı:  <?php echo $theuser["username"];?><br/><br/>
                Şifreniz: <?php echo $theuser["password"];?><br/><br/>
                Telefon Numaranız: <?php echo $theuser["telnumber"];?><br/><br/>
                Doğum Tarihiniz: <?php echo $theuser["birthdate"];?><br/><br/>
                Adınız: <?php echo $theuser["name"];?><br/><br/>
                Soyadınız: <?php echo $theuser["surname"];?><br/><br/>

                </td>
            </tr>
            <tr>
                <td class="sutun" align="center">
                <form action="delete_do.php" method="GET">
                <a href="delete_do.php" >Hesabı Sil</a>
                </form>
                </td>
            </tr>
        </table>
        <br/><br/><br/> 
        <table align="center" width="50%" cellpadding="10">
            <tr>
                <th class="header"> Profili Düzenle</th>
            </tr>
            <tr>
                <td class="sutun" align="center">
                <form action="profile_do.php" method="POST">
                    Kullanıcı Adı: <input type="text" name="upname"><br /><br />
                    Şifre: <input type="password" name="uppass"><br /><br />
                    Adınız: <input type="text" name="pad"><br /><br />
                    Soyadınız: <input type="text" name="psoyad"><br /><br />
                    Telefon: <input type="number" name="uptel"><br /><br />
                    Doğum tarihiniz: <input type="date" name="upbdate"><br /><br />

                    <input type="submit" value="Profili Düzenle!">
                    </form>
                </td>
            </tr>
        </table>
        

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
