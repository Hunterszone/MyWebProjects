<?php
error_reporting(0);

//      CONFIGURATION
$title = "HTML Quiz";
$address = "../../auth/user_login.php";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Which of the following attribute triggers event when an element is being dragged over a valid drop target?",
   1 => "ondragleave",
   2 => "ondrag",
   3 => "ondragover",
   4 => "ondragstart",
   6 => 3
),
2 => array(
   0 => "Which value of Socket.readyState atribute of WebSocket indicates that the connection has not yet been established?",
   1 => "A. 0",
   2 => "B. 1",
   3 => "C. 2",
   4 => "D. 3",
   6 => 1
),
3 => array(
   0 => "When a session storage data gets deleted in HTML5?",
   1 => "The Session Storage Data would be deleted by the browsers immediately after the session gets terminated.",
   2 => "If you want to clear all settings, you need to call localStorage.clear() method.",
   3 => "Both of the above.",
   4 => "None of the above.",
   6 => 3
),
4 => array(
   0 => "Which of the following attribute specifies whether or not a user is allowed to drag an element?",
   1 => "drag",
   2 => "content",
   3 => "context",
   4 => "draggable",
   6 => 4
),
5 => array(
   0 => "Can you use SVG tags directly in HTML5 without any plugin?",
   1 => "true",
   2 => "false",
   6 => 1
),
6 => array(
   0 => "Which of the following tag represents a piece of content that is only slightly related to the rest of the page in HTML5?",
   1 => "section",
   2 => "article",
   3 => "aside",
   4 => "header",
   6 => 3
),
7 => array(
   0 => "Which of the following method returns a geolocation object in HTML5?",
   1 => "navigator.geolocation",
   2 => "browser.geolocation",
   3 => "API.geolocation",
   4 => "None of the above.",
   6 => 1
),
8 => array(
   0 => "Which of the following is correct Content-type header that a server side script should send for SSE in HTML5?",
   1 => "Content-Type: text/event-stream",
   2 => "Content-Type: text/application-stream",
   3 => "Content-Type: text/data-stream",
   4 => "None of the above.",
   6 => 1
),
9 => array(
   0 => "Which of the following is correct about Server Side Events(SSE) in HTML5?",
   1 => "To use Server-Sent Events in a web application, you would need to add an <eventsource> element to the document.",
   2 => "The src attribute of <eventsource> element should point to an URL which should provide a persistent HTTP connection that sends a data stream containing the events.",
   3 => "The URL would point to a PHP, PERL or any Python script which would take care of sending event data consistently.",
   4 => "All of the above.",
   6 => 4
),
10 => array(
   0 => "Which of the following attribute triggers events when the document has change?",
   1 => "onhaschange",
   2 => "oninput",
   3 => "onchange",
   4 => "onloadeddata",
   6 => 1
),
);

$max=10;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR>Percentaje of correct responses: <?php print $percentaje; ?> %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>
<BR>     <input type=text name=response size=8>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
<p><A HREF="<?php print $address; ?>">Home Page</a>
<TR><TD ALIGN=Center>

<p><a href="html_quiz3.php">Start Third Quiz</a>
        
        </TD></TR>
<?php } ?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
<STYLE TYPE="text/css">
 
body { 
background: url(http://7oom.ru/powerpoint/fon-dlya-prezentacii-12.jpg?ver\u003d3.0) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 
</style> 