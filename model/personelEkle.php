<?php
    require_once('personel.php');
    require_once('../sqlLogin.php');

    $ad = $_POST['ad'];
    $tcNo = $_POST['kimlikNo'];
    $odaNo = $_POST['odaNo'];

    if(isset($_POST['ad'])){
        $personel = new Personel($tcNo,$ad,$odaNo);

        $sql = "insert into personel(tcNo, adSoyad, odaNo) values ('".$personel->tcNo."','".$personel->adSoyad."','".$personel->odaNumarasi."')";
        if(mysqli_query($con,$sql))
            echo 'Personel Eklendi';
        else{
            echo 'veritabani hatasi';
        }
        $con->close();


    }
    else{
        echo "personel eklenmedi";
    }
    header("Refresh: 1;url=../personel_ekle.php");
