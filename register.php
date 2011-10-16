<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(isset($_SESSION['url'])) 
   $url = $_SESSION['url'];
else 
   $url = "index.html";

if (isset($_POST['submitted'])) {
 
    $errors = array();
        require_once ('mysql_connect.php');
	if (eregi('^[[:alnum:]\.\'\-]{4,30}$', stripslashes(trim($_POST['username']))) ) {
        $user = mysql_real_escape_string($_POST['username']);
        $query = "SELECT username FROM users WHERE username = '$user'";
        $result = @mysql_query($query);
        $num = @mysql_num_rows($result);
       
        if ($num> 0) {
            $errors[] = '<font color="red">The username you have chosen has already been taken, please try again.</font>';
        }
		else {
            $username = mysql_real_escape_string($_POST['username']);
        }
    }
	else {
        $errors[] = '<font color="red">Please provide a valid username between 4 and 30 characters.</font>';
    }
	if (!eregi('^[a-zA-Z]+[a-zA-Z0-9_-]*@([a-zA-Z0-9]+){1}(\.[a-zA-Z0-9]+){1,2}', stripslashes(trim($_POST['email'])) )) {
        $errors[] = '<font color="red">Please provide a valid email address.</font>';
    }
	else {
        $email = mysql_real_escape_string($_POST['email']);
    }
	if (!empty($_POST['password1'])) {
        if ($_POST['password1'] != $_POST['password2']) {
            $errors[] = '<font color="red">The two passwords you have entered do not match.</font>';
        } else {
            $password = $_POST['password1'];
        }
    }
	else {
        $errors[] = '<font color="red">Please provide a password.</font>';
    }
	
	if (empty($errors)) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $a = md5(uniqid(rand(), true));
        $query = "INSERT INTO users (username, firstname, lastname, email, password, active) VALUES ('$user', '$firstname', '$lastname', '$email', SHA('$password'), '$a')";
        $result = @mysql_query($query);
        if (mysql_affected_rows() == 1) {
            // Send the E-Mail
        	$body = "Thank you for registering at the User Registration site. To activate your account, please click on this link:\n\n";
            $body .= "http://www.teenconnectionafghanistan.org/activate.php?x=" . mysql_insert_id() . "&y=$a";
            mail($_POST['email'], 'Registration Confirmation', $body, 'From: webmaster@teenconnectionafghanistan.org');
 			// Show thank you message
            echo '<h3>Thank You!</h3>
            You have been registered. An email has been sent to the address you specified. Please check your e-mail to activate your account.';
        }
		else {
            echo '<font color="red">You could not be registered, please contact us about the problem and we will fix it as soon as we can.</font>';
        }
} else {
        echo '<h3>Error!</h3>
        The following error(s) occured:<br />';
       
        foreach ($errors as $msg) {
            echo " - <font color=\"red\">$msg</font><br />\n";
        }
    }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Register</title>
<h3>Register</h3>

</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <p><input type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" size="30" maxlength="30" /> <small>First Name</small></p>
    
        <p><input type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" size="30" maxlength="30" /> <small>Last Name</small></p>

    <p><input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" size="30" maxlength="30" /> <small>Username</small></p>
   
    <p><input type="password" name="password1" size="30" maxlength="40" /> <small>Password</small></p>
   
    <p><input type="password" name="password2" size="30" maxlength="40" /> <small>Confirm Password</small></p>
   
    <p><input type="text" name="email" size="30" maxlength="30" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /> <small>Email Address</small></p>
   
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="TRUE" />
</form>
</body>
</html>
