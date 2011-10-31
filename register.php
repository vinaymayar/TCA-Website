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
		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
        $a = md5(uniqid(rand(), true));
		$hash = hash("sha256", $password);
        $query = "INSERT INTO users (username, firstname, lastname, email, password, active) VALUES ('$username', '$firstname', '$lastname', '$email', '$hash', '$a')";
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
}
else {
        echo '<h3>Error!</h3>
        The following error(s) occured:<br />';
       
        foreach ($errors as $msg) {
            echo " - <font color=\"red\">$msg</font><br />\n";
        }
    }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/layout.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Teen Connection: Afghanistan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="q99_gDx68tRHS6Vb7FnLbdoyFk7t60ZBBs6YkoR0oGY" />
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" /> 
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-times-700.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
    <?php
	if(!isset($_COOKIE['ID_my_site']))
	{
		?>
<div class="searchform">
          <form style="margin: 30px 20px 8px 0px" name="login" method="post" action="login.php">
  <table border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td>Username&nbsp;</td>
      <td><input name="username" type="text" id="username" maxlength="15" /></td>
    </tr>
    <tr>
      <td>Password&nbsp;</td>
      <td><input name="password" type="password" id="password" maxlength="15" /></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>
        <input name="Login" type="submit" value="Login" />
        <input name="Reset" type="reset" value="Reset" />
      </td>
    </tr>
  </table>
</form>
<p style="margin-bottom:0"><a href="join.php">Create an Account</a></p>
      </div>
      <?php
	}
	if(isset($_COOKIE['ID_my_site']))
	{
     ?> 
      <div class="searchformloggedin">
      <table float="right" border="0" align="center" cellpadding="0" cellspacing="0"  style="margin: 30px 5px 8px 0px">
    <tr>
      <td colspan="2" align="center"><h2 class="star">Welcome, <?php echo $_COOKIE['ID_my_site'] ?>.</h2></td>
      </tr>
     <tr>
     <td width="75" align="center"><a href="members.php">Your Account</a></td>
     <td width="75" align="center"><a href="logoff.php">Sign Out</a></td>
     </tr>
     </table>
      
      </div>
      <?php } ?>
      <div class="logo">
        <h1>
        	<p>Teen Connection: Afghanistan</p>
        	<!--<h2><i>Website still under construction</i></h2>-->
        </h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
        	<!-- InstanceBeginEditable name="navigation bar" -->
<li><a href="./"><span>Home Page</span></a></li>
        		<li><a href="donate.php"><span>Donate</span></a></li>
<?php
                if(isset($_COOKIE['ID_my_site']))
                {
				echo("<li><a href='members.php'><span>Your Account</span></a></li>");
                }
                else
                {
					echo("<li><a href='register.php'><span>Join TCA</span></a></li>");
				}
				?>
                <li><a href="contribute.php"><span>What You Can Do</span></a></li>
        		<li class="active"><a href="about.php"><span>About Us</span></a></li>
        		<li><a href="contact.php"><span>Contact Us</span></a></li>			<!-- InstanceEndEditable -->

        	</ul>
		</div>
      <div class="clr">;</div>
	  <div class="topbar">
      <!-- InstanceBeginEditable name="topbar" -->
      <!-- InstanceEndEditable -->
	  </div>
      <div class="clr"></div>
  </div>
  <div class="content">
    <div class="content_resize"><!-- InstanceBeginEditable name="mainbar" -->
    <div class="mainbar">
    <div class="textbox">


<h3>Register</h3>


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
</div>
</div>
<!-- InstanceEndEditable -->
    
    <!--
    	<div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span><a href="../donate.html">Donate</a></span></h2>
          <div class="clr"></div>
          <div class="post_content">
          	<p>TCA needs money to keep its servers up and running and will begin accepting donations as soon as its non-profit status is approved.</p></div>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2>
          <div class="clr"></div>
          <div class="post_content"><p>Contact us to sponsor TCA!</p></div>
          <ul class="ex_menu">
           00><!--
            <li><a href="http://www.dreamtemplate.com/">DreamTemplate</a><br />
              Over 6,000+ Premium Web Templates</li>
            <li><a href="http://www.templatesold.com/">TemplateSOLD</a><br />
              Premium WordPress &amp; Joomla Themes</li>
            <li><a href="http://www.imhosted.com/">ImHosted.com</a><br />
              Affordable Web Hosting Provider</li>
            <li><a href="http://www.megastockphotos.com/">MegaStockPhotos</a><br />
              Unlimited Amazing Stock Photos</li>
            <li><a href="http://www.evrsoft.com/">Evrsoft</a><br />
              Website Builder Software &amp; Tools</li>
            <li><a href="http://www.csshub.com/">CSS Hub</a><br />
              Premium CSS Templates</li>
              --><!--
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
    -->
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <p>Our image gallery is currently empty.</p>
        <!--
        <a href="#"><img src="../images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a>
        -->
        </div>
      <div class="col c2">
        <h2><span>Charity</span> Overview</h2>
        <p>Teen Connection: Afghanistan offers children in Afghanistan the opportunity to communicate with high-school and college students, giving them access to information and culture they would not otherwise encounter.  TCA supplements efforts to distribute computers in Afghanistan with the chance to talk to real people, for pen-pal-like mutual learning.</p>
        <ul class="fbg_ul">
          <li><a href="about.html">Click here to learn more about TCA.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>If you have any questions about TCA, its mission, or how you can help, feel free to contact us:</p>
        <p class="contact_info"> <!--<span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> --><a href="mailto:activistny@aol.com">Click Here to Email Us</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  
</div>
</div>
</body>
<!-- InstanceEnd --></html>
