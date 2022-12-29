<?php
if(isset($HTTP_COOKIE_VARS["cookie_idnum"]))
{
    echo("Add data <br>".$HTTP_COOKIE_VARS["cookie_idnum"].
    "</br><br>");
    echo("Click <a href=\"cookie_destroy.php\">next<a> to remove cookie data!");
}else
{
    header("Location: cookie.php");
    exit;
}
?>
