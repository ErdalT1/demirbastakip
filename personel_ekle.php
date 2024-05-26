<?php
    session_start();
    if($_SESSION["login"] == 'true'){
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
<body>';
        echo '<form action="model/personelEkle.php" method="post">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Personel adi ve soyadi</label>
      <input type="text" class="form-control" id="ad" name="ad" placeholder="Personelin adi ve soyadi">
    </div> <br><br>
    
    <div class="form-group col-md-6">
      <label for="inputEmail4">Personel kimlik numarasi</label>
      <input type="number" class="form-control" id="tcNo" name="kimlikNo" placeholder="Personel kimlik numarasi">
    </div> <br><br>
    
    <div class="form-group col-md-6">
      <label for="inputEmail4">Personel oda numarasi</label>
      <input type="number" class="form-control" id="odaNo" name="odaNo" placeholder="Personel oda numarasi">
    </div>
    
    
  <button type="submit" class="btn btn-primary">Personeli Ekle</button>
</form>';
    }
    else{
        echo "Oturum acilmadigi icin giris sayfasina yonlendiriliyorsunuz";
        header("Refresh: 3; url=index.html");
    }

    echo "</body>
</html>";