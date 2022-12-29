<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemprosesan file</title>
</head>
<body>
    <h2>Pembacaan data</h2>
    <?php
    $file='/var/www/html/php11/top_secret.txt';
    if(file_exists($file))
    {
        $fo=fopen($file,"r");
        $dope_content=fread($fo,filesize("$file"));
        echo("<b> $file </b> contains <b>\" $dope_content \" <b/>");
        fclose($fo);
    }
    ?>
</body>
</html>
