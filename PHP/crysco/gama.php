<?php
session_start();
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GAMA</title>
        <style>
            *{
                padding: 0px;
                margin: 0px;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>';
        require "partials/_header.php";
        echo '
    </body>
    </html>
    
    ';
?>