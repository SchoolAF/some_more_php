<?php
if(isset($HTTP_POST_VARS["idnum"]))
{
    setcookie("cookie_idnum",$HTTP_POST_VARS["idnum"]);
}
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <h2> Penggunaan Cookies </h2>
        <pre>
            <form action="cookie.php" method="post">
            No. Induk : <input type="text" name="idnum" size="10"> <input type="submit" name="go" value="GO">
            </form>
<?php
if(isset($HTTP_POST_VARS["idnum"]))
{
    echo ("Klik <a href=\"cek_cookie.php\">disini</a> untuk melihat data
    cookies");
}
?>
        </pre>
</body>
</html>
