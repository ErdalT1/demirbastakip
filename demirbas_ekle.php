<?php

    session_start();
    require_once ('sqlLogin.php');
    $con = new mysqli($server,$uname,$pword,$db);

    if(isset($_SESSION['login']) == 'true'){
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
        if ($_POST['tip']){
            $demirbasTipi =  $_POST['tip'];
            $sql = "show columns from $demirbasTipi";
            $request = mysqli_query($con,$sql);
            echo '<form action="demirbas_ekle.php" method="post">

                    <input type="text" value="'.$demirbasTipi.'" name="tip2" hidden>';

            while ($response = mysqli_fetch_row($request)){

                echo '<input type="text" required name="'.$response[0].'" placeholder="'.$response[0].'"><br>';
            }
            echo '<input type="submit" value="Demirbasi Ekle">';

        }
        elseif ($_POST['tip2']){
            $demirbasTipi = $_POST['tip2'];
            $sql = "show columns from $demirbasTipi";
            if($request = mysqli_query($con,$sql)){

                $dizi2 = [];
                $row=0;
                while ($response= mysqli_fetch_row($request)){
                    $dizi2[$row]=$_POST[$response[0]];
                    $row++;
                }
                $sql2 = "";

                switch (count($dizi2)){
                    case 3:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]')";
                        break;
                    case 4:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]')";
                        break;
                    case 5:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]','$dizi2[4]')";
                        break;
                    case 6:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]','$dizi2[4]','$dizi2[5]')";
                        break;
                    case 7:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]','$dizi2[4]','$dizi2[5]','$dizi2[6]')";
                        break;
                    case 8:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]','$dizi2[4]','$dizi2[5]','$dizi2[6]','$dizi2[7]')";
                        break;
                    case 9:
                        $sql2 = "insert into $demirbasTipi values ('$dizi2[0]','$dizi2[1]','$dizi2[2]','$dizi2[3]','$dizi2[4]','$dizi2[5]','$dizi2[6]','$dizi2[7]','$dizi2[8]')";
                        break;
                }

                mysqli_query($con,$sql2);

                $sql3 = "insert into depo values ('$dizi2[0]','$demirbasTipi')";
                mysqli_query($con,$sql3);
                echo "Demirbas depoya eklendi";
                header("Refresh: 1; url=demirbas_ekle.php");

            }
            else{
                echo "hata";
            }



        }
        else{
            $sql = "select tipAdi from tip ";
            $request = mysqli_query($con,$sql);
            echo '<form action="demirbas_ekle.php" method="post">
        <select name="tip">';
            while ($response = mysqli_fetch_row($request) ){
                echo '<option value="'.$response[0].'">'.$response[0].'</option>';
            }
            echo '</select>   
        <input type="submit" value="Ozellikleri Getir">
       ';
        }




    echo ' </body>
</html>';
    }
    else{
        echo "Oturum acilmadigi icin giris sayfasina yonlendiriliyorsunuz";
        header("Refresh: 3; url=index.html");
    }