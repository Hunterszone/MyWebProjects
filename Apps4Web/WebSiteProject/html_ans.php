<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>HTML Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>

    <div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">CSS-Tricks Example</a>
    </h2>

    <div id="demo-bar-buttons">
          </div>

  </div>

</div>
	<div id="page-wrap">

		<h1>CSS Quiz</h1>
                           <?php
    if (isset($_POST['$answer1'])) {
    $answer1 = $_POST['question-1-answers'];
    }
    if (isset($_POST['$answer2'])) {
    $answer2 = $_POST['question-2-answers'];
    }
    if (isset($_POST['$answer3'])) {
    $answer3 = $_POST['question-3-answers'];
    }
    if (isset($_POST['$answer4'])) {
    $answer4 = $_POST['question-4-answers'];
    }
    if (isset($_POST['$answer5'])) {
    $answer5 = $_POST['question-5-answers'];
    }
    if (isset($_POST['$answer6'])) {
    $answer6 = $_POST['question-6-answers'];
    }
    if (isset($_POST['$answer7'])) {
    $answer7 = $_POST['question-7-answers'];
    }
    if (isset($_POST['$answer8'])) {
    $answer8 = $_POST['question-8-answers'];
    }
    if (isset($_POST['$answer9'])) {
    $answer9 = $_POST['question-9-answers'];
    }
    if (isset($_POST['$answer10'])) {
    $answer10 = $_POST['question-10-answers'];
    }
    
    $totalCorrect = 0;
    
    
    if (isset($_POST['$answer1'])) {
    $answer1 = "D";  
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer2'])) {
    $answer2  == "D";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer3'])) {
    $answer3  == "B";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer4'])) {
    $answer4  == "C"; 
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer5'])) {
    $answer5  == "B";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer6'])) {
    $answer6  == "C";
    $totalCorrect++;
    }
    if (isset($_POST['$answer7'])) {
    $answer7  == "C";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer8'])) {
    $answer8  == "B";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer9'])) {
    $answer9  == "A";
    }
    $totalCorrect++; 
    
    if (isset($_POST['$answer10'])) {
    $answer10 == "D"; 
    }
    $totalCorrect++; 
    
    echo "<div id='results'>$totalCorrect / 10 correct</div>";


?>
	<TR><TD ALIGN=Center>
The Quiz has finished

<p><a href="html_quiz2.php" target="_blank">Start Second Quiz</a>
        
        </TD></TR>
      	
       
	</div>
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
		background: url(http://www.calgaryherald.com/news/cms/binary/10271025.jpg?size=sw620x65) no-repeat;
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