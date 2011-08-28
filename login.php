<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
try 
{
	$db = sqlite_open('usersdb');
	if($db == false)
	{
		die('failure in retrieving usersdb');
	}
}
catch(Exception $e) 
{
  	die('could not retrieve database ERROR');
}
if(isset($_COOKIE['ID_my_site']))
{
	$username = $_COOKIE['ID_my_site'];
 	$pass = $_COOKIE['Key_my_site'];
	$check = sqlite_query($db, "SELECT * FROM users WHERE username = '$username'");
	while($info = sqlite_fetch_array($check))
	{
 		if ($pass != $info['password']) 
 		{}
 		else
 		{
 			header("Location: members.html");
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
 		$_POST['email'] = addslashes($_POST['email']);
 	}
	$usercheck = $_POST['username'];
	$query = "SELECT * FROM users";
	$check = sqlite_query($db, $query);
    if($check == false)
	{
		die('query failed');
	}
	$check2 = sqlite_num_rows($check);
	
	if ($check2 == 0)
	{
 		die('That user does not exist in our database. <a href=join.html>Click Here to Register</a>');
 	}
	
	while($info = sqlite_fetch_array($check))
	{
		$_POST['password'] = stripslashes($_POST['password']);
 		$info['password'] = stripslashes($info['password']);
 		$_POST['password'] = md5($_POST['password']);
	 	if ($_POST['password'] != $info['password']) {
 			die('Incorrect password, please try again.');
 		}
		else
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$hour = time() + 3600;
			setcookie(ID_my_site, $_POST['username'], $hour);
			setcookie(Key_my_site, $_POST['pass'], $hour);
			header("HTTP/1.0 404 Not Found");
		}
	}
}
else
{
	?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> <table border="0"> <tr><td colspan=2><h1>Login</h1></td></tr> <tr><td>Username:</td><td> <input type="text" name="username" maxlength="40"> </td></tr>
    <tr><td>Password:</td><td> <input type="password" name="password" maxlength="50"> </td></tr> <tr><td colspan="2" align="right"> <input type="submit" name="submit" value="Login"> </td></tr> </table> </form>
<?php } ?> 
</body>
</html>