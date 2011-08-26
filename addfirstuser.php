<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<?php
try 
{
 	$db = sqlite_open('users.sqlite', 0666, $sqliteerror);
}
catch(Exception $e) 
{
  	die($sqliteerror);
}
$query = 
  'INSERT INTO users (ID, username, password) ' .
  'VALUES (1, vinaymayar, sqlite); ';
if(!$database->queryExec($query, $sqliteerror))
{
  die($sqliteerror);
}
?>
<body>
</body>
</html>