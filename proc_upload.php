<html>
    <head>
        <title>Upload</title>
    </head>
    <body>
        <h2>Usage of Upload</h2>
        <?php
        $file_name=$HTTP_POST_FILES["FILE1"]["name"];
        $tmp_dir=$HTTP_POST_FILES["FILE1"]["tmp_name"];
        copy($tmp_dir,"c:/upload_dir/file_name");
        echo("File Name:<b>$file_name</b>");
        ?>

    </body>
</html>
