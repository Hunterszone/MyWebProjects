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
  <!-- CSS for BACKGROUND -->
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <style type="text/css">
 
body { 
background: url(https://t4.ftcdn.net/jpg/01/33/61/45/240_F_133614514_QSaanlkfBeYfLcatQTe4p3Go4x6hn4b3.jpg) no-repeat center center
fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 
</style>
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <td>
          <a href="user_login.php">
            <div id="milkyway">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="200" width="auto">
                <param name="wmode" value="transparent" />
                <param name="movie" value="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" />
                <param name="quality" value="best" />
                <param name="play" value="true" />
                <embed height="91" src="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" bgcolor="#000000"
                width="115" quality="best" play="true" wmode="transparent" />
              </object>
            </div>
          </a>
        </td>
        <td>
          <div id="clockbox" style="font-family:Jokerman; font-size:120%; text-align:right; color:#D6FF5C"></div>
        </td>
      </tr>
    </table>
    <section class="cd-fixed-background img-3" data-type="slider-item"></section>
    <div id="header">
      <center>
        <h2>
        <a name="http://cdn.flaticon.com/png/256/60583.png" /> 
        <!-- JAVA SCRIPT -->
         
      <!-- JAVA SCRIPT -->
      <script type="text/javascript">
         <!-- Begin
         function popUp(URL) {
         day = new Date();
         id = day.getTime();
         eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=350,height=150,left = 650,top = 375');");
         }
         // End -->
                     
         function bigImg(f) {
             f.style.height = "60px";
             f.style.width = "60px";
         }
         
         function normalImg(f) {
             f.style.height = "50px";
             f.style.width = "50px";
         }
         
           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
           ga('create', 'UA-57030474-1', 'auto');
           ga('send', 'pageview');
         
         
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
         move();
         setInterval(GetClock,1000);
         }
         
      </script>
	  </h2>
      </center>
    </div>
  </body>
</html>
