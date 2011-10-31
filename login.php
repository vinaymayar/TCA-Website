<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(isset($_SESSION['url'])) 
   $url = $_SESSION['url'];
else 
   $url = "/index.html";
   
$link = mysql_connect('mysql.teenconnectionafghanistan.org', 'tcamysql', 'tca7mysql') OR die(mysql_error());

$db = mysql_select_db('tcausers', $link) OR die(mysql_error());

if($url == "login.php")
$url = "/index.html";

if(isset($_COOKIE['ID_my_site']))
{
	$username = $_COOKIE['ID_my_site'];
 	$pass = hash("sha256", $_COOKIE["Key_my_site"]);
	$query = sprintf("SELECT * FROM users WHERE username='%s'", mysql_real_escape_string($username));
	$check = mysql_query($query);
	while($info = mysql_fetch_array($check))
	{
 		if ($pass != $info['password']) 
 		{}
 		else
 		{
 			header("Location: http://www.teenconnectionafghanistan.org" . $url . "");
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
 		die('That user does not exist in our database. <a href=register.php>Click Here to Register</a>');
 	}
	
	while($info = mysql_fetch_array($check))
	{
		$password = stripslashes($_POST['password']);
		$hash = hash("sha256", $password);
	 	if ($hash != $info['password']) {
 			die('Incorrect password, please try again. <a href="http://www.teenconnectionafghanistan.org' . $url . '">Return to previous page.</a>');
 		}
		else
		{
			$_POST['username'] = stripslashes($_POST['username']);
			$hour = time() + 3600;

			setcookie(ID_my_site, $_POST['username'], $hour, "/", ".teenconnectionafghanistan.org", false, false);
			
			setcookie(Key_my_site, $password, $hour, "/", ".teenconnectionafghanistan.org", false, false);
			header("Location: http://www.teenconnectionafghanistan.org" . $url . "");
			exit;		
		}
	}
}
else
{
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
<p style="margin-bottom:0"><a href="register.php">Create an Account</a></p>
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
	  	<img src="images/homebanner_small.png"/>
        <h1>
        	<p class="title">Teen Connection: Afghanistan</p>
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
        		<li><a href="./"><span>About Us</span></a></li>
    <li><a href="contact.php"><span>Contact Us</span></a></li>			<!-- InstanceEndEditable -->

        	</ul>
		</div>
      <div class="clr">;</div>
	  <div class="topbar">
      <!-- InstanceBeginEditable name="topbar" --><!-- InstanceEndEditable -->
	  </div>
      <div class="clr"></div>
  </div>
  <div class="content">
    <div class="content_resize"><!-- InstanceBeginEditable name="mainbar" -->
    <div class="mainbar">
    <div class="textbox">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> <table border="0" float="center"> <tr><td colspan=2><h1>Login</h1></td></tr> <tr><td>Username:</td><td> <input type="text" name="username" maxlength="40"> </td></tr>
    <tr><td>Password:</td><td> <input type="password" name="password" maxlength="50"> </td></tr> <tr><td colspan="2" align="right"> <input type="submit" name="submit" value="Login"> </td></tr> </table> </form>
<?php } ?> 
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

      <div class="clr"></div>
    </div>
  </div>
</div>
</div>
</body>
<!-- InstanceEnd --></html>