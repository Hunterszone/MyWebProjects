            function popUp(URL) {
            day = new Date();
            id = day.getTime();
            eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=350,height=150,left = 650,top = 375');");
            }

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
            