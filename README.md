<h1>IMPORTANT! Replace OpenSans-Light.ttf with the one <a href="http://www.fontsquirrel.com/fonts/open-sans" target="_blank">here</a>

# Basics
<h3>HTML:</h3>
<p> You need to add the image img.php, do users can see the code: <b>&lt;img src="img.php" alt="RoboVerify" &gt;</b></p>

<h3> PHP:</h3>
<p> You need to require the file val.php in your PHP script: <b>require_once "val.php";</b></p>
<p>You need to set a var as the RoboVerify Class: <b>$ver = new RoboVerify;</b></p>
<p> To test validation use the function validate(Code to be checked): <b>$ver->validate($_POST['code']);</b></p>
<p>It will return true if passed or false if failed or there was an error.</b></p>
