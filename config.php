<?php
    session_start();

    $mysqli = new mysqli("localhost","285445","qweasdzxc","285445");
    
    if ($mysqli -> connect_errno){
        echo("Bir hata meydana geldi!");
        exit;
    }



    $theuser = false;

    if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
    {
        $getuserquery = $mysqli -> query("SELECT * FROM users WHERE id=".$_SESSION["id"]);
        $theuser = $getuserquery -> fetch_assoc();
    }


    $therandevu = false;
    if (isset($_SESSION["id"]) && $_SESSION["id"] > 0)
    {
        $getrandevuquery = $mysqli -> query("SELECT * FROM randevu WHERE id=".$_SESSION["id"]);
        $therandevu = $getrandevuquery -> fetch_assoc();
    }



?>