<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/layout.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Teen Connection: Afghanistan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="q99_gDx68tRHS6Vb7FnLbdoyFk7t60ZBBs6YkoR0oGY" />
<link href="./css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" /> 
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-times-700.js"></script>
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
</head>
<body>
<div id="container"></div>
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
        		<li><a href="about.php"><span>About Us</span></a></li>
        		<li><a href="contact.php"><span>Contact Us</span></a></li>
        	<!-- InstanceEndEditable -->

        	</ul>
		</div>
      <div class="clr">;</div>
	  <div class="topbar">
      <!-- InstanceBeginEditable name="topbar" -->
      <div class="slider">
        <div class="clr"></div>
      	</div>
      <!-- InstanceEndEditable -->
	  </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize"><!-- InstanceBeginEditable name="mainbar" -->
    	<div class="mainbar">
        <div class="textbox">
    			<h2><span>Mission</span><br /> Statement:</h2>
    			<div class="clr"></div>
    				<p><strong>"Our mission is to promote conversation between the youth of Afghanistan and America and to foster understanding, respect, and a sense of global community among the leaders of the future. Teen Connection: Afghanistan brings teenagers together from two different cultures through social networking, email, and video. TCA members in both countries work as equals to share their cultures and worldviews, and, in doing so, lay the foundation for a more understanding society of tomorrow."</strong></p>
    			<div class="clr"></div>
    			<h2><span>Our</span> <br />Purpose:</h2>
    			<div class="clr"></div>
    			<p><strong>Teen Connection Afghanistan was created in acknowledgement that while many adults may become set in their ways and beliefs, kids are more capable of abolishing preconceived notions of people and cultures.  Children can learn to be more understanding and accepting of people different from themselves, but only if they are allowed the opportunity to interact and build relationships.  From this notion comes TCA's core concept: that teenagers from America and Afghanistan if given the chance to speak to one another and to learn from one another, will as adults, be more invested in one another's wellbeing.</strong></p>
    			<div class="clr"></div>
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
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
