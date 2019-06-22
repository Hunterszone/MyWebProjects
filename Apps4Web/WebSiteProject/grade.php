<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
    
    $answer1  = $_POST['question-1-answers'];
    $answer2  = $_POST['question-2-answers'];
    $answer3  = $_POST['question-3-answers'];
    $answer4  = $_POST['question-4-answers'];
    $answer5  = $_POST['question-5-answers'];
    $answer6  = $_POST['question-6-answers'];
    $answer7  = $_POST['question-7-answers'];
    $answer8  = $_POST['question-8-answers'];
    $answer9  = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];

    $totalCorrect = 0;
    
    if ($answer1  == "B") { $totalCorrect++; }
    if ($answer2  == "A") { $totalCorrect++; }
    if ($answer3  == "A") { $totalCorrect++; }
    if ($answer4  == "D") { $totalCorrect++; }
    if ($answer5  == "A") { $totalCorrect++; }
    if ($answer6  == "B") { $totalCorrect++; }
    if ($answer7  == "D") { $totalCorrect++; }
    if ($answer8  == "C") { $totalCorrect++; }
    if ($answer9  == "B") { $totalCorrect++; }
    if ($answer10 == "A") { $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 10 correct</div>";
   
        exit; 
    
?>
		
       
	</div>
	
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
		background: url(http://7oom.ru/powerpoint/fon-dlya-prezentacii-12.jpg?ver\u003d3.0) no-repeat;
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