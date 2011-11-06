<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/layout.dwt.php" codeOutsideHTMLIsLocked="false" -->
<?php
$url = $_SERVER['PHP_SELF'];
?>
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
	  	<img border="" src="images/homebanner_small.png"/>

<h1><span style="position:absolute; left;1;top:55px; left: 249px; width: 312px; height: 120px;">
Teen Connection: Afghanistan</span></h1>

      </div>
      <div class="menu_nav">
        <ul>
				<li <?php if($url=="/index.php") echo("class='active'")?> ><a href="./"><span>Home</span></a></li>
        		<li <?php if($url=="/mission.php") echo("class='active'")?>><a href="mission.php"><span>Mission</span></a></li>
                <li <?php if($url=="/members.php" || $url=="/register.php") echo("class='active'")?> >
				<?php
                if(isset($_COOKIE['ID_my_site']))
                {
				echo("<a href='members.php'><span>Your Account</span></a>");
                }
                else
                {
					echo("<a href='register.php'><span>Join TCA</span></a>");
				}
				?> </li>
                <li <?php if($url=="/about.php") echo("class='active'")?>><a href="about.php"><span>About Us</span></a></li>
        		<li <?php if($url=="/blog.php") echo("class='active'")?>><a href="blog.php"><span>Blogs</span></a></li>
        		<li <?php if($url=="/gallery.php") echo("class='active'")?>><a href="gallery.php"><span>Gallery</span></a></li>
				<li <?php if($url=="/contact.php") echo("class='active'")?>><a href="contact.php"><span>Contact Us</span></a></li>
				<li <?php if($url=="/partners.php") echo("class='active'")?>><a href="partners.php"><span>Partners</span></a></li>			

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
        		<h2><span>Mission</span><br /> Statement:</h2>
    				<div class="clr"></div>
    				<p>"Our mission is to promote conversation between the youth of Afghanistan and America and to foster understanding, respect, and a sense of global community among the leaders of the future. Teen Connection: Afghanistan brings teenagers together from two different cultures through social networking, email, and video. TCA members in both countries work as equals to share their cultures and worldviews, and, in doing so, lay the foundation for a more understanding society of tomorrow."</p>
    				<div class="clr"></div>
    				<h2><span>Our</span> <br />Purpose:</h2>
    				<div class="clr"></div>
    				<p>Teen Connection Afghanistan was created in acknowledgement that while many adults may become set in their ways and beliefs, kids are more capable of abolishing preconceived notions of people and cultures.  Children can learn to be more understanding and accepting of people different from themselves, but only if they are allowed the opportunity to interact and build relationships.  From this notion comes TCA's core concept: that teenagers from America and Afghanistan if given the chance to speak to one another and to learn from one another, will as adults, be more invested in one another's wellbeing.    			</p>
    				<p>&nbsp;</p>
    				<div class="yellow_bar"></div>
					<p>&nbsp;</p>
					<div class="bottom_bar">
						<span>
							<div class="bottom_box">
								<h2>Who We Are</h2>
								<img src="file:///Macintosh HD/Users/jonathan/Desktop/Screen shot 2011-11-06 at 4.33.24 PM.png"/>
						    </div>
				            <div class="bottom_box">
						  		  <h2>Sign Up Now!</h2>
						    </div>
					        <div class="bottom_box">
						  		  <h2>Donate</h2>
						    </div>
						</span>
					</div>
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
