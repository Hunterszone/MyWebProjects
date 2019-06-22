<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- CSS for BLINKING TEXT HEADER WITH FIRE SHADOW -->
<html>
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
    text-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px 

#451b0e;

} 

 </style>


<!-- CSS styles for menu with sections -->

<style type="text/css">

ul#menu {
    padding: 0;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
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





<!-- CSS for LARGER CHECKBOX IN BING SEARCH -->


<style type="text/css">

.L1 {
width: 17px;
height: 17px;
}


</style> 





<!-- CSS for BACKGROUND -->

<STYLE TYPE="text/css">
 
body { 
background: url(https://t4.ftcdn.net/jpg/01/33/61/45/240_F_133614514_QSaanlkfBeYfLcatQTe4p3Go4x6hn4b3.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 
</style> 
 
 

 



 
 
<!-- CSS for NAVIGATION PANE -->


<STYLE TYPE="text/css">




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


</STYLE>
 
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

<STYLE TYPE="text/css">


h222 {
    text-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px 

#451b0e;

} 


</STYLE>



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

<STYLE TYPE="text/css">


.social {
  position: relative;
  width: 39%;
  top: 50%;
  text-align: center;
  transform: translateY(0%);
  box-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px 	
	
#451b0e;

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
  padding: -10px;
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

</STYLE>





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





<!-- CSS for SHARE BUTTONS -->

<style type='text/css'>
/*<![CDATA[*/
/*@charset "utf-8";
/* CSS Document */
/* ---------- ENTYPO ---------- *//* ---------- Digital Hub Inc : http://www.digitalhubinc.com/---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */
/*@import url(http://weloveiconfonts.com/api/?family=entypo);
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
/*]]>*/
</style> 



﻿<html>


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


<TR><TD ALIGN=Center>


<p><font size = '7'><a href="index.php" target="_blank">Home page</a></font>

 
        
        </TD></TR>
      	
 
</div>
 
</center></body>
 
 
<br><br>
 
 
 
</div>


</head> 



<body>

 
<section class="cd-fixed-background img-3" data-type="slider-item"></section>
 
 

<body>
 
<div id="header"><h2><center>

 
 
</center>
 
 

 




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
