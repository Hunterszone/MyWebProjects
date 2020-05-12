<?php

		require_once('authentication.php');
		echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME'], ENT_QUOTES, 'UTF-8');
			
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- CSS for BLINKING TEXT HEADER WITH FIRE SHADOW -->
<html>
<link rel="stylesheet" type="text/css" href="styles2.css">

      <!-- CSS -->
	  <style>
		html {
		  scroll-behavior: smooth;
		}
		
		.content {
		  display: flex;
		  justify-content: space-between;
		  max-width: 400px;
		  margin: 0 auto;
		  padding: 10px 0;
		}
      </style>
	  <style type="text/css">
         .blink_text {
         -webkit-animation-name: blinker;
         -webkit-animation-duration: 2.5s;
         -webkit-animation-timing-function: linear;
         -webkit-animation-iteration-count: infinite;
         -moz-animation-name: blinker;
         -moz-animation-duration: 2.5s;
         -moz-animation-timing-function: linear;
         -moz-animation-iteration-count: infinite;
         -ms-animation-name: blinker;
         -ms-animation-duration: 2.5s;
         -ms-animation-timing-function: linear;
         -ms-animation-iteration-count: infinite;
         }
         @-moz-keyframes blinker {  
         0% { opacity: 1.0; }
         50% { opacity: 0.0; }
         100% { opacity: 1.0; }
         }
         @-webkit-keyframes blinker {  
         0% { opacity: 1.0; }
         50% { opacity: 0.0; }
         100% { opacity: 1.0; }
         }
         @-ms-keyframes blinker {  
         0% { opacity: 1.0; }
         50% { opacity: 0.0; }
         100% { opacity: 1.0; }
         }
         h1 {
         text-shadow: 0 0 20px red, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px 
         #451b0e;
         } 
      </style>
      <!-- CSS styles for menu with sections -->
      <style type="text/css">
         ul#menu {
         list-style:none;
         padding: 0;
         position:relative;
         margin:0;
         }
         ul#menu li {
         display: inline;
         }
         ul#menu li a {
         display: inline;
         color: white;
         background-color: black;
         font-weight: bold;
         font-size: 125%;
         padding: 10px 30px;
         text-decoration: none;
         border-radius: 4px 4px 0 0;
         }
         ul#menu li a:hover {
         color: black;
         font-weight: bold;
         font-size: 150%;
         background-color: orange;
         }
      </style>
      <!-- CSS styles for standard search box -->
      <style type="text/css">
         #tfnewsearch{
         padding:20px;
         }
         .tftextinput{
         margin: 0;
         padding: 5px 18px;
         font: Verdana;
         font-size:21px;
         border:1px solid black; 
         border-top-left-radius: 5px 5px;
         border-bottom-left-radius: 5px 5px;
         background-image: url('http://www.knowledgequarter.london/wp-content/uploads/2017/05/books.jpg');
         background-position: 4px 2px;
         background-size: 30px 30px;
         background-repeat: no-repeat;
         text-indent: 23px;
         }
         .tfbutton {
         margin: 0;
         padding: 5px 15px;
         font-size:21px;
         font-weight: bold;
         outline: none;
         cursor: pointer;
         text-align: center;
         text-decoration: none;
         color: #ffffff;
         border: solid 1px black; 
         background: black;
         background: -webkit-gradient(linear, left top, left bottom, from black), to(black));
         background: -moz-linear-gradient(top, black,  black);
         border-top-right-radius: 5px 5px;
         border-bottom-right-radius: 5px 5px;
         }
         .tfbutton:hover {
         text-decoration: none;
         color: black;
         background: orange;
         background: -webkit-gradient(linear, left top, left bottom, from(orange), to(orange));
         background: -moz-linear-gradient(top,  orange,  orange);
         background: -ms-linear-gradient(top,  orange,  orange);	
         }
         /* Fixes submit button height problem in Firefox */
         .tfbutton::-moz-focus-inner {
         border: 0;
         }
         .tfclear{
         clear:both;
         }
      </style>
      <!-- CSS for LARGER CHECKBOX IN BING SEARCH -->
      <style type="text/css">
         .L1 {
         width: 17px;
         height: 17px;
         }
      </style>
      <!-- CSS for BACKGROUND -->
      <style>
         body { 
         background: url(http://www.knowledgequarter.london/wp-content/uploads/2017/05/books.jpg) no-repeat center center fixed; 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
      </style>
      <style type="text/css">
         .cd-fixed-background .cd-content::after {
         /* phone image on small devices */
         content: '';
         display: block;
         width: 104%;
         padding: 34% 0;
         margin: 2em auto 0;
         }
         html, body {
         height: 100%;
         }
         .cd-fixed-background {
         height: 60%;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center center;
         background-attachment: fixed;
         }
         .cd-fixed-background.img-3 {
         background-image: url("http://www.calgaryherald.com/news/cms/binary/10271025.jpg?size=sw620x65");
         }
      </style>
      <!-- CSS for NAVIGATION PANE -->
      <!--
         <style>
         
         
         #primary_nav_wrap
         {
         	margin-top:15px
         }
         
         #primary_nav_wrap ul
         {
         	list-style:none;
         	position:relative;
         	float:left;
         	margin:0;
         	padding:0
         }
         
         #primary_nav_wrap ul a
         {
         	display:block;
         	color:rgba(0,0,0,0.5);
         	text-decoration:none;
         	font-weight:700;
         	font-size:12px;
         	line-height:32px;
         	padding:0 15px;
         	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
         }
         
         #primary_nav_wrap ul li
         {
         	position:relative;
         	float:left;
         	margin:0;
         	padding:0
         }
         
         #primary_nav_wrap ul li.current-menu-item
         {
         	background:rgba(0,0,0,0.5)
         }
         
         #primary_nav_wrap ul li:hover
         {
         	background:rgba(0,0,0,0.5)
         }
         
         #primary_nav_wrap ul ul
         {
         	display:none;
         	position:absolute;
         	top:100%;
         	left:0;
         	background:rgba(0,0,0,0.5);
         	padding:0
         }
         
         #primary_nav_wrap ul ul li
         {
         	float:none;
         	width:200px
         }
         
         #primary_nav_wrap ul ul a
         {
         	line-height:120%;
         	padding:10px 15px
         }
         
         #primary_nav_wrap ul ul ul
         {
         	top:0;
         	left:100%
         }
         
         #primary_nav_wrap ul li:hover > ul
         {
         	display:block
         }
         
         
         </style>
         
         --->
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <style>
         .TheTextOff{
         color:rgba(255, 255, 255, 0.7);
         font-family:Arial, Helvetica, sans-serif;
         font-size:20px;
         }
         .TheTextOn{
         color:yellow;
         font-family:Arial, Helvetica, sans-serif;
         font-size:22px;
         }
         h10 {
         position: fixed;
         width: 59%;
         }  
      </style>
      <!-- CSS for SOURCES HEADERS -->
      <style type="text/css">
         h888 {
         position: fixed;
         width: 100%;
         }  
      </style>
      <!-- CSS for SCROLL TO TOP -->
      <style>
         #toTop {
         display: block;
         position: fixed;
         bottom: 100px;
         right: 20px;
         opacity: 1;
         display:none;
         cursor: pointer;
         }
      </style>
      <!-- CSS for YELLOW SHADOWS -->
      <style type="text/css">
         h2 {
         text-shadow: 5px 5px 5px yellow;
         }  
      </style>
      <!-- CSS for OUR PARTNERS block -->
      <style type="text/css">
         .slider:after {
         font-size: 140%;
         text-align: center;
         color: white;
         padding-top: 40px;
         padding-left:  50px;
         content: 'exploring' url(http://i.stack.imgur.com/KUdfa.png) 'thumbnails..';
         position:absolute;
         width:100%; height:100%;
         top:0; left:0;
         background:rgba(0,0,0,0.9);
         opacity:0;   
         box-sizing:border-box;
         -moz-box-sizing:border-box; 
         transition: all 0.5s;
         -webkit-transition: all 0.5s;
         -ms-transition: all 0.5s;
         -moz-transition: all 0.5s;
         }
         .slider:hover:after {
         opacity:0.8;
         }
         .slider{
         width: 640px; /*Same as width of the large image*/
         position: relative;
         /*Instead of height we will use padding*/
         padding-top: 320px; /*That helps bring the labels down*/
         margin: 50px auto;
         /*Lets add a shadow*/
         box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.75);
         }
         /*Last thing remaining is to add transitions*/
         .slider>img{
         position: absolute;
         left: 0; top: 0;
         transition: all 0.5s;
         }
         .slider input[name='slide_switch'] {
         display: none;
         }
         .slider label {
         /*Lets add some spacing for the thumbnails*/
         margin: 18px 0 0 18px;
         border: 3px solid #999;
         float: left;
         cursor: pointer;
         transition: all 0.5s;
         /*Default style = low opacity*/
         opacity: 1;
         }
         .slider label img{
         display: block;
         }
         /*Click effects*/
         .slider input[name='slide_switch']:checked+label {
         border-color: #666;
         opacity: 1;
         }
         /*Change opacity*/
         /*Time to work on the main images*/
         .slider input[name='slide_switch'] ~ img {
         opacity: 0;
         transform: scale(1.1);
         }
         /*That hides all main images at a 110% size
         On click the images will be displayed at normal size to complete the effect
         */
         .slider input[name='slide_switch']:checked+label+img {
         opacity: 1;
         transform: scale(1);
         }
         /*Clicking on any thumbnail activates the image related to it*/
      </style>
      <!-- CSS for titles margins -->
      <style type="text/css">
         <!--
            .gap { margin-right: 50px; }
            -->
      </style>
      <style type="text/css">
         <!--
            .gap { margin-right: 50px; }
            -->
      </style>
      <!-- CSS for SHAKEIMAGES -->
      <style>
         .shakeimage {POSITION: relative}
      </style>
      <!-- CSS for FIRE SHADOWS -->
      <style>
         h222 {
         text-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px 
         #451b0e;
         } 
      </style>
      <style type="text/css">
         @-webkit-keyframes pulse_animation {
         0% { -webkit-transform: scale(1); }
         20% { -webkit-transform: scale(1); }
         30% { -webkit-transform: scale(1.08); }
         40% { -webkit-transform: scale(1); }
         60% { -webkit-transform: scale(1); }
         70% { -webkit-transform: scale(1.05); }
         80% { -webkit-transform: scale(1); }
         100% { -webkit-transform: scale(1); }
         }
         .pulse:hover {
         -animation-name: 'pulse_animation';
         -animation-duration: 2500ms;
         -transform-origin:100% 100%;
         -animation-iteration-count: infinite;
         -webkit-animation-name: 'pulse_animation';
         -webkit-animation-duration: 2500ms;
         -webkit-transform-origin:70% 70%;
         -webkit-animation-iteration-count: infinite;
         -moz-animation-name: 'pulse_animation';
         -moz-animation-duration: 2500ms;
         -moz-transform-origin:70% 70%;
         -moz-animation-iteration-count: infinite;
         -ms-animation-name: 'pulse_animation';
         -ms-animation-duration: 2500ms;
         -ms-transform-origin:70% 70%;
         -ms-animation-iteration-count: infinite;
         }
      </style>
      <!-- CSS for SOCIAL NETWORKS BUTTONS -->
      <style>
         .social {
         position: relative;
         width: 50%;
         top: 50%;
         text-align: center;
         transform: translateY(0%);
         box-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px #451b0e;
         background-color: rgba(0, 0, 0, 0.5)
         }
         .social .link {
         display: inline-block;
         vertical-align: middle;
         position: relative;
         width: 75px;
         height: 75px;
         border-radius: 50%;
         background-clip: content-box;  
         padding: -20px;
         transition: .5s;
         color: #D7D0BE;
         margin-left: 30px;
         margin-right: 30px;
         text-shadow:
         0 -20px 0 rgba(0, 0, 0, 0.2),
         0 1px 0 rgba(255, 255, 255, 0.2);
         font-size: 70px;
         }
         .social .link span {
         display: block;
         position: absolute;
         text-align: center;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         }
         .social .link:hover {
         color: black;
         margin-left: 5px;
         transform: translateX(10px) rotate(360deg);
         }
         .social .link.twitter:hover {
         background-color: white;
         }
         .social .link.facebook:hover {
         background-color: white;
         }
      </style>
      <!-- CSS for SOME FIXES -->
      <style>
         h20 {
         position: fixed;
         width: 80%;
         }  
      </style>
      <style>
         h30 {
         position: fixed;
         width: 150%;
         }  
      </style>
      <!-- CSS for BOXES OF SECRETS -->
      <style type="text/css">
         body {
         color: yellow;
         font: 600 14px/24px "algerian", Verdana;
         }
         .box {
         margin: 1.5em;
         background: rgba(0,0,0,0.5);
         border-radius: 6px;
         cursor: pointer;
         height: 170px;
         line-height: 170px;
         text-align: center;
         -webkit-transition-property: background;
         -moz-transition-property: background;
         -o-transition-property: background;
         transition-property: background;
         -webkit-transition-duration: 0.3s;
         -moz-transition-duration: 0.3s;
         -o-transition-duration: 0.3s; 
         transition-duration: 0.3s; 
         -webkit-transition: 1s ease-in-out;
         -moz-transition: 1s ease-in-out;
         -o-transition: 1s ease-in-out;
         transition: 1s ease-in-out; 
         -webkit-box-shadow: 19px 21px 41px 0px rgba(0,0,0,0.69);
         -moz-box-shadow: 19px 21px 41px 0px rgba(0,0,0,0.69);
         box-shadow: 19px 21px 41px 0px rgba(0,0,0,0.69);
         border-radius: 34px 34px 34px 34px;
         -moz-border-radius: 34px 34px 34px 34px;
         -webkit-border-radius: 34px 34px 34px 34px;
         border: 6px solid rgba(255, 255, 255, 0.7);
         width: 170px;
         }
         .box:hover {
         background: rgba(255, 255, 255, 0.3);
         color: black;
         }
         /*.div img: not(.tfclear) {
         transition: all 2s ease-in-out;
         }
         div:hover {
         transform: rotate(360deg);
         }
      </style>
      <!-- CSS for FOOTER BAR -->
      <style type="text/css">
         img {
         opacity: 0.6;
         filter: alpha(opacity=40);
         }
         img:hover {
         opacity: 1;
         filter: alpha(opacity=40);
         }
      </style>
      <!-- CSS for LOADING BAR -->
      <style>
         #myProgress {
         width: 100%;
         background-color: rgba(0,0,0,0.5);
         height: 80px;
         }
         #myBar {
         width: 1%;
         height: 80px;
         background-image: linear-gradient(to right, black 0%,white 180%), url('./faces.gif');
         background-blend-mode: color-dodge;
         background-color: rgba(0,0,0,0.5);
         }
      </style>
      <!-- CSS for SHARE BUTTONS -->
      <style type='text/css'>
         /*<![CDATA[*/
            @charset "utf-8";
            /* CSS Document */
            /* ---------- ENTYPO ---------- *//* ---------- Digital Hub Inc : http://www.digitalhubinc.com/---------- */
            /* ---------- http://weloveiconfonts.com/ ---------- */
            @import url(http://weloveiconfonts.com/api/?family=entypo);
            [class*="entypo-"]:before { font-family: 'entypo', sans-serif;}
            /* ---------- GENERAL ---------- */
            #social-sidebar a { text-decoration: none; }
            #social-sidebar ul,#social-sidebar ul li,#social-sidebar ul li a {
            	list-style: none;
            	margin: 0;
            	padding: 0;
            }
             
            /* ---------- Social Sidebar ---------- */
            #social-sidebar {
                left: 0;z-index:999;
            	margin-top: -220px; /* (li * a:width) / -2 */
            	position: fixed;
            	top: 50%;
            }
            #social-sidebar ul li:first-child a { border-radius: 0 5px 0 0; }
            #social-sidebar ul li:last-child a { border-radius: 0 0 5px 0; }
            #social-sidebar ul li a {
            	background: rgba(0,0,0,0.5);
            	color: #fff;
            	display: block;
            	height: 100px;
            	font-size: 30px;
            	line-height: 100px;
            	position: relative;
            	text-align: center;
            	width: 70px;
            }
            #social-sidebar ul li a:hover span {
            	left: 130%;
            	opacity: 1;
            }
            #social-sidebar ul li a span {
            	border-radius: 3px;
            	line-height: 24px;
            	left: -100%;
            	margin-top: -16px;
            	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            	filter: alpha(opacity=0);
            	opacity: 0;
            	padding: 4px 8px;
            	position: absolute;
            	-webkit-transition: opacity .3s, left .4s;
            	-moz-transition: opacity .3s, left .4s;
            	-ms-transition: opacity .3s, left .4s;
            	-o-transition: opacity .3s, left .4s;
            	transition: opacity .3s, left .4s;
            	top: 50%;
            	z-index: -1;
            }
            #social-sidebar ul li a span:before {
            	content: "";
            	display: block;
            	height: 8px;
            	left: -4px;
            	margin-top: -4px;
            	position: absolute;
            	top: 50%;
            	-webkit-transform: rotate(45deg);
            	-moz-transform: rotate(45deg);
            	-ms-transform: rotate(45deg);
            	-o-transform: rotate(45deg);
            	transform: rotate(45deg);
            	width: 8px;
            	z-index: -2;
            }
            #social-sidebar ul li a[class*="twitter"]:hover,
            #social-sidebar ul li a[class*="twitter"] span,
            #social-sidebar ul li a[class*="twitter"] span:before { background: #6CDFEA; }
            #social-sidebar ul li a[class*="gplus"]:hover,
            #social-sidebar ul li a[class*="gplus"] span,
            #social-sidebar ul li a[class*="gplus"] span:before { background: #E34429; }
            #social-sidebar ul li a[class*="linkedin"]:hover,
            #social-sidebar ul li a[class*="linkedin"] span,
            #social-sidebar ul li a[class*="linkedin"] span:before { background: #0077B5; }
            #social-sidebar ul li a[class*="facebook"]:hover,
            #social-sidebar ul li a[class*="facebook"] span,
            #social-sidebar ul li a[class*="facebook"] span:before { background: #234999; }
            /*]]>
      </style>
      <style type="text/css">
         body {
         overflow-x:hidden;
         }
      </style>

<table>
 
<tr>



<td>

<div id="milkyway">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" height="200" width="auto">
<param name="wmode" value="transparent">
<param name="movie" value="http://parallelreality-bg.com/templates/reality/swf/milkyway.swf">
<param name="quality" value="best">
<param name="play" value="true">
<embed height="91" pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://parallelreality-bg.com/templates/reality/swf/milkyway.swf" type="application/x-shockwave-flash" bgcolor="#000000" width="115" quality="best" play="true" wmode="transparent">
 
</object>
</div>
 
</td>


 
<td>
  

<div id="clockbox" style="font-family:Jokerman; font-size:120%; text-align:right; color:#D6FF5C"></div>


</td>

 
</tr>
</table>


<head>

<script>

var t1=0;
window.onscroll = scroll1;

function scroll1(){
             var toTop = document.getElementById('toTop');
             window.scrollY>400 ? toTop.style.display='Block' :  toTop.style.display='none';
         	if(window.scrollY>1600){
         		
         		toTop.style.display='none';
         	}
         }

</script>
<!-- HTML for ANIMATION, CLOCK, HEADING AND SEARCH ENGINE -->



<div id="header"><h1><center><b><font size="8"><font face="algerian"><i><span class="blink_text">WEB <font color="black">PROGRAMMING</FONT> WORLD</span><i></font></font></b></center></h1></p></div>
 
 
<p><br><center><b><i><font face="algerian"><font size="6"><font color="white">YOUR PLACE <font color="yellow">FOR</font> WEB 
 
DEVELOPMENT <font 
 
color="yellow">&</font> WEB DESIGN</font></font></font></font></i></b></center></br></p>
<a href="#"><img id="toTop" src="http://rs300.pbsrc.com/albums/nn22/montira_bucket/arrow/arrow-3.gif~c200" title="Back to top" style="width: 70px; height: 70px;"></a>  
  
<br><center><ul id="menu">
  
  <li><a href="quizes.php" target="_blank">Go to quiz</a></li>
  <li><a href="contact_form.php" target="_blank">Contact us</a></li>
  <li><a href="member.php" target="_blank">My Profile</a></li>
  <li><a href="forgotPass.php" target="_blank">Reset pass</a></li>
  <li><a href="index.php">Logout</a></li>
  
</ul></center></br>  


<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />

<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
 
<body>

<center>
 
<div ng-app="">
 
 
	<!-- HTML for SEARCH BAR -->
	<div id="tfheader">
		<form method="get" action="http://www.google.com/search" target="_blank">
		        <input type="search" ng-model="name" class="tftextinput" name="q" id="s" placeholder="Google results" size="56" maxlength="120"><input type="submit" value="Search" title="Google search" class="tfbutton" id="searchsubmit" class="searchsubmit" /></b></font><div><table 
 
border="0" cellpadding="5"><tr><td><input type="checkbox" class="L1" name="sitesearch" value="bing.com" unchecked /><font size="5"> Bing results</font></td></tr></table></div>
		</form>
	<div class="tfclear"></div>
	</div>
 
 
<h1>{{name}}</h1>
 
</div>
 
</center>
 
 
<br><br>
 
 
 
</div>


</head> 
 
<section class="cd-fixed-background img-3" data-type="slider-item"></section>
 
 
<div id="header"><h2><center>
 
 
<p><br><center><b><font color="black"><font face="algerian"><i><font size="7"><u>OUR 
PARTNERS:</u></font></font></i></font></font></b></center></p></h2></div>
 
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 

 
 
<div class="slider" style="cursor: hand;">
	<input type="radio" name="slide_switch" id="id1" checked="checked" onclick="window.open('https://nodejs.org/')" />
	<label for="id1">
		<img src="http://blog.rivaliq.com/wp-content/uploads/2014/01/nodejs_0.png" width="100" height="51.9" />
	</label>
	<img src="http://blog.rivaliq.com/wp-content/uploads/2014/01/nodejs_0.png" width="640" height="320" />
 
	<!--Lets show the second image by default on page load-->
	<input type="radio" name="slide_switch" id="id2" onclick="window.open('https://angularjs.org/')" />
	<label for="id2">
		<img src="http://supnig.com/media/pictures/angularjs.png" width="100" height="51.9"/>
	</label>
	<img src="http://supnig.com/media/pictures/angularjs.png" width="640" height="320" />
	
	<input type="radio" name="slide_switch" id="id3" onclick="window.open('https://wix.com/')" />
	<label for="id3">
		<img src="http://streetfightmagcom.b.presscdn.com/wp-content/uploads/9bc178_9737c4bcb5cd54861daa2377c139d60b.jpg" width="100" height="51.9" />
	</label>
	<img src="http://streetfightmagcom.b.presscdn.com/wp-content/uploads/9bc178_9737c4bcb5cd54861daa2377c139d60b.jpg" width="640" height="320" />
	
	<input type="radio" name="slide_switch" id="id4" onclick="window.open('http://w3schools.com/')" />
	<label for="id4">
		<img src="http://mostlywebsites.net/wp-content/uploads/w3schools-logo.jpg" width="100" height="51.9" />
	</label>
	<img src="http://mostlywebsites.net/wp-content/uploads/w3schools-logo.jpg" width="640" height="320" />
	
	<input type="radio" name="slide_switch" id="id5" onclick="window.open('https://weebly.com/')" />
	<label for="id5">
		<img src="http://www.spiderwebconnections.com/wp-content/uploads/2012/11/weebly.jpg" width="100" height="51.9" />
	</label>
	<img src="http://www.spiderwebconnections.com/wp-content/uploads/2012/11/weebly.jpg" width="640" height="320" />
 
</div>
 
 
 
</center>
 
 
<br><br><div id="header"><h2><center>
 
 
<p><br><br><center><b><font color="black"><font face="algerian"><i><font size="7"><u>BAD 
STREAM:</u></font></font></i></font></font></b></br></br></p>

</center></h2></div>
 
<p style="background-color: rgba(0,0,0,0.5)"><marquee behavior="scroll" direction="left" scrollamount="9" 
 
onmouseover="this.stop();" onmouseout="this.start();"><font size="5"><I><font 
 
color="white"><b><font face="verdana"><br>******To improve your experience with our portal, please update to the <a href=http://www.webdevelopersnotes.com/articles/latest-browser-
 
versions.php
 
class="link facebook" title="Click to update" target="_blank"><B><font color="#00FFFF">LATEST</font></B></a> stable version of 
 
your browser and to the <a href=https://get.adobe.com/flashplayer/?fpchrome class="link facebook" title="Click to update" target="_blank"><B><font color="#00FFFF">LATEST</font></B></a> version of your Flash Player.******Listen to the Party Vibe Online Radio, as you <a href="#http://cdn.flaticon.com/png/256/60583.png"><B><font color="#00FFFF">SCROLL</font></B></a> down to the bottom 
 
and click the player icon.******Become our partner! Click

<a href=https://konstantindrenski.wordpress.com/author/hunterszone/? target="_blank"
 
><B><font color="#00FFFF"> HERE</font></B></a> to find out how easy it is.
</font></p></b></f></I></marquee></p>
 
 
</center><br><br>

 
<center><p><br><br><br><table style="width:90%">
<tr> 
  
 
<p><br><center><b><font color="black"><font face="algerian"><i><font size="7"><h222>FOLLOW US:</h222></i></font></font></b></center>
 
<br><br><br><br>
<table style="width:144.6%">
<tr> 
 
 
 
<br>
 
 
 
<div class="social">
 
 
 
<a href="https://twitter.com/PageOnlineXS" class="link facebook" target="_blank"><span class="fa fa-facebook"><img 
 
src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/facebook-icon.png" title="Facebook" alt="HTML5 Icon" style="width:70px;height:70px"></span></a>
 
 
  <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><span class="fa fa-cover"><img 
 
src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/twitter-2-icon.png" title="Twitter" alt="HTML5 Icon" style="width:70px;height:70px"></span></a>
 
 
  <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><span class="fa fa-cover"><img 
 
src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/linkedin-icon.png" title="LinkedIn" alt="HTML5 Icon" 
 
style="width:70px;height:70px"></span></a>
 
 
 <a href="https://www.youtube.com/embed/36mitS3tpIo" class="link twitter" target="_blank"><span class="fa fa-cover"><img 
 
src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/youtube-icon.png" 
 
title="YouTube" alt="HTML5 Icon" style="width:70px;height:70px"></span></a>
 
 
 <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_blank"><span class="fa fa-cover"><img 
 
src="http://icons.iconarchive.com/icons/uiconstock/flatin-social/256/google-plus-icon.png" title="Google +" alt="HTML5 Icon" 
 
style="width:70px;height:70px"></span></a>
 
 
</div>

<p><br><table style="width:98.5%">
<tr>
<td>

<center>

<a href="javascript:window.print()"><img src="http://icons.iconarchive.com/icons/avosoft/warm-toolbar/256/print-icon.png" alt="print this page" id="print-button" title="Print" style="width:40px;height:40px" 
 
/></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
 
<a href="javascript:popUp('http://www.partyviberadio.com/player/embed-auto/reggae.html')"><img src="http://icons.iconarchive.com/icons/ncrow/mega-pack-2/256/Windows-Media-Player-12-icon.png" title="Online radio" 
 
style="width:40px;height:40px" /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 
 
<a href="#"><img src="http://icons.iconarchive.com/icons/icojam/blue-bits/256/arrow-up-icon.png" title="Back to top" style="width:40px;height:40px"/></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
 
<a rel="license" href="http://creativecommons.org/licenses/by/3.0/" target="_blank"><img src="http://icons.iconarchive.com/icons/graphicloads/seo-services/256/creative-icon.png" title="Creative Commons" 
 
style="width:40px;height:40px" /></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
 
 
<a href="http://www.smashingmagazine.com/feed/" target="_blank"><img src="http://icons.iconarchive.com/icons/graphics-vibe/simple-rounded-social/256/rss-feed-icon.png" alt="[Valid RSS]" 
 
title="RSS feeds" style="width:40px;height:40px" /></a>
 
</center>
 
</td></tr>
</table></br></p>



<br><center><font size="3"><font color="white"><b><i>Copyright © 2015 THAT BAD DESIGN. All rights reserved.</i></b></font></font></center>
 
 
 
<div id='social-sidebar'>
			<ul>
				 <li>
					<a class='entypo-facebook' target='_blank' title="S H A R E!" onclick="void window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 

'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void(0)">
						<span>FACEBOOK</span>
					</a>
				</li>
				<li>
					<a class='entypo-twitter' target='_blank' title="S H A R E!" a onclick="void window.open('https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.example.com%2F&original_referer=.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325'); return false;" target="_parent" href="javascript: void

(0)">
						<span>TWITTER</span>
					</a>
				</li>
				<li>
					<a class='entypo-gplus' target='_blank' title="S H A R E!" href="https://plus.google.com/share?url={URL}" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=325,width=548');return false;">
						<span>GOOGLE+</span>
					</a>
				</li>
				<li>
					<a class='entypo-linkedin' target='_blank' title="S H A R E!" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://YourContentsURLGoesHere.com&amp;title=Article Tile Goes Here&amp;summary=Put your summary here" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=390,width=548');return false;">
						<span>LINKEDIN</span>
					</a>
				</li>
 
			</ul>
		</div>



<a name="http://cdn.flaticon.com/png/256/60583.png" /> 


<!-- JAVA SCRIPT -->

<script type="text/javascript">

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=350,height=150,left = 650,top = 375');");
}
// End -->

</script>


<script>
function bigImg(f) {
    f.style.height = "60px";
    f.style.width = "60px";
}

function normalImg(f) {
    f.style.height = "50px";
    f.style.width = "50px";
}
</script>

 

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57030474-1', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript">

tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

     if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nyear<1000) nyear+=1900;
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}

</script>

</body>


</html>
