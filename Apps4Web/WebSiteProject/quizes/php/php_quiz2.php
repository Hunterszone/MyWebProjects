<?php
error_reporting(0);

// #########################################
// In this page you will find the code required to create multiple choice exams
// Copy this code and save it to a file name "whatever.php"
// The file name must finish with ".php"
// Save the file to a PHP unable server.
// Please consider adding a link to this service:
//      http://www.phptutorial.info/scripts/multiple_choice/
//
// A website was created based in this script at which allows
//   to create and maintain the test online at:
//      http://www.testak.org
//
// #########################################
//      CONFIGURATION
$title = "PHP Hard  Quiz";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Which of the following array represents an array with a numeric index?",
   1 => "Numeric Array",
   2 => "Associative Array",
   3 => "Multidimentional Array",
   4 => "None of the above.",
   6 => 1
),
2 => array(
   0 => "Which of the following is used to check if session variable is already set or not in PHP?",
   1 => "session_start() function",
   2 => "$_SESSION",
   3 => "isset() function",
   4 => "session_destroy() function",
   6 => 3 
),
3 => array(
   0 => "Which of the following function is used to get environment variables in PHP?",
   1 => "search()",
   2 => "environment()",
   3 => "env()",
   4 => "getenv()",
   6 => 4
),
4 => array(
   0 => "Which of the following provides access to the uploaded file in the temporary directory on the web server?",
   1 => [$_FILES['file']['tmp_name']],
   2 => [$_FILES['file']['name']],
   3 => [$_FILES['file']['size']],
   4 => [$_FILES['file']['type']],
   6 => 1
),
5 => array(
   0 => "Which of the following type of variables are sequences of characters, like 'PHP supports string operations.'?",
   1 => "Strings",
   2 => "Arrays",
   3 => "Objects",
   4 => "Resources",
   6 => 1
),
6 => array(
   0 => "Which of the following method can be used to parse an XML document using PHP?",
   1 => "simplexml_load_string()",
   2 => "loadxml()",
   3 => "Both of the above.",
   4 => "None of the above.",
   6 => 3
),
7 => array(
   0 => "Which of the following function is used to locate a string within a string?",
   1 => "search()",
   2 => "locate()",
   3 => "strpos()",
   4 => "None of the above.",
   6 => 3
),
8 => array(
   0 => "Which of the following is used to set cookies?",
   1 => "setcookie() function",
   2 => "$_COOKIE variable",
   3 => "$HTTP_COOKIE_VARS variable",
   4 => "isset() function",
   6 => 1
),
9 => array(
   0 => "Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.",
   1 => "true",
   2 => "false",
   6 => 1
),
10 => array(
   0 => "Which of the following function can be used to get an array in the reverse order?",
   1 => "array_reverse()",
   2 => "array_search()",
   3 => "array_shift()",
   4 => "array_slice()",
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
<p><a href="index.php">Home Page</a>
  <TR><TD ALIGN=Center>

            <p><a href="php_quiz3.php" target="_blank">Start Third Quiz</a>
        
        </TD></TR>
<?php } ?>

</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
	<!-- CSS for BACKGROUND -->

  <!-- CSS for BACKGROUND -->

<STYLE TYPE="text/css">
 
body { 
background: url(http://7oom.ru/powerpoint/fon-dlya-prezentacii-12.jpg?ver\u003d3.0) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
 

</style> 
 
	 <style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url(/images/examples-logo.png) no-repeat;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
    </body>
</html>
