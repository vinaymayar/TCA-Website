<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$url = $_SERVER['PHP_SELF'];
?>
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
	  	<img border="" src="../images/homebanner_small.png"/>

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
      <!-- TemplateBeginEditable name="topbar" -->
      Lorem Ipsum
      <!-- TemplateEndEditable -->
	  </div>
      <div class="clr"></div>
  </div>
  <div class="content">
    <div class="content_resize"><!-- TemplateBeginEditable name="mainbar" -->
    		<div class="article">
    			<h2><span>A Charity</span> Organization!</h2>
    			<p class="infopost">Posted <span class="date">on 11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Fil	d under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
    			<div class="clr"></div>
    			<div class="img"><img src="../images/img1.jpg" width="198" height="208" alt="" class="fl" /></div>
    			<div class="post_content">
    				<p>&nbsp;</p>
    				<p><strong></p>
    				<p class="spec"><a href="#" class="rm">Read more</a></p>
    				</div>
    			<div class="clr"></div>
    			</div>
    		<div class="article">
    			<h2><span>yay</span> blah</h2>
    			<p class="infopost">Posted <span class="date">on 29 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>7</span></a></p>
    			<div class="clr"></div>
    			<div class="img"><img src="../images/img2.jpg" width="198" height="208" alt="" class="fl" /></div>
    			<div class="post_content">
    				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</a> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
    				<p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
    				<p class="spec"><a href="#" class="rm">Read more</a></p>
    				</div>
    			<div class="clr"></div>
    			</div>
    		<p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
    <!-- TemplateEndEditable -->
    
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
</html>
