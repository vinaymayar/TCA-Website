<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teen Connection: Afghanistan</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="q99_gDx68tRHS6Vb7FnLbdoyFk7t60ZBBs6YkoR0oGY" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
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
        	<p><a href="./">This is not Latin. It is </a><a href="http://en.wikipedia.org/wiki/Lorem_ipsum" title="Lorem Ipsum - Wikipedia" target="_new"><span class="hyperlink">Lorem Ipsum.</span></a></p>
        	<h2 style="color:#F00"><i>Real TCA stuff coming soon.</i></h2>
        </h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
        	<!-- TemplateBeginEditable name="navigation bar" -->
			[button 1] [button 2]
			<!-- TemplateEndEditable -->

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
  </div>
  <div class="content">
    <div class="content_resize"><!-- TemplateBeginEditable name="mainbar" -->
    	<div class="mainbar">
    		<div class="article">
    			<h2><span>A Charity</span> Organization!</h2>
    			<p class="infopost">Posted <span class="date">on 11 sep 2018</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Fil	d under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
    			<div class="clr"></div>
    			<div class="img"><img src="../images/img1.jpg" width="198" height="208" alt="" class="fl" /></div>
    			<div class="post_content">
    				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
    				<p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> Etiam nec libero magna, et dictum velit. Proin mauris mauris, mattis eu elementum eget, commodo in nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, imperdiet eu bibendum ac, pretium ac massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque condimentum luctus ullamcorper.</p>
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
    		</div>
    <!-- TemplateEndEditable -->
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
            <!--
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
              -->
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="../images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="../images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
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
</html>