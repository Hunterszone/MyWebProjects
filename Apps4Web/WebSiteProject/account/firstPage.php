<html>

<STYLE TYPE="text/css">

*{ margin: 0; padding: 0;}

body {
	/*To hide the horizontal scroller appearing during the animation*/
	overflow: hidden;
}

#clouds{
	padding: 70px 0;
	background: #909090;
	background: -webkit-linear-gradient(top, #909090  0%, #fff 100%);
	background: -linear-gradient(top, #909090  0%, #fff 100%);
	background: -moz-linear-gradient(top, #909090  0%, #fff 100%);
}

/*Time to finalise the cloud shape*/
.cloud {
	width: 200px; height: 60px;
	background: #fff;
	
	border-radius: 200px;
	-moz-border-radius: 200px;
	-webkit-border-radius: 200px;
	
	position: relative; 
}

.cloud:before, .cloud:after {
	content: '';
	position: absolute; 
	background: #fff;
	width: 100px; height: 80px;
	position: absolute; top: -15px; left: 10px;
	
	border-radius: 100px;
	-moz-border-radius: 100px;
	-webkit-border-radius: 100px;
	
	-webkit-transform: rotate(30deg);
	transform: rotate(30deg);
	-moz-transform: rotate(30deg);
}

.cloud:after {
	width: 120px; height: 120px;
	top: -55px; left: auto; right: 15px;
}

/*Time to animate*/


.x1 {

	-webkit-transform: scale(0.6);
	-moz-transform: scale(0.6);
	transform: scale(0.6);
	opacity: 0.6; /*opacity proportional to the size*/

	-webkit-animation: moveclouds 25s linear infinite;
	-moz-animation: moveclouds 25s linear infinite;
	-o-animation: moveclouds 25s linear infinite;
}

/*variable speed, opacity, and position of clouds for realistic effect*/
.x2 {
	left: 600px;
	
	-webkit-transform: scale(0.6);
	-moz-transform: scale(0.6);
	transform: scale(0.6);
	opacity: 0.6; /*opacity proportional to the size*/
	
	/*Speed will also be proportional to the size and opacity*/
	/*More the speed. Less the time in 's' = seconds*/
	-webkit-animation: moveclouds 26s linear infinite;
	-moz-animation: moveclouds 26s linear infinite;
	-o-animation: moveclouds 26s linear infinite;
}

.x3 {
	left: -250px; top: -200px;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0.3; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 34s linear infinite;
	-moz-animation: moveclouds 34s linear infinite;
	-o-animation: moveclouds 34s linear infinite;
}

.x4 {
	left: 470px; top: -250px;
	
	-webkit-transform: scale(0.75);
	-moz-transform: scale(0.75);
	transform: scale(0.75);
	opacity: 0.4; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 26s linear infinite;
	-moz-animation: moveclouds 26s linear infinite;
	-o-animation: moveclouds 26s linear infinite;
}

.x5 {
	left: 650px; top: -230px;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0.8; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 34s linear infinite;
	-moz-animation: moveclouds 34s linear infinite;
	-o-animation: moveclouds 34s linear infinite;
}



.x6 {
	left: -800px; top: -250px;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0.5; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 32s linear infinite;
	-moz-animation: moveclouds 32s linear infinite;
	-o-animation: moveclouds 32s linear infinite;
}



.x7 {
	left: -560px; top: -275px;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0.3; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 32s linear infinite;
	-moz-animation: moveclouds 32s linear infinite;
	-o-animation: moveclouds 32s linear infinite;
}



.x8 {
	left: -100px; top: -275px;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0.3; /*opacity proportional to the size*/
	
	-webkit-animation: moveclouds 32s linear infinite;
	-moz-animation: moveclouds 32s linear infinite;
	-o-animation: moveclouds 32s linear infinite;
}






@-webkit-keyframes moveclouds {
	0% {margin-left: 1000px;}
	100% {margin-left: -1000px;}
}
@-moz-keyframes moveclouds {
	0% {margin-left: 1000px;}
	100% {margin-left: -1000px;}
}
@-o-keyframes moveclouds {
	0% {margin-left: 1000px;}
	100% {margin-left: -1000px;}
}



</STYLE>





<div id="clouds">
	<div class="cloud x1">




<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>


</div>
	
	<div class="cloud x2">




<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>

</div>


	<div class="cloud x3">


<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>


</div>
	<div class="cloud x4">


<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>


</div>
	<div class="cloud x5">


<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>

</div>


<div class="cloud x6">


<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>

</div>

<center>


    <a HREF="index.php." TARGET="_blank" style="cursor: pointer;"><font face="algerian"><font size="10"><font color="#484848">Welcome to our web development world</font></font></font></a>
        </center>

<div class="cloud x7">




<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>


</div>




<div class="cloud x8">




<marquee style="z-index:2;position:absolute;left:137;top:10;font-family:Cursive;font-size:36pt;color:white;height:58;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;top:41;font-family:Cursive;font-size:36pt;color:white;height:118;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:189;top:111;font-family:Cursive;font-size:36pt;color:white;height:40;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:281;top:63;font-family:Cursive;font-size:36pt;color:white;height:266;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:10;top:106;font-family:Cursive;font-size:36pt;color:white;height:163;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:266;top:41;font-family:Cursive;font-size:36pt;color:white;height:249;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:43;top:83;font-family:Cursive;font-size:36pt;color:white;height:271;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:119;top:17;font-family:Cursive;font-size:36pt;color:white;height:191;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:69;top:16;font-family:Cursive;font-size:36pt;color:white;height:489;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:81;top:46;font-family:Cursive;font-size:36pt;color:white;height:393;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:31;top:77;font-family:Cursive;font-size:36pt;color:white;height:441;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:260;top:17;font-family:Cursive;font-size:36pt;color:white;height:62;"scrollamount="3" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:105;top:15;font-family:Cursive;font-size:36pt;color:white;height:23;"scrollamount="2" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:139;top:105;font-family:Cursive;font-size:36pt;color:white;height:228;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:289;top:6;font-family:Cursive;font-size:36pt;color:white;height:427;"scrollamount="6" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:292;top:68;font-family:Cursive;font-size:36pt;color:white;height:224;"scrollamount="5" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:108;top:60;font-family:Cursive;font-size:36pt;color:white;height:219;"direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:175;top:38;font-family:Cursive;font-size:36pt;color:white;height:54;"scrollamount="7" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:296;top:112;font-family:Cursive;font-size:36pt;color:white;height:469;"scrollamount="4" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:240;top:72;font-family:Cursive;font-size:36pt;color:white;height:132;"scrollamount="1" direction="down">.</marquee><marquee style="z-index:2;position:absolute;left:213;top:21;font-family:Cursive;font-size:36pt;color:white;height:348;"scrollamount="3" direction="down">.</marquee><span style="position:absolute;top:400px"></span>


</div>

</html>
