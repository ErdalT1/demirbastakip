<?php
    ob_start();

    session_start();
    require_once ('model/demirbas_tipi.php');
    require_once ('sqlLogin.php');

    if($_SESSION['login']=='true'){
        $sql ="";

        $demirbasTipi = $_POST['tip'];
        $ozellik1 = $_POST['ozellik1'];

        if($_POST['ozellik7'] != ""){
            $gelen = 7;
        }elseif($_POST['ozellik6']!= ""){
            $gelen = 6;
        }
        elseif($_POST['ozellik5']!= ""){
            $gelen = 5;
        }elseif($_POST['ozellik4']!= ""){
            $gelen = 4;
        }elseif($_POST['ozellik3']!= ""){
            $gelen = 3;
        }elseif($_POST['ozellik2']!= ""){
            $gelen = 2;
        }else{
            $gelen = 1;
        }
        $tip = new DemirbasTipi($demirbasTipi,$ozellik1);
        switch ($gelen){
            case 7:
                $tip->setOzellik7($_POST['ozellik7']);
            case 6:
                $tip->setOzellik6($_POST['ozellik6']);
            case 5:
                $tip->setOzellik5($_POST['ozellik5']);
            case 4:
                $tip->setOzellik4($_POST['ozellik4']);
            case 3:
                $tip->setOzellik3($_POST['ozellik3']);
            case 2:
                $tip->setOzellik2($_POST['ozellik2']);

        }

        switch ($gelen) {
            case 7:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null, $tip->ozellik3 varchar(255) not null, $tip->ozellik4 varchar(255) not null, $tip->ozellik5 varchar(255) not null, $tip->ozellik6 varchar(255) not null, $tip->ozellik7 varchar(255) not null)";
                break;
            case 6:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null, $tip->ozellik3 varchar(255) not null, $tip->ozellik4 varchar(255) not null, $tip->ozellik5 varchar(255) not null, $tip->ozellik6 varchar(255) not null)";
                break;
            case 5:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null, $tip->ozellik3 varchar(255) not null, $tip->ozellik4 varchar(255) not null, $tip->ozellik5 varchar(255) not null)";
                break;
            case 4:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null, $tip->ozellik3 varchar(255) not null, $tip->ozellik4 varchar(255) not null)";
                break;
            case 3:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null, $tip->ozellik3 varchar(255) not null)";
                break;
            case 2:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null, $tip->ozellik2 varchar(255) not null)";
                break;
            default:
                $sql = "create table $tip->tip (sicil_no varchar(255) not null primary key , $tip->tip varchar(255) not null, $tip->ozellik1 varchar(255) not null)";
                break;

        }
        mysqli_query($con,$sql);
        $sql = "insert into tip(tipAdi, ozellik1) values ('$tip->tip','$tip->ozellik1')";
        mysqli_query($con,$sql);
        $con->close();
        header("Refresh: 0; url=demirbas_tipi_ekle.php");


    }