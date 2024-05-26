<?php
    require_once('sqlLogin.php');
    $tcNo=$_POST['tc'];
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
                ';
    if(isset($_POST['duzenle'])){
        $sql = "select * from personel where tcNo = '".$tcNo."'";
        $request = mysqli_query($con,$sql);
        $personel = mysqli_fetch_row($request);
        echo '
                <form action="personel_duzenle.php" method="post">
                <label for="tc">Kimlik Numarasi</label>
                <input type="number" id="tc" name="tcNo" disabled value="'.$personel[0].'"><br>
                <label for="ad">Kimlik Numarasi</label>
                <input type="text" id="ad" name="ad" placeholder="'.$personel[1].'"><br>
                <label for="oda">Kimlik Numarasi</label>
                <input type="text" id="oda" name="odaNo" placeholder="'.$personel[2].'"><br>
                <input type="submit" name="duzenle" value="Duzenle">
                <input type="submit" name="geridon" value="Personel Listesine Geri don">
                
                
</form>';
    }
    elseif(isset($_POST['sil'])){

        $sql = "delete from personel where tcNo like '$tcNo' escape '#'";
        if(mysqli_query($con,$sql)){
            echo "$tcNo kimlik numarali personel  silindi";
        }
        else{
            echo "Hata olustu";
        }
        header("Refresh: 3; url=personel_listesi.php");
    }
    elseif(isset($_POST['goruntule'])){
        echo '<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Demirbas Sicil Numarasi</th>
        <th scope="col">Demirbas Tipi</th>
        <th scope="col">Personel Adi Soyadi</th>
        <th scope="col">Personele Verilme Tarihi</th>
        <th scope="col">Personelden Alinma Tarihi</th>
    </tr>
    </thead>
    <tbody>
    <tr>';
        $sql = "select sahipli_demirbaslar.sicilNo, sahipli_demirbaslar.tip ,personel.adSoyad, sahipli_demirbaslar.personele_verilme_tarihi,sahipli_demirbaslar.depoya_teslim_tarihi from sahipli_demirbaslar, personel where sahipli_demirbaslar.personel = personel.tcNo";
        $request = mysqli_query($con,$sql);
        while($response=mysqli_fetch_row($request)){
            echo '<tr> 
                        <th scope="row"></th>
                        <td>'.$response[0].'</td>
                        <td>'.$response[1].'</td>
                        <td>'.$response[2].'</td>
                        <td>'.$response[3].'</td>
                        <td>'.$response[4].'</td>
                                               
                    </tr>
        ';
        }
    }

    $con->close();