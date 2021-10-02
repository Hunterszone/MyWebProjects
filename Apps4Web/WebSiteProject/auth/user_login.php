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
	  <link rel="shortcut icon" type="image/jpg" href="../../img/favicon.ico"/>
      <script src= "https://github.com/VincentGarreau/particles.js"></script>
      <script src= "../../js/user_login.js"></script>
      <script>
       //Get the button:
         scrollButton = document.getElementsByClassName("scroll")[0];
         scrollButton.addEventListener('click', topFunction);
         
          // When the user scrolls down 50px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};
         
          function scrollFunction() {
             if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                scrollButton.style.display = "block";
             } else {
                scrollButton.style.display = "none";
             }
          }
         
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
             window.scrollTo({top: 0, behavior: 'smooth'}); 
          }			  
       </script>
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
            <div id="clockbox" style="font-family:Jokerman; color:yellow; font-size:120%; text-align:right;"></div>
         </td>
      </tr>
   </table>
   <!-- HTML for ANIMATION, CLOCK, HEADING AND SEARCH ENGINE -->
   <div id="menu">
      <div id='menutext'>
         <ul>
         <li><a id="quiz" style="cursor:pointer" onclick="location.href='../quizes/quizes.php'"><i class="fa fa-book"></i> Web quizzes</a></li>
         <li><a style="cursor:pointer" id="profile" onclick=window.open("../account/welcome_message.php")><i class="fa fa-home"></i> Profile</a></li>
         <li>
            <a href='#'><i class="fa fa-upload"></i> Upload</a>
            <ul>
               <li><a style="cursor:pointer" id="files" onclick="location.href='../file_upload.html'">Files</a></li>
               <li><a style="cursor:pointer" id="avatar" onclick="location.href='../avatar_upload.html'">Avatar</a></li>
            </ul>
         </li>
         <li><a style="cursor:pointer" id="newPass" onclick="location.href='./changePass.php'"><i class="fa fa-unlock"></i> Change pass</a></li>
         <li>
            <a href='#'><i class="fa fa-comments"></i> Contacts</a>
            <ul>
               <li><a style="cursor:pointer" id="feedback" onclick="location.href='../forms/contact_form.php'">Feedback</a></li>
               <li><a style="cursor:pointer" id="forum" onclick=window.open("../phpBB3/index.php")>Forum</a></li>
            </ul>
         </li>
         <li><a style="cursor:pointer" id="logout" onclick="location.href='../index.php'"><i class="fa fa-sign-out"></i>Logout</a></li>
      </div>
      <div class="socialiconsmenu">
         <ul>
            <a>Follow us:</a>
            <a href="Facebook address" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="Twitter address" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="Pinterest address" class="pinterest-p" target="_blank"><i class="fa fa-pinterest-p"></i></a>
            <a href="YouTube address" class="youtube-play" target="_blank"><i class="fa fa-youtube-play"></i></a>
            <a href="Instagram address" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="Tumblr address" class="tumblr" target="_blank"><i class="fa fa-tumblr"></i></a>
            <a href="LookBook address" class="lookbook" target="_blank"><i class="fa fa-heart"></i></a>
            <a href="Bloglovin address" class="bloglovin" target="_blank"><i class="fa fa-plus"></i></a>
         </ul>
      </div>
   </div>
   <div class="header">
      <h1 class="pulsate"><a style="color:#eb7434">Web</a> Programming <a style="color:#eb7434">World</a></h1>
      <h2>Online school <a style="color:#eb7434">for</a> web development <a style="color:#eb7434">and</a> web design</h2>
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
		<div class="sidebar-right-badge">
			<a href="https://statuspage.freshping.io/55647-WebProgrammingWorld" target="_blank"><img src="https://statuspage.freshping.io/badge/2e3e4806-0a16-4fbb-96a9-5db655d9c699?0.5940733387587804"/></a>
		</div>
		<div class="footer">
            <div class='social-sidebar'>
               <a class='facebook' target='_blank' title="S H A R E" onclick="void window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
				<span>FACEBOOK</span>
               </a>
               <a class='twitter' target='_blank' title="S H A R E" a onclick="void window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.example.com%2F&original_referer=.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
				<span>TWITTER</span>
               </a>
               <a class='linkedin' target='_blank' title="S H A R E" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://YourContentsURLGoesHere.com&amp;title=Article Tile Goes Here&amp;summary=Put your summary here" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=390,width=548');return false;">
				<span>LINKEDIN</span>
               </a>
			   <a class="scroll gplus" style="cursor: pointer;" alt="Go to top">
				<span>SCROLL UP</span>
               </a>
            </div>
        </div>
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
   </body>
</html>