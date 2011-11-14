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
				<li <?php if($url=="/connections.php") echo("class='active'")?>><a href="connections.php"><span>Connections</span></a></li>			
        		<!-- <li <?php if($url=="/mission.php") echo("class='active'")?>><a href="mission.php"><span>Mission</span></a></li> -->
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
        		<!-- <li <?php if($url=="/blog.php") echo("class='active'")?>><a href="blog.php"><span>Blogs</span></a></li> -->
        		<li <?php if($url=="/gallery.php") echo("class='active'")?>><a href="gallery.php"><span>Gallery</span></a></li>
				<li <?php if($url=="/contact.php") echo("class='active'")?>><a href="contact.php"><span>Contact Us</span></a></li>
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
			<table style="margin-left:10px" cellpadding="5" cellspacing="0" border="0"><tr><td valign="top"><img src="images/ambassador_picture.jpg" alt="ambassador_picture.jpg" title="Former Afghan Ambassador to the U.S., Said T. Jawad and Devon Varrichione" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Devon Varrichione<br>President and Founder</span><br><a href="mailto:dvarrichione@teenconnectionafghanistan.org">dvarrichione@teenconnectionafghanistan.org</a><br/><br/>A lifelong New Yorker, Devon has always been fascinated by other cultures.  Growing up surrounded by the work of his documentary filmmaker mother, Stacia Teele, he realized at an early age that understanding is key to building relationships with people different from himself.  Devon was honored to help host an Afghan girl and her father for several weeks when she came to America for a lifesaving operation on her heart.  Vasila and her father Arman showed him that there is so much to be learned from the Afghan people, who are often portrayed one-dimensionally by the media.  Devon hopes that a connection and sense of fellowship can be fostered between the next generations of Americans and Afghans through the work of TCA.<br/><br/>In addition, Devon is a senior at Stuyvesant High School and is an editor of the Stuyvesant paper, The Spectator.  Devon is Chief of Staff of Stuyvesant's Model United Nations team, a member of ARISTA, Stuyvesant's chapter of the National Honor Society, and in his free time enjoys photography, practicing Tae Kwon Do, and biking through the city.  Devon also highly values the community service work he does with his church youth group and the lessons on perspective that service has taught him.</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/henry_aberle.jpg" alt="henry_aberle.jpg" title="Henry Aberle" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Henry Aberle<br>Internal Communications</span><br><a href="mailto:haberle@teenconnectionafghanistan.org">haberle@teenconnectionafghanistan.org</a><br/><br/>Henry Aberle is a senior and vocal major at LaGuardia High School for the Performing Arts in New York City. He is passionate about classical vocal performance and French literature, and plans to major in both in college. After meeting Devon and learning about the goals of Teen Connection: Afghanistan, Henry was inspired to assume an active role in the organization. Henry is LaGuardia High School's TCA representative and is responsible for maintaining TCA's internal communication.</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/yasmin_kelly.jpg" alt="yasmin_kelly.jpg" title="Yasmin Kelly" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Yasmin Kelly<br>Graphic Design and Fundraising</span><br><a href="mailto:ykelly@teenconnectionafghanistan.org">ykelly@teenconnectionafghanistan.org</a><br/><br/>A senior vocal major at LaGuardia High School, Yasmin is delighted to be able to work with other students her age to make a difference in other peoples' lives. She is the president of her school's Environmental club and is now a fundraising coordinator for the LaGuardia chapter of TCA. Last year she was also a member of the school's chapter of Girls Learn International, where she learned about the issue of women's rights in Afghanistan and other places around the world. She is volunteering with TCA because she feels that learning about the inequalities in the world is not enough: one must strive to make a tangible difference in any way they can. Learning about other cultures is very important to her and is something she wishes to always continue doing throughout her life!</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/rachel_berger.jpg" alt="rachel_berger.jpg" title="Rachel Berger" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Rachel Berger<br>Graphic Design</span><br><a href="mailto:rberger@teenconnectionafghanistan.org">rberger@teenconnectionafghanistan.org</a><br/><br/>Rachel is a Brooklyn-based student, writer, and artist with a strong interest in journalism and human rights. Last summer, she attended a pluralistic Jewish summer program at Brandeis University, studying with young people of diverse backgrounds, lifestyles, and religious views. She believes that in today's world, a combination of technology and an open mind can bring together people of very different life experiences. She's excited to work with Teen Connection: Afghanistan to learn more about the lives of Afghani teenagers and raise awareness of issues affecting both Afghanistan and the United States.<br/><br/>Rachel is a senior at LaGuardia High School, where she studies Visual Art and edits the school magazine, LaG Mag. In her free time, she volunteers at her community farm and blogs on women's media issues for the non-profit SPARK.</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/matthew_propper.jpg" alt="matthew_propper.jpg" title="Matthew Propper" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Matthew Propper<br>Beacon Coordinator</span><br><a href="mailto:mpropper@teenconnectionafghanistan.org">mpropper@teenconnectionafghanistan.org</a><br/><br/>Matt is an honors student at Beacon High School. His favorite subject is International Studies and he is particularly interested in Asia and the Middle East. In his spare time, he plays travel baseball and travel ice hockey. He also volunteers at the Jewish Community Center and works at a local ice rink. He enjoys music and has been studying both piano and the guitar for the last six years. He has recently added percussion to his music repertoire. Matt believes that "Teen Connection: Afghanistan" will be an integral part of his personal journey into Middle Eastern Studies. Having the ability to exchange ideas about global issues with a person his age living in a distant country is a one-of-a-kind opportunity. In the United States, the Taliban and Al Qaeda are just often-heard phrases, but in Afghanistan those words have a life-altering significance. To be able to learn from a teenager's perspective what it is like to live with the Taliban threat is absolutely incredible. Perhaps by combining the brainpower of teenagers from two very different countries, Matt feels, solutions to world problems can be discussed and meaningful connections can be made.</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/alyssa_rosete.jpg" alt="alyssa_rosete.jpg" title="Alyssa Rosete" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Alyssa Rosete<br>Graphic Designer</span><br><a href="mailto:arosete@teenconnectionafghanistan.org">arosete@teenconnectionafghanistan.org</a><br/><br/>Upon hearing about Teen Connection Afghanistan, Alyssa became naturally drawn to the oppurtunity of helping  Afghan teens. Because of her curiousity and inquisitiveness, not only was Alyssa excited about establishing a connection with the Afghan people, but she was eager to learn in-depth about a culture that she wasn't so familiar with.<br/><br/>With a talent in the arts, Alyssa grasped the opputunity to help establish the visual component of the project.  She took part in the development of the TCA website design as well as creating the illustrations that accompany it. She enjoys taking on the challenge of helping others to visualize the message that TCA is trying to estabish throught art.<br/><br/>Alyssa currently attends Fiorello H. LaGuardia High School as senior. She is an active member of the environmental club, and a contributor to the school paper, LaGmag.</td></tr>
	<tr><td colspan="2" align="center"><hr /></td></tr>
	<tr><td valign="top"><img src="images/jonathan_lessinger.jpg" alt="jonathan_lessinger.jpg" title="Jonathan Lessinger" border="1"></td><td valign="top"><span style="font: 18px/20px Verdana,Geneva,Arial,Helvetica,sans-serif;">Jonathan Lessinger<br>Co-Webmaster</span><br><a href="mailto:jlessinger@teenconnectionafghanistan.org">jlessinger@teenconnectionafghanistan.org</a><br/><br/>Jonathan is a senior at Stuyvesant High School with steadily developing interests in math and the sciences, particularly computer science, which he intends to continue to study in-depth. A friend and classmate of founder Devon Varrichione, he was intrigued by Devon's ambition to promote global community. Although he is also a devoted jazz musician and hard-working student, he is pleased to devote time as well as creative and technical effort to the project.</td></tr>
			</table>
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
           00>
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
