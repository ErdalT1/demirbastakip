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
    echo '<form action="demirbas_tip_ekle2.php" method="post">
        <input type="text" name="tip" placeholder="Demirbas tipi giriniz" required><br>
        <input type="text" name="ozellik1" placeholder="1. ozelligi giriniz" required><br>
        <input type="text" name="ozellik2" placeholder="2. ozelligi giriniz(istege bagli)"><br>
        <input type="text" name="ozellik3" placeholder="3. ozelligi giriniz(istege bagli)"><br>
        <input type="text" name="ozellik4" placeholder="4. ozelligi giriniz(istege bagli)"><br>
        <input type="text" name="ozellik5" placeholder="5. ozelligi giriniz(istege bagli)"><br>
        <input type="text" name="ozellik6" placeholder="6. ozelligi giriniz(istege bagli)"><br>
        <input type="text" name="ozellik7" placeholder="7. ozelligi giriniz(istege bagli)"><br>
        <input type="submit" value="Demirbas tipini ekle">
    </form>';
}
else{
    echo "Oturum acilmadigi icin giris sayfasina yonlendiriliyorsunuz";
    header("Refresh: 3; url=index.html");
}

echo "</body>
</html>";