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

        <br /><br /><br />
        <table align="center" width="80%" cellpadding="10">
            <tr>
                <th class="header" align="left">Hekimlerimiz</th>
            </tr>
            <tr>
                <td class="sutun"><img src="d1.jpg" width="200" height="180" alt="doktor1" hspace="2%" vspace="1%" align="left"/><font size="5">Dt. Ahmet Yılmaz (Ortodonti)</font><br /><br /><font size="4">Hakkımda</font><br /><br />İstanbul Üniversitesi Diş Hekimliği Bölümünden 2010 yılında mezun oldum.<br /><br /> Yaklaşık 10 yıldır bu sektörün içersinde bulunuyorum.<br /><br /> WISDOM ailesinin doktorlarına ve hastalarına sunduğu hizmeti gördükten sonra kesinlikle burada çalışmaya karar verdim.</td>
            </tr>
            <tr>
                <td class="sutun"><img src="d2.jpg" width="200" height="180" alt="doktor2" hspace="2%" vspace="1%" align="left"/><font size="5">Dt. Mehmet Yıldırım (Ağız, Diş ve Çene Cerrahisi)</font><br /><br /><font size="4">Hakkımda</font><br /><br /> Hacettepe Diş Hekimliği Bölümünden 2000 yılında mezun oldum.<br /><br /> Sektöre atıldıktan sonra yeni bir polikinlik olan WISDOM kurumuyla tanıştım ve neredeyse kuruluşundan bu yana beraber çalışmaktayız.</td>
            </tr>
            <tr>
                <td class="sutun"><img src="d3.jpg" width="200" height="180" alt="doktor3" hspace="2%" vspace="1%" align="left"/><font size="5">Dt. Elif Kaya (Endodonti)</font><br /><br /><font size="4">Hakkımda</font><br /><br /> Ege Üniversite Diş Hekimliği Bölümünden 2005 yılında mezun oldum.<br /><br /> Onlarca farklı polikinlikte hizmet verdim fakat WISDOM polikiniği gibi bir yer daha önce görmedim. <br /><br />Çalışanlarıyla kardeş gibi bir kurum.</td>
            </tr>
            <tr>
                <td class="sutun"><img src="d4.jpg" width="200" height="190" alt="doktor4" hspace="2%" vspace="1%" align="left"/><font size="5">Dt. Zeynep Demir (Diş Hekimi)</font><br /><br /><font size="4">Hakkımda</font> <br /><br /> Marmara Üniversites Diş Hekimliği Bölümünden 2018 yılında mezun oldum.<br /><br /> WISDOM polikinliğine başvurmak, bölüme başladığımdan beri hayalimde vardı. <br /><br />Yeni mezuna değer vermeyeceklerini düşünüyordum fakat bana insan gibi davranan tek kurum burası oldu!</td>
            </tr>
        </table>

        <br />
        <br />
        <footer>
            <p>Tüm Hakları Saklıdır. &copy; 2021</p>
        </footer>
    </body>
</html>