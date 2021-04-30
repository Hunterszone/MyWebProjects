<?php
   require_once('./authentication.php');
   //echo "WELCOME, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
   	
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- CSS -->
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../css/refactored_css.css">
      <link rel="stylesheet" href="../../css/particles.css">
	  <link rel="stylesheet" href="../../css/megaMenuSecond.css">
      <script src= "https://github.com/VincentGarreau/particles.js"></script>
	  <script src= "../js/user_login.js"></script>
      <!--<script>
         var t1=0;
         window.onscroll = scroll1;
         
         function scroll1(){
                      var toTop = document.getElementById('toTop');
                      window.scrollY>200 ? toTop.style.display='Block' :  toTop.style.display='none';
                  	if(window.scrollY>700){            		
                  		toTop.style.display='none';
                  	}
                  }
         
         </script>-->
   </head>
   </br></br>
   <table>
      <tr>
         <td><a href="../account/welcome_message.php" target="_blank">
            <?php 
               require_once('../account/member.php');
               ?>
            </a>
         </td>
      </tr>
      <tr>
         <td>
            <div id="clockbox" style="font-family:Jokerman; font-size:120%; text-align:right;"></div>
         </td>
      </tr>
   </table>
   <!-- HTML for ANIMATION, CLOCK, HEADING AND SEARCH ENGINE -->
   <div id="menu">
    <div id='menutext'>
         <ul>
           <li><a id="quiz" style="cursor:pointer" onclick="location.href='../quizes/quizes.php'"><i class="fa fa-book"></i> Start quiz</a></li>
           <li><a style="cursor:pointer" id="profile" onclick=window.open("../account/welcome_message.php")><i class="fa fa-home"></i> Profile</a></li>    
           <li><a href='#'><i class="fa fa-upload"></i> Upload</a>
               <ul>
                  <li><a style="cursor:pointer" id="files" onclick="location.href='../file_upload.html'">Files</a></li>
                  <li><a style="cursor:pointer" id="avatar" onclick="location.href='../avatar_upload.html'">Avatar</a></li>
               </ul>
           </li>
		   <li><a style="cursor:pointer" id="newPass" onclick="location.href='./forgotPass.php'"><i class="fa fa-unlock"></i> Change pass</a></li>    
		   <li><a href='#'><i class="fa fa-comments"></i> Contacts</a>
               <ul>
                  <li><a style="cursor:pointer" id="feedback" onclick=window.open("../forms/contact_form.php")>Feedback</a></li>
                  <li><a style="cursor:pointer" id="forum" onclick=window.open("../phpBB3/index.php")>Forum</a></li>
               </ul>
           </li>
		   <li><a style="cursor:pointer" id="logout" onclick="location.href='../index.php'"><i class="fa fa-sign-out"></i> Logout</a></li>    
		</div>
	    <div class="socialiconsmenu">
			  <ul>
				<a>Follow us:</a>
				<a href="Facebook address" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="Twitter address" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="Google plus address" class="googleplus"><i class="fa fa-google-plus"></i></a>
				<a href="Pinterest address" class="pinterest-p"><i class="fa fa-pinterest-p"></i></a>
				<a href="YouTube address" class="youtube-play"><i class="fa fa-youtube-play"></i></a>
				<a href="Instagram address" class="instagram"><i class="fa fa-instagram"></i></a>
				<a href="Tumblr address" class="tumblr"><i class="fa fa-tumblr"></i></a>
				<a href="LookBook address" class="lookbook"><i class="fa fa-heart"></i></a>
				<a href="Bloglovin address" class="bloglovin"><i class="fa fa-plus"></i></a>
			</ul>
      </div>
	</div>	

   <div class="header">
      <h1 class="pulsate"><a style="color:#eb7434">Web</a> Programming <a style="color:#eb7434">World</a></h1>
      <h2>Your place <a style="color:#eb7434">for</a> web development <a style="color:#eb7434">and</a> web design</h2>
   </div>
   <br>
   <div class="content">
         <div class="search-boxes">
            <!-- HTML for SEARCH BAR -->
            <div id="tfheader">
               <form method="get" action="http://www.google.com/search" target="_blank">
                  <input type="search" ng-model="name" class="tftextinput" name="q" id="searchbar" placeholder="Google results" size="56" maxlength="120">
                  <input type="submit" value="Search" style="cursor:pointer" class="tfbutton" id="searchsubmit" class="searchsubmit" />
                  <div>
                     <input type="checkbox" class="L1" name="sitesearch" value="bing.com" unchecked /><font size="4"> Bing results</font>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </br>  
   <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <body>
      <!--<div id="header">
         <h2>
              <center><b><font color="black"><font face="algerian"><i><font size="7"><u>OUR 
                  PARTNERS:</u></font></font></i></font></font></b>
               </center>
         </h2>
         </div>-->
      </br>
      <div id="particles-js"></div>
      <!-- scripts -->
      <script src="../js/particles.js"></script>
      <script src="../js/app.js"></script>
      <!-- stats.js -->
      <!--<script src="js/lib/stats.js"></script>-->
      <script>
         var count_particles, stats, update;
         stats = new Stats;
         stats.setMode(0);
         stats.domElement.style.position = 'absolute';
         stats.domElement.style.left = '0px';
         stats.domElement.style.top = '0px';
         document.body.appendChild(stats.domElement);
         count_particles = document.querySelector('.js-count-particles');
         update = function() {
         stats.begin();
         stats.end();
         if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
         }
         requestAnimationFrame(update);
         };
         requestAnimationFrame(update);
      </script>
      <div class="header">
         <!--<h2>
            <b>FOLLOW US:</b>
         </h2>-->
		 </br>
		 <!--<div class="social" align="center">
            <a href="https://twitter.com/PageOnlineXS" class="link facebook" target="_blank"><img 
               src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/facebook-icon.png" title="Facebook" alt="HTML5 Icon" style="width:70px;height:70px"></a>
            <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><img 
               src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/twitter-2-icon.png" title="Twitter" alt="HTML5 Icon" style="width:70px;height:70px"></a>
            <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><img 
               src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/linkedin-icon.png" title="LinkedIn" alt="HTML5 Icon" 
               style="width:70px;height:70px"></a>
            <a href="https://www.youtube.com/embed/36mitS3tpIo" class="link twitter" target="_blank"><img 
               src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/youtube-icon.png" 
               title="YouTube" alt="HTML5 Icon" style="width:70px;height:70px"></a>
            <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><img 
               src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/google-plus-icon.png" title="Google +" alt="HTML5 Icon" 
               style="width:70px;height:70px"></a>
         </div>-->
      </div>
      <!--<p style="background-color: rgba(0,0,0,0.5)">
         <marquee behavior="scroll" direction="left" scrollamount="9" 
            onmouseover="this.stop();" onmouseout="this.start();"><font size="5"><I><font 
            color="white"><b><font face="verdana"><br>******To improve your experience with our portal, please update to the <a href=http://www.webdevelopersnotes.com/articles/latest-browser-
            versions.php
            class="link facebook" title="Click to update" target="_blank"><B><font color="#00FFFF">LATEST</font></B></a> stable version of 
            your browser and to the <a href=https://get.adobe.com/flashplayer/?fpchrome class="link facebook" title="Click to update" target="_blank"><B><font color="#00FFFF">LATEST</font></B></a> version of your Flash Player.******Listen to the Party Vibe Online Radio, as you <a href="#http://cdn.flaticon.com/png/256/60583.png"><B><font color="#00FFFF">SCROLL</font></B></a> down to the bottom 
            and click the player icon.******Become our partner! Click
            <a href=https://konstantindrenski.wordpress.com/author/hunterszone/? target="_blank"
               ><B><font color="#00FFFF"> HERE</font></B></a> to find out how easy it is.
            </font>
      </b></f></I></marquee>
	  </p>-->
         <div class="footer">
			         <div class="social" align="center">
                     <a href="javascript:window.print()"><img src="http://icons.iconarchive.com/icons/avosoft/warm-toolbar/256/print-icon.png" alt="print this page" id="print-button" title="Print" style="width:40px;height:40px" 
                        /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <a href="javascript:popUp('http://www.partyviberadio.com/player/embed-auto/reggae.html')"><img src="http://icons.iconarchive.com/icons/ncrow/mega-pack-2/256/Windows-Media-Player-12-icon.png" title="Online radio" 
                        style="width:40px;height:40px" /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                     <a href="#"><img src="http://icons.iconarchive.com/icons/icojam/blue-bits/256/arrow-up-icon.png" title="Back to top" style="width:40px;height:40px"/></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" target="_blank"><img src="http://icons.iconarchive.com/icons/graphicloads/seo-services/256/creative-icon.png" title="Creative Commons" 
                        style="width:40px;height:40px" /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                     <a href="http://www.smashingmagazine.com/feed/" target="_blank"><img src="http://icons.iconarchive.com/icons/graphics-vibe/simple-rounded-social/256/rss-feed-icon.png" alt="[Valid RSS]" 
                        title="RSS feeds" style="width:40px;height:40px" /></a>
		</div>
			<h2>Copyright © 2015 ME4GAMING. All rights reserved.</h2>
		 </div>
   </body>
</html>