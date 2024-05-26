<?php 
 

ob_start();
session_start();
require_once('sqlLogin.php');

$kadi = $_POST['uname'];
$sifre = $_POST['password'];
 

$sql = "select * from admin where tc_no='$kadi' and sifre='$sifre' ";
$result = mysqli_query($con,$sql);
#$sql_check = mysqli_query("select * from admin where tc_no='".$kadi."' and sifre='".$sifre."' ") or die(mysqli_error());
 
if(mysqli_num_rows($result))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:anaSayfa.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>