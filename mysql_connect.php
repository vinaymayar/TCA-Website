<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$link = @mysql_connect('mysql.teenconnectionafghanistan.org', 'tcamysql', 'tca7mysql') OR die('Could not connect to the database:' . mysql_error());

@mysql_select_db('tcausers') OR die('Could not select the database:' . mysql_error());
?>