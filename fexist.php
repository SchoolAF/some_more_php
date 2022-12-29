<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pemeriksaan file</h2>

    <?php 
    $file='/var/www/html/php11/top_secret.txt';
    if(file_exists($file)){
        echo("<b> $file </b> is already exist! !");
    } else{
        echo("<b> $file </b> is not exist!");
    }
    ?>
</body>
</html>
