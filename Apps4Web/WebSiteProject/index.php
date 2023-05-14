<?php
   session_start();	
   session_destroy();
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/refactored_css.css">
    <link rel="stylesheet" href="./css/particles.css">
    <link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v16.0&appId=172626243450160&autoLogAppEvents=1" nonce="1R3WLEbM"></script>		
	
	<head>
      <title>Home</title>
      <meta charset="utf-8">
	 
	  <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>

	  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
      <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
      <script src= "https://github.com/VincentGarreau/particles.js"></script>
      <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    
      <style>

		.mapBox{
			height: 400px;
			width: 100%;
			display: none;
		}
		
		img, video {
			height: auto;
			max-width: 100%;
			vertical-align: middle;
			overflow-clip-margin: content-box;
			overflow: clip;
		}
		 
		#tars-widget-fab.pop_right {
			display: block;
			bottom: calc(18px + -3px);
			right: calc(18px + 0px);
		}
		
		#tars-widget-fab {
			margin: 0;
			outline: 0;
			position: fixed;
			width: 86px;
			height: 150px;
			cursor: pointer;
			bottom: calc(4% - 12px);
			right: 18px;
			-webkit-transition-property: top,bottom,left,right;
			-webkit-transition-duration: .5s;
			transition-property: top,bottom,left,right;
			transition-duration: .5s;
			font-family: 'Roboto', sans-serif;
		}
		
		#tars-widget-fab {
			bottom: calc(4% - 12px);
			cursor: pointer;
			font-family: Roboto,sans-serif;
			height: 120px;
			margin: 0;
			outline: 0;
			position: fixed;
			right: 18px;
			transition-duration: .5s;
			transition-property: top,bottom,left,right;
			width: 86px;
		}
		
		#tars-cb-widget, #tars-widget-fab {
			overflow: hidden;
			z-index: 2147483647!important;
		}
		
		#tars-widget-fab {
			overflow: visible!important;
			overflow: initial!important;
		}

		#tars-widget-fab {
			height: 84px!important;
		}
		
		a {
			color: inherit;
			text-decoration: inherit;
		}
		
      </style>

   </head>
   <body>
      <div class="container">
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
			<form method="post" action="">
				<div class="dropdown">
					<button type="button" class="dropbtn"><i class="fa fa-sign-in"></i> Login</button>
					<div class="dropdown-content">
						<button type="button" id="qr-auth" style="cursor:pointer" onclick="window.location.href='./forms/login_form.php'" value="qrCode">2FA with QR code</button>
						<button type="button" id="sms-auth" style="cursor:pointer" onclick="window.location.href='./forms/login_form_sms.php'" value="smsCode">2FA with SMS code</button>
						<button type="button" id="sms-auth" style="cursor:pointer" onclick="window.location.href='./forms/login_form_email.php'" value="smsCode">2FA with EMAIL code</button>
					</div>
				</div>
			</form>
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
			<div class="dropdown">
				<button type="button" style="cursor:pointer" onclick=window.open("sphider/search.php") value="Site search"><i class="fa fa-search"></i> Site search</button>
			</div>
         </div>
		 <div align="center" style="display: flex;">
		 <div class="video-slider" id="slider-video">
            <!-- SLIDE 1 -->
            <div class="slide">
               <iframe class="video" width="640" height="360" src="https://www.youtube.com/embed/hQAHSlTtcmY?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- SLIDE 2 -->
            <div class="slide">
               <iframe class="video" width="640" height="360" src="https://www.youtube.com/embed/dGcsHMXbSOA?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- END OF SLIDES -->
            <div class="slide-arrow left" ></div>
            <div class="slide-arrow right" ></div>
         </div>
		 <div class="fb-page fb_iframe_widget" data-height="280px" style="width: 500px;" data-href="https://www.facebook.com/3d.web.design.seo" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"></blockquote></div>
		 </div>
         <div class="sidebar">
            <a href="javascript:window.print()"><img src="img/print-icon.png" alt="print this page" id="print-button" title="Print" style="width:40px;height:40px" /></a>
            <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" target="_blank"><img src="img/creative-icon.png" title="Creative Commons" style="width:40px;height:40px" /></a>
            <a href="http://www.smashingmagazine.com/feed/" target="_blank"><img src="img/rss-feed-icon.png" alt="[Valid RSS]" title="RSS feeds" style="width:40px;height:40px" /></a>
            <a href="#" onclick="showLocation()"><img src="img/marker.png" alt="marker" title="Show Location" style="width:40px;height:40px" /></a>
         </div>
		 <!-- <div class="sidebar-right-badge">
			<a href="https://statuspage.freshping.io/55647-WebProgrammingWorld" target="_blank"><img src="https://statuspage.freshping.io/badge/2e3e4806-0a16-4fbb-96a9-5db655d9c699?0.5940733387587804"/></a>
		</div>-->
		<div class="sidebar-right">
			<a class='facebook' target='_blank' title="S H A R E" onclick="void window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
			<span>FACEBOOK</span>
		   </a>
		   <a class='twitter' target='_blank' title="S H A R E" a onclick="void window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.example.com%2F&original_referer=.php?s=100&amp;p[title]=&amp;p[url]=&amp;&p[images][0]=', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
			<span>TWITTER</span>
		   </a>
		   <a class='linkedin' target='_blank' title="S H A R E" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://YourContentsURLGoesHere.com&amp;title=Article Tile Goes Here&amp;summary=Put your summary here" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=390,width=548');return false;">
			<span>LINKEDIN</span>
		   </a>
		   <!--<img class="scroll-up" src="../img/scroll-to-top.gif" alt="Go to top">-->
         </div>
      </div>
      <!-- iframe -->
    
      <!-- map -->
      <div id="mapBox" class="mapBox">
         <button style="margin-bottom: 10px; cursor: pointer;" id="cancel" onclick="destroyLocation()"><i class="fa fa-times"></i> Close</button>
      </div>
      <!-- /map -->

      <div id="particles-js"></div>
      </div>
      <!-- scripts -->
      <!-- oopenlayer maps script -->

      <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.7.0/build/ol.js"></script>
      <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- youtube iframe api -->
      <script src="https://www.youtube.com/iframe_api"></script>
      <!-- app js -->
      <script src="js/app/app.js"></script>
	  <!--<script src="js/app.js"></script>-->
      <!--<script src="js/particles.js"></script>-->
      <!-- stats.js -->
      <!-- application js -->
      <!--<script src="js/lib/stats.js"></script>-->
      <!--<script>
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
      </script>-->
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
             window.scrollTo({top: 0, behavior: 'smooth'}) 
          }  
      </script>
	  <a id="tars-widget-fab" class="tars-fab bounce closed pop_right" data-convid="Nju2fJ" href="https://chatbot.hellotars.com/conv/H1mwgM/?_nav&amp;amp;_end_redirect=0" target="_blank" rel="noopener" tabindex="-1"><div class="convbot-button  " style="background-color : #ac46e3 ; box-shadow : "><img class="convbot convbot-open" src="https://tars-file-upload.s3.amazonaws.com/Nju2fJ/dcf5b19f731653374422e35999a5ba75--Tars-Logo-Gif.gif" alt="Tars-Chatbot" title="ChatBot"></div></a>
   </body>
</html>