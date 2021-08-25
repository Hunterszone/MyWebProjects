<?php
   session_start();	
   session_destroy();
   ?>
<!DOCTYPE html>
<html>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
      <title>Home</title>
      <meta charset="utf-8">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/refactored_css.css">
      <link rel="stylesheet" href="./css/particles.css">
	  <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>
      <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      <script src= "https://github.com/VincentGarreau/particles.js"></script>
   </head>
   <body>
      <div class="header">
         <h1 class="pulsate"><a style="color:#eb7434">Web</a> Programming <a style="color:#eb7434">World</a></h1>
         <h2>Online school <a style="color:#eb7434">for</a> web development <a style="color:#eb7434">and</a> web design</h2>
      </div>
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
         <div class="dropdown_menus">
            <div class="dropdown">
				<button style="cursor:pointer" onclick="window.location.href='./auth/SignUp.php'")>
				<i class="fa fa-user-plus"></i> Sign up</button>
            </div>
            <div class="dropdown">
				<button class="dropbtn"><i class="fa fa-sign-in"></i> Login</button>
				<div class="dropdown-content">
					<button type="button" id="but1" style="cursor:pointer" onclick="window.location.href='./forms/login_form.php'" value="Password">With Password</button>
					<button type="button" id="but2" style="cursor:pointer" onclick="window.location.href='./qr/generateQR.php'" value="2FA/QR code">With QR Code</button>
					<button type="button" id="but3" style="cursor:pointer" onclick="window.location.href='./sms/enterMobile.php'" value="SMS login">With SMS Code</button>
				</div>
            </div>
            <div class="dropdown">
               <button class="dropbtn"><i class="fa fa-book"></i> Articles</button>
               <div class="dropdown-content">
                  <button type="button" style="cursor:pointer" onclick=window.open("./articles/html.html") value="HTML">HTML</button>
                  <button type="button" style="cursor:pointer" onclick=window.open("./articles/css.html") value="CSS">CSS</button>
                  <button type="button" style="cursor:pointer" onclick=window.open("./articles/javascript.html") value="JS">JS</button>
                  <button type="button" style="cursor:pointer" onclick=window.open("./articles/php.html") value="PHP">PHP</button>
               </div>
            </div>
            <div class="dropdown">
               <button class="dropbtn"><i class="fa fa-pencil"></i> Contact us</button>
               <div class="dropdown-content">
                  <button type="button" style="cursor:pointer" onclick="window.location.href='./forms/contact_form.php'" value="Feedback">Feedback</button>
                  <button type="button" style="cursor:pointer" onclick=window.open("phpBB3/index.php") value="Forum">Forum</button>
               </div>
            </div>
         </div>
         <div class="sidebar">
            <a href="javascript:window.print()"><img src="img/print-icon.png" alt="print this page" id="print-button" title="Print" style="width:40px;height:40px" /></a>
            <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" target="_blank"><img src="img/creative-icon.png" title="Creative Commons" style="width:40px;height:40px" /></a>
            <a href="http://www.smashingmagazine.com/feed/" target="_blank"><img src="img/rss-feed-icon.png" alt="[Valid RSS]" title="RSS feeds" style="width:40px;height:40px" /></a>
         </div>
         <div class="footer">
            <div class='social-sidebar'>
               <a class='facebook' target='_blank' title="S H A R E" onclick="void window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
               <span>FACEBOOK</span>
               </a>
               <a class='twitter' target='_blank' title="S H A R E" a onclick="void window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.example.com%2F&original_referer=.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
               <span>TWITTER</span>
               </a>
               <a class='gplus' target='_blank' title="S H A R E" href="https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=325,width=548');return false;">
               <span>GOOGLE+</span>
               </a>
               <a class='linkedin' target='_blank' title="S H A R E" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://YourContentsURLGoesHere.com&amp;title=Article Tile Goes Here&amp;summary=Put your summary here" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=390,width=548');return false;">
               <span>LINKEDIN</span>
               </a>
            </div>
         </div>
         <!--<img class="scroll-up" src="../img/scroll-to-top.gif" alt="Go to top">-->
      </div>
      <div id="particles-js"></div>
      <!-- scripts -->
      <script src="js/particles.js"></script>
      <script src="js/app.js"></script>
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
      <!-- JAVA SCRIPT -->
      <script type="text/javascript">
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-57030474-1', 'auto');
         ga('send', 'pageview');
         
         //Get the button:
         scrollButton = document.getElementsByClassName("scroll-up")[0];
         scrollButton.addEventListener('click', topFunction);
         
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};
         
          /*function scrollFunction() {
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.style.display = "block";
             } else {
                scrollButton.style.display = "none";
             }
          }*/
         
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
             window.scrollTo({top: 0, behavior: 'smooth'}) 
          }			
      </script>
   </body>
</html>