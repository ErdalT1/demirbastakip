<?php

    echo '<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
';
    session_start();
    if($_SESSION["login"] == "true"){
        echo "oturum acildi";
    }
    else{
        echo "oturum acilmadi";
    }

    echo '    </body>
    </html>';