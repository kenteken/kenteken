<!doctype html>
<html>
	<head>
		<title>Ken-te-ken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.menuitem1 {
				background-color:rgba(75,175,175,1);
				border-left:solid;
				border-right:solid;
				border-width:.1em;
			}
		</style>
	</head>
	<body> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
			Include("../pages/construction.php");
		?>
		<div style="padding:0% 0% 30% 2.5%">
			<h1>Ken-te-ken</h1>
			<h2>Website voor het delen van allemaal troep</h2>
			<p>
				zoals:
			</p>
			<ul>
				<li>Huiswerk</li>
				<li>Uitleg</li>
				<li><a href="../media/Daniboy.png">Dani</a><br></li>
				<li>En nog meer!</li>
				<li><a href="https://7chan.org/fl/src/SuperDeepthroat1_9_1b.swf">vlinders</a></li>
			</ul>
			<h2 id=link>Handige links</h2>
			<p>
				<a href="http://natschool.horizoncollege.nl/">natschool.horizoncollege.nl</a><br>
				<a href="http://www.w3schools.com/">w3schools.com</a><br>
				<a href="http://rooster.horizoncollege.nl/rstr/ECO/HRN/Roosters/default.htm">Roosters Sector Economie</a><br>
				<a href=""></a>
			</p>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
