<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(isset($_SESSION['url'])) 
   $url = $_SESSION['url'];
else 
   $url = "index.html";
$link = mysql_connect('mysql.teenconnectionafghanistan.org', 'tcamysql', 'tca7mysql') OR die(mysql_error());

$db = mysql_select_db('tcausers', $link) OR die(mysql_error());


if(isset($_COOKIE['ID_my_site']))
{
	$username = $_COOKIE['ID_my_site'];
 	$pass = $_COOKIE['Key_my_site'];
	$query = sprintf("SELECT * FROM users WHERE username='%s'", mysql_real_escape_string($username));
	$check = mysql_query($query);
	while($info = mysql_fetch_array($check))
	{
 		if ($pass != $info['password']) 
 		{}
 		else
 		{
 			header("Location: http://www.teenconnectionafghanistan.org$url");
 		}
 	}
}

if (isset($_POST['Login']))
{
	if(!$_POST['username'] | !$_POST['password'])
	{
 		die('You did not fill in a required field.');
 	}
	if (!get_magic_quotes_gpc())
	{
 		$_POST['username'] = addslashes($_POST['username']);
 	}
	$query = sprintf("SELECT * FROM users WHERE username='%s'", mysql_real_escape_string($_POST['username']));
	$check = mysql_query($query);
    if($check == false)
	{
		die($query);
	}
	$check2 = mysql_num_rows($check);	
	if ($check2 == 0)
	{
 		die('That user does not exist in our database. <a href=join.php>Click Here to Register</a>');
 	}
	
	while($info = mysql_fetch_array($check))
	{
		$_POST['password'] = stripslashes($_POST['password']);
 		$info['password'] = stripslashes($info['password']);
	 	if ($_POST['password'] != $info['password']) {
 			die('Incorrect password, please try again. <a href="http://www.teenconnectionafghanistan.org$url">Return to previous page.</a>');
 		}
		else
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$hour = time() + 3600;

			setcookie(ID_my_site, $_POST['username'], $hour, "/", ".teenconnectionafghanistan.org", false, false);
			
			setcookie(Key_my_site, $_POST['password'], $hour, "/", ".teenconnectionafghanistan.org", false, false);
			header("Location: http://www.teenconnectionafghanistan.org$url");
			exit;		
		}
	}
}
else
{
	?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> <table border="0"> <tr><td colspan=2><h1>Login</h1></td></tr> <tr><td>Username:</td><td> <input type="text" name="username" maxlength="40"> </td></tr>
    <tr><td>Password:</td><td> <input type="password" name="password" maxlength="50"> </td></tr> <tr><td colspan="2" align="right"> <input type="submit" name="submit" value="Login"> </td></tr> </table> </form>
<?php } ?> 
</body>
</html>