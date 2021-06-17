<?php
    include "config.php";
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

        <br /><br />
        <table align="center" width="80%" cellpadding="10">
            <tr>
                <th style="background-color:black;" align="center"><font size="7"><a href="https://github.com/mehmetemirerdem/wisdom-dental" >Github</a></font></th>
            </tr>
        </table>
        
        <br /><br />

        <table align="center" width="80%" cellpadding="10">
            <tr>
                <th class="header" align="center"><font size="7">Artık Dişlerinizi Saklamanıza Gerek YOK!</font></th>
            </tr>
        </table>
        
        <br /><br />


        <table align="center" width="80%" cellpadding="10">
            <tr>
                <th class="header" align="left">Hakkımızda</th>
            </tr>
            <tr>
                <td class="sutun"><img src="photo1.jpg" width="400" height="200" alt="dis1" hspace="2%" vspace="1%" align="left"/><p>WISDOM ailesi olarak dişlerinizi en iyi haline kavuşturacağımızın sözünü veriyoruz! Uzman kadromuzla ve tecrübeli doktorlarımızla asla pişman olmayacağınızın garantisini veriyoruz! Kadromuz, ülkemizin sayılı üniversitelerinden mezun olmuş en tecrübeli doktorları içeriyor.<br /><br /> Kurumumuz 1999 yılında kurulmuş olup 20 yılı aşkın tecrübemizle hizmet vermektedir. Bu uzun dönem boyunca sayısız hastaya bakılmış ve istisnasız hepsi memnun ayrılmıştır. Kurumumuzda güncel olarak, 1 Ağız, Diş ve Çene Cerrahisi, 1 Ortodontist, 1 Endodontist ve 1 de Diş Hekimi bulunmaktadır. Kendileri alanlarında yıllar boyu tecrübe kazanmış olup, yaptıkları tedavi en üst düzey seviyededir. <br /><br /> Polikinliğimizde, kullanılan ekipmanlar üst düzey kalitede olup bakımları düzenli olarak yapılmaktadır. Doktorlarımız, yeni teknolojileri yakından takip etmektedirler. Doktorlarımız yeni teknolojilerde uzmanlaştıktan sonra tedavilerinde en son teknolojiyi kullanmaktadırlar. <br />Daha fazlasını öğrenmek için lütfen randevu alıp polikinliğimize gelin!</p></td>
            </tr>
        </table>
        <br />
        <br />
        <table align="center" width="80%" cellpadding="10">
            <tr>
                <th class="header" align="left">İletişim</th>
            </tr>
            <tr>
                <td class="sutun"><img src="photo2.png" width="150" height="150" alt="maps1" hspace="2%" vspace="1%" align="right"/> Adres: Yıldız mah. 226 Sk. Güngör Apt. No:9 Merkez/Antalya <br /><br /> Telefon Numarası: +90 242 999 99 99 <br /><br /> Mail adresi: qmoham@xuduoshop.com <br /><br /> Detaylı bilgi almak için lütfen bize ulaşmaktan çekinmeyin.</td>
            </tr>
        </table>
        <br />
        <br />
        <footer>
            <p>Tüm Hakları Saklıdır. &copy; 2021</p>
        </footer>
    </body>
</html>