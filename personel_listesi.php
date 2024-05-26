<?php
    require_once ('sqlLogin.php');
    session_start();
    if($_SESSION["login"]=='true'){
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Demirbas Sistemi Giris</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="dindex.css">
</head>
<body>

<form action="personel_degisiklik.php" method="post">
        <input type="number" name="tc" placeholder="Kimlik numrasi giriniz">
        <input type="submit" name="duzenle" value="Duzenle">
        <input type="submit" name="sil" value="Sil">
        <input type="submit" name="goruntule" value="Demirbaslarini goruntule">
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Kimlik Numarasi</th>
        <th scope="col">Adi Soyadi</th>
        <th scope="col">Oda Numarasi</th>
    </tr>
    </thead>
    <tbody>
    <tr>';
        $sql= 'select * from personel';
        $request = mysqli_query($con,$sql);
        $row = 0;
        while ($response=mysqli_fetch_row($request)){
            $row++;
            echo '
                
                    <tr> 
                        <th scope="row">'.$row.'</th>
                        <td>    <label for="tc">'.$response[0].'</label>
                        <input type="text" id="tc" hidden value="'.$response[0].' name="tc""></td>
                        <td>    <label for="ad">'.$response[1].'</label>
                        <input type="text" id="ad" hidden value="'.$response[1].' name="isim"></td>
                        <td>    <label for="no">'.$response[2].'</label>
                        <input type="text" id="no" hidden value="'.$response[2].' name = "odaNo"></td>

                    </tr>
                
                ';
        }

    }
    else{
        echo "Oturum acilmadigi icin giris sayfasina yonlendiriliyorsunuz";
        header("Refresh: 3; url=index.html");
    }