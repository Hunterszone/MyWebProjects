<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
	<link rel="shortcut icon" type="image/jpg" href="../../img/favicon.ico"/>
    <title></title>
  </head>
  <body>
    <form name="reg" action="../connectivity/code_exec.php" onsubmit="return validateForm()" method="POST">
      <style type="text/css">
	 
	fieldset {
		display: block;
		margin-left: 315px;
		margin-right: 315px;
		padding-top: 1em;
		padding-bottom: 0em;
		padding-left: 0.75em;
		padding-right: 0.75em;
		border: 8px groove (internal value);
		background-color: rgba(0,0,0,0.5);
		
    } 

    body {
	  background-image: url(../img/quiz_cover.png);
	  -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  
    input:required:invalid, input:focus:invalid {
		background-image: url(../img/book-carousel.jpg);
		background-position: right top;
		background-repeat: no-repeat;
		-moz-box-shadow: none;
	  }
    input:required:valid {
		background-image:
	url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
		background-position: right top;
		background-repeat: no-repeat;
	}
 
</style>
      <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
          <td colspan="2">
            <div align="center">
              <?php 
                                            $remarks=$_GET['remarks'];
                                            if ($remarks==null and $remarks=="")
                                            {
                                            echo 'Register Here';
                                            }
                                            if ($remarks=='success')
                                            {
                                            echo 'Registration Success';
                                            }
                                            ?>
            </div>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <a href="../index.php">
			  <img id="backToSite" src="../img/faces.gif" title="Back" style="width: 120px; height: 120px;">
              <!--<div id="milkyway">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="200" width="auto">
                  <param name="wmode" value="transparent" />
                  <param name="movie" value="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" />
                  <param name="quality" value="best" />
                  <param name="play" value="true" />
                  <embed height="91" src="http://parallelreality-bg.com/templates/reality/images/milkyway2.png" bgcolor="#000000"
                  width="115" quality="best" play="true" wmode="transparent" />
                </object>
              </div>-->
            </a>
          </td>
        </tr>
      </table>
      <form id='register' action='' method='POST' accept-charset='UTF-8'>
        <fieldset>
          <center>
          <legend>
            <font face="algerian">
              <font size="4">
                <font color="yellow">
                  <u>Registration form</u>
                </font>
              </font>
            </font>
          </legend> 
		  <p>
            <font face="verdana">
              <font size="3">
                <font color="white">Username*:</font>
              </font>
            </font>
          </p>
		  <div>
			  <p>
				<input type="text" required="" pattern="\w+" name="username" placeholder="digits &amp; letters only" />
			  </p>
			  <?php if (isset($name_error)): ?>
				<span><?php echo $name_error; ?></span>
			  <?php endif ?>
			</div>
          <p>
            <label for='email'>
              <font face="verdana">
                <font size="3">
                  <font color="white">Email address*:</font>
                </font>
              </font>
            </label>
          </p>
			<div>
			  <p>
				<input type="email" name="email" ng-model="email" required="" placeholder="Must contain an @" />
			  </p>
			  <?php if (isset($email_error)): ?>
				<span><?php echo $email_error; ?></span>
			  <?php endif ?>
			</div>
          <p>
            <font face="verdana">
              <font size="3">
                <font color="white">Password*:</font>
              </font>
            </font>
          </p>
          <p>
            <input type="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password"
            onchange="form.pwd2.pattern = this.value;" placeholder="Example: Today123" />
          </p>
          <p>
            <font face="verdana">
              <font size="3">
                <font color="white">Confirm Password*:</font>
              </font>
            </font>
          </p>
          <p>
            <input type="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pwd2"
            placeholder="Example: Today123" />
          </p>
          <p>
          <label>
            <font face="verdana">
              <font size="3">
                <font color="white">Date of Birth:</font>
              </font>
            </font>
          </label> 
          <select name="month" onchange="changeDate(this.options[selectedIndex].value);">
            <option value="na">Month</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select> 
          <select name="day" id="day">
            <option value="na">Day</option>
          </select> 
          <select name="year" id="year">
            <option value="na">Year</option>
          </select> 
          <script language="JavaScript" type="text/javascript">
         function changeDate(i){
         var e = document.getElementById(&amp;#39;day&amp;#39;);
         while(e.length&amp;gt;0)
         e.remove(e.length-1);
         var j=-1;
         if(i==&amp;quot;na&amp;quot;)
         k=0;
         else if(i==2)
         k=28;
         else if(i==4||i==6||i==9||i==11)
         k=30;
         else
         k=31;
         while(j++&amp;lt;k){
         var s=document.createElement(&amp;#39;option&amp;#39;);
         var e=document.getElementById(&amp;#39;day&amp;#39;);
         if(j==0){
         s.text=&amp;quot;Day&amp;quot;;
         s.value=&amp;quot;na&amp;quot;;
         try{
         e.add(s,null);}
         catch(ex){
         e.add(s);}}
         else{
         s.text=j;
         s.value=j;
         try{
         e.add(s,null);}
         catch(ex){
         e.add(s);}}}}
         y = 2016;
         while (y--&amp;gt;1908){
         var s = document.createElement(&amp;#39;option&amp;#39;);
         var e = document.getElementById(&amp;#39;year&amp;#39;);
         s.text=y;
         s.value=y;
         try{
         e.add(s,null);}
         catch(ex){
         e.add(s);}}
         
</script></p>
          <p>
          <label>
            <font face="verdana">
              <font size="3">
                <font color="white">Gender:</font>
              </font>
            </font>
          </label> 
          <select name="Gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select></p>
          <p>
          <label for='age'>
            <font face="verdana">
              <font size="3">
                <font color="white">Age:</font>
              </font>
            </font>
          </label> 
          <input type="number" size="6" name="age" min="18" max="99" value="18" /></p>
          <center>
          <p>
          <input id="field_terms" type="checkbox" required="" name="terms" /> 
          <font face="algerian">
            <font size="2">
              <font color="yellow">I accept the 
              <a href="http://dir.bg" target="_blank">
                <u>
                  <font size="3">
                    <font color="#00FFFF">Terms and Conditions</font>
                  </font>
                </u>
              </a></font>
            </font>
          </font></p>
          <input type='submit' id="registration" name='reg' value='Register now'
          style="cursor: pointer;" />&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
          
          <input type="hidden" /> 
          <input type="reset" value="Clear form" name="submit" style="cursor: pointer;" /></center></center>
        </fieldset>
      </form>
	  
    <script type="text/javascript">
		document.addEventListener(&amp;quot;DOMContentLoaded&amp;quot;, function() {

		var myForm = document.getElementById(&amp;quot;example4&amp;quot;);
		var checkForm = function(e) {
		  ...
		  if(!this.terms.checked) {
			alert(&amp;quot;Please indicate that you accept the Terms and Conditions&amp;quot;);
			this.terms.focus();
			e.preventDefault(); // equivalent to return false
			return;
		  }
		};

		// attach the form submit handler
		myForm.addEventListener(&amp;quot;submit&amp;quot;, checkForm, true);

		var myCheckbox = document.getElementById(&amp;quot;field_terms&amp;quot;);
		var myCheckboxMsg = &amp;quot;Please indicate that you accept the Terms and Conditions&amp;quot;;

		// set the starting error message
		myCheckbox.setCustomValidity(myCheckboxMsg);

		// attach checkbox handler to toggle error message
		myCheckbox.addEventListener(&amp;quot;change&amp;quot;, function() {
		  this.setCustomValidity(this.validity.valueMissing ? myCheckboxMsg : &amp;quot;&amp;quot;);
		}, false);

	  }, false);
	</script>

    <style type="text/css"> 
		input[type=submit] {
			border-radius: 25px;
			border: 2;
			width: 110px;
			height:25px;
			font-family: Algerian;
			background: #f4f4f4;
			/* Old browsers */
			background: -moz-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #f4f4f4), color-stop(100%, #ededed));
			/* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* Opera 11.10+ */
			background: -ms-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* IE10+ */
			background: linear-gradient(to bottom, #f4f4f4 1%, #ededed 100%);
			/* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=&amp;#39;#f4f4f4&amp;#39;,
		endColorstr=&amp;#39;#ededed&amp;#39;,
		GradientType=0);
			/* IE6-9 */
		}
		 
		 
		 
		input[type=reset] {
			border-radius: 25px;
			border: 2;
			width: 105px;
			height:25px;
			font-family: Algerian;
			background: #f4f4f4;
			/* Old browsers */
			background: -moz-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #f4f4f4), color-stop(100%, #ededed));
			/* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* Opera 11.10+ */
			background: -ms-linear-gradient(top, #f4f4f4 1%, #ededed 100%);
			/* IE10+ */
			background: linear-gradient(to bottom, #f4f4f4 1%, #ededed 100%);
			/* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=&amp;#39;#f4f4f4&amp;#39;,
		endColorstr=&amp;#39;#ededed&amp;#39;,
		GradientType=0);
			/* IE6-9 */
		}
	 
	</style>
	</form>
  </body>
</html>
