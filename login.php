<?php
    include "config.php";

    if(!(isset($_SESSION["id"]) && $_SESSION["id"] > 0)){
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
        
        <br /><br /><br />
            
        <table align="center" width="50%" cellpadding="10">
            <tr>
                <th class="header"> Giriş Yap</th>
            </tr>
            <tr>
                <td class="sutun" align="center">
                <form action="login_do.php" method="POST">
                Kullanıcı Adı: <input type="text" name="uname"><br><br>
                Şifre: <input type="password" name="upass"><br><br>
                <input type="submit" value="Giriş Yap!">
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
            <p><font size="3">Lütfen Çıkış Yapınız!</font></p>
            <a href="index.php" >Ana Sayfa</a>
        </div>
        </body>
    </html>
    <?php
}
?>
