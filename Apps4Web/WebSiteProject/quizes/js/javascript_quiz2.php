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
$title = "Javascript";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Which of the following function of Number object formats a number with a specific number of digits to the right of the decimal?",
   1 => "toExponential()",
   2 => "toFixed()",
   3 => "toPrecision()",
   4 => "toLocaleString()",
   6 => 2
),
2 => array(
   0 => "Which of the following is the correct syntax to create a cookie using JavaScript?",
   1 => "document.cookie = 'key1 = value1; key2 = value2; expires = date';",
   2 => "browser.cookie = 'key1 = value1; key2 = value2; expires = date';",
   3 => "window.cookie = 'key1 = value1; key2 = value2; expires = date';",
   4 => "navigator.cookie = 'key1 = value1; key2 = value2; expires = date';",
   6 => 1
),
3 => array(
   0 => "Which of the following is a valid type of function javascript supports?",
   1 => "named function",
   2 => "anonymous function",
   3 => "Both of the above.",
   4 => "None of the above.",
   6 => 3
),
4 => array(
   0 => "Which of the following function of Array object adds one or more elements to the front of an array and returns the new length of the array?",
   1 => "unshift()",
   2 => "sort()",
   3 => "splice()",
   4 => "toString()",
   6 => 1
),
5 => array(
   0 => "How can you get the total number of arguments passed to a function?",
   1 => "Using args.length property",
   2 => "Using arguments.length property",
   3 => "Both of the above.",
   4 => "None of the above.",
   6 => 2
),
6 => array(
   0 => "Which of the following function of Number object returns a string value version of the current number in a format that may vary according to a browser's locale settings.?",
   1 => "toExponential()",
   2 => "toFixed()",
   3 => "toLocaleString()",
   4 => "toString()",
   6 => 3
),
7 => array(
   0 => "Which of the following code creates an object?",
   1 => "var book = Object();",
   2 => "var book = new Object();",
   3 => "var book = new OBJECT();",
   4 => "var book = new Book();",
   6 => 2
),
8 => array(
   0 => "Which of the following is correct about features of JavaScript?",
   1 => "JavaScript is is complementary to and integrated with HTML.",
   2 => "JavaScript is open and cross-platform.",
   3 => "Both of the above.",
   4 => "All of the above.",
   6 => 3
),
9 => array(
   0 => "Which of the following type of variable takes precedence over other if names are same?",
   1 => "global variable",
   2 => "local variable",
   3 => "Both of the above.",
   4 => "None of the above.",
   6 => 2
),
10 => array(
   0 => "Which of the following function of String object causes a string to be displayed in the specified color as if it were in a <font color='color'> tag?",
   1 => "fixed()",
   2 => "fontcolor()",
   3 => "blink()",
   4 => "bold()",
   6 => 2
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

<BR>Percentage of correct responses: <?php print $percentaje; ?> %
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
<BR>Percentage of correct responses: <?php print $percentaje ; ?> %
<p><a href="index.php">Home Page</a>

    
    <TR><TD ALIGN=Center>

            <p><a href="javascript_quiz3.php" target="_blank">Start Third Quiz</a>
        
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