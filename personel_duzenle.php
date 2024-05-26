<?php
    require_once('sqlLogin.php');
    if(isset($_POST['duzenle'])){
        $odaNo = $_POST['odaNo'];
        $ad = $_POST['ad'];
        $tcNo = $_POST['tcNo'];


        $sql = "update personel set odaNo = '".$odaNo."' where tcNo like '".$tcNo."' escape '#'";
        if(mysqli_query($con,$sql)){
            echo "personel bilgileri degistirildi. Yonlendiriliyorsunuz lutfen bekleyiniz.";
            header("Refresh: 3; url=personel_listesi.php");
        }
        else{
            echo "hata olustu";
            header("Refresh: 1; url=personel_listesi.php");
        }
        $con->close();

    }
    elseif (isset($_POST['geridon'])){
        header("Refresh: 0; url=personel_listesi.php");
    }
