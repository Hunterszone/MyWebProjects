<?php require_once('../auth/authentication.php' );echo "Welcome, " . htmlspecialchars($_SESSION['SESS_USERNAME' ], ENT_QUOTES, 'UTF-8' );?><!DOCTYPE html>
	<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
	<html>
		<head>
			<title>Quizzes</title>
			<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>
				</head>
				<table>
					<tr>
						<td>
							<a href="../auth/user_login.php">
								<img id="backToSite" src="../img/faces.gif" title="Back" style="width: 120px; height: 120px;">
								<!--<div id="milkyway">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="200" width="auto">
										<param name="wmode" value="transparent">
											<param name="movie" value="http://parallelreality-bg.com/templates/reality/images/milkyway2.png">
												<param name="quality" value="best">
													<param name="play" value="true">
														<embed height="91" src="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" bgcolor="#000000" width="115" quality="best" play="true" wmode="transparent">
														</object>
													</div>-->
												</a>
											</td>
										</tr>
									</table>
									<body>
										<div class="page-header row">
											<div class="col-sm-12">
												<h1>Web Development Quizzes</h1>
											</div>
											<STYLE TYPE="text/css">
												body {
												background: url(../img/quiz_cover.png) no-repeat center center fixed;
												-webkit-background-size: cover;
												-moz-background-size: cover;
												-o-background-size: cover;
												background-size: cover;
												}
											</style>
										</div>
										<p>
											Have you mastered a web programming language or another section on After Hours Programming? Great! Quizzes
											are one of the best ways to show that you understand the content covered in these tutorials. Once you take one
											of the quizzes, you can feel more confident in your abilities as a web developer. The quizzes cover an overview
											of each topic and provide some important specific questions.
										</p>
										<h2>List of Tests</h2>
										<div>
											<div class="lead">
												<a href="./html/html_quiz.php" target="_blank">HTML</a>
											</div>
										</div>
										<hr/>
										<div>
											<div class="lead">
												<a href="./quiz.php" target="_blank">CSS</a>
											</div>
										</div>
										<hr/>
										<div>
											<div class="lead">
												<a href="./js/javascript_quiz.php" target="_blank">JavaScript</a>
											</div>
										</div>
										<hr/>
										<div>
											<div class="lead">
												<a href="./php/php_quiz.php" target="_blank">PHP</a>
											</div>
										</div>
										<hr/>
									</body>
								</html>
								