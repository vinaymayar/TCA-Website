<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$time = time();
setcookie ("ID_my_site", "", $time - 3600);
setcookie ("Key_my_site", "", $time - 3600);
echo("<h1>Signing out...</h1>");
header("Location: http://www.teenconnectionafghanistan.org/index.html");
?>