<?php
   require_once('./authentication.php');
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
   <head>
      <!-- CSS -->
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../css/user_login.css">
      <script>
         var t1=0;
         window.onscroll = scroll1;
         
         function scroll1(){
                      var toTop = document.getElementById('toTop');
                      window.scrollY>400 ? toTop.style.display='Block' :  toTop.style.display='none';
                  	if(window.scrollY>1000){            		
                  		toTop.style.display='none';
                  	}
                  }
         
      </script>
   </head>
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
            <div id="clockbox" style="font-family:Jokerman; font-size:120%; text-align:right; color:#D6FF5C"></div>
         </td>
      </tr>
   </table>
   <!-- HTML for ANIMATION, CLOCK, HEADING AND SEARCH ENGINE -->
   <div id="header">
      <h1>
         <center><b><font size="8"><font face="algerian"><i><span class="blink_text">WEB <font color="black">PROGRAMMING</FONT> WORLD</span><i></font></font></b></center>
      </h1>
      </p>
   </div>
   <p><br>
   <center><b><i><font face="algerian"><font size="6"><font color="white">YOUR PLACE <font color="yellow">FOR</font> WEB 
      DEVELOPMENT <font 
         color="yellow">&</font> WEB DESIGN</font></font></font></font></i></b>
   </center>
   </br></p>
   <a href="#"><img id="toTop" src="../gallery/scroll-to-top.gif" title="Back to top" style="width: 70px; height: 70px;"></a>
   <br>
   <center>
      <button class="nicetoo" onclick="location.href='../quizes/quizes.php'"><i class="fa fa-book"></i> Start quiz</button>
      <button class="nicetoo" onclick=window.open("../account/welcome_message.php")><i class="fa fa-home"></i> My Profile</button>
      <div class="dropdown">
         <button class="dropbtn"><i class="fa fa-upload"></i> Upload</button>
         <div class="dropdown-content">
            <input type="button" id="but1" class="nicetoo" onclick="location.href='../file_upload.html'" value="Files">
            <input type="button" id="but1" class="nicetoo" onclick="location.href='../avatar_upload.html'" value="Avatar">
         </div>
      </div>
      <button class="nicetoo" onclick="location.href='./forgotPass.php'"><i class="fa fa-unlock"></i> New pass</button>
      <div class="dropdown">
         <button class="dropbtn"><i class="fa fa-comments"></i> Contact us</button>
         <div class="dropdown-content">
            <input type="button" id="but1" class="nicetoo" onclick=window.open("../forms/contact_form.php") value="Feedback">
            <input type="button" id="but1" class="nicetoo" onclick=window.open("../phpBB3/index.php") value="Forum">
         </div>
      </div>
      <button class="nicetoo" onclick="location.href='../index.php'"><i class="fa fa-sign-out"></i> Logout</button>
   </center>
   </br>  
   <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <body>
      <center>
         <div ng-app="">
            <!-- HTML for SEARCH BAR -->
            <div id="tfheader">
               <form method="get" action="http://www.google.com/search" target="_blank">
                  <input type="search" ng-model="name" class="tftextinput" name="q" id="s" placeholder="Google results" size="56" maxlength="120"><input type="submit" value="Search" title="Google search" class="tfbutton" id="searchsubmit" class="searchsubmit" /></b></font>
                  <div>
                     <table 
                        border="0" cellpadding="5">
                        <tr>
                           <td><input type="checkbox" class="L1" name="sitesearch" value="bing.com" unchecked /><font size="5"> Bing results</font></td>
                        </tr>
                     </table>
                  </div>
               </form>
               <div class="tfclear"></div>
            </div>
            <h1>{{name}}</h1>
         </div>
      </center>
      </div>
      </br>
      <!--<div id="header">
         <h2>
              <center><b><font color="black"><font face="algerian"><i><font size="7"><u>OUR 
                  PARTNERS:</u></font></font></i></font></font></b>
               </center>
         </h2>
         </div>-->
      </br>
      <div id="header">
         <h2>
            <center>
               <p><br><br>
               <center><b><font color="black"><font face="algerian"><i><font size="7"><u>BAD 
                  STREAM:</u></font></font></i></font></font></b></br></br></p>
               </center>
         </h2>
      </div>
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
      <center>
      <p><br><br><br>
      <table style="width:90%">
      <tr>
         <center>
            <b>
               <font color="black">
               <font face="algerian">
                  <i>
                     <font size="7">
                        <h222>FOLLOW US:</h222>
                  </i>
                  </font>
               </font>
            </b>
         </center>
         <table style="width:144.6%">
      <tr>
         <br>
         <div class="social">
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
         </div>
         <p><br>
         <table style="width:98.5%">
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
               </td>
            </tr>
         </table>
         </br></p>
         <br>
         <center><font size="3"><font color="white"><b><i>Copyright © 2015 THAT BAD DESIGN. All rights reserved.</i></b></font></font></center>
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
            
            function move() {
            var elem = document.getElementById("myBar");   
            var width = 0;
            var id = setInterval(frame, 50);
            function frame() {
            if (width >= 100) {
            clearInterval(id);      
            document.getElementById("myBar").style.display="none";
            document.getElementById("myP").style.display="none";
            } else {
            width++; 
            elem.style.width = width + '%'; 
            var num = width * 1 / 1;
            num = num.toFixed(0)
            document.getElementById("demo").innerHTML = num;
            }
            }
            }
            
            window.onload=function(){
            GetClock();
            move();
            setInterval(GetClock,1000);
            }
            
         </script>
   </body>
</html>