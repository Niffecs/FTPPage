<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html body{
            background-color: grey;
            color: tomato;
            font-size: large;
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
        }

    </style>
    <title>Niffecs FTP Manager</title>
</head>
<body>
<br><br><br><br>
    <?php
    $error_code = $_GET['id'];

    echo 'Error: ' . $error_code;
    ?><br><br><br><br>
    <a href="https://ftp.niffecs.com">
    <button type="button">Startseite</button>
    </a>
</body>
</html>