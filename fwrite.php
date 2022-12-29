<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Processor</title>
</head>
<body>
    <h2> Data writing</h2>
    <?php
    $file='/var/www/html/php11/top_secret.txt';
    $fo=fopen($file, 'w');
    $data='Tes fwrite OK in'.$file.' !';
    fwrite($fo, $data);
    fclose($fo);
    echo("Ayo matey, check this file aight <b> $file <b/> !");
    ?>
</body>
</html>
