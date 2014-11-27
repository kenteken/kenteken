<!doctype html>
<html>
	<head>
		<title>Kentéken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.menuitem1 {
				background-color:rgba(125,200,200,1);
				border:solid;
				border-width:.1em;
				border-radius:13px 13px 0 0;
				margin-bottom: -1px;
				border-bottom: 1px solid rgba(125,200,200,1);
			}
		</style>
	</head>
	<body id="tab1"> 
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
				<li><a href="../pages/deep.php">vlinders</a></li>
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
 
