<!doctype html>
<html>
	<head>
		<title>Ken-te-ken | news</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
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
			<h1>Nieuws</h2>
			<h2>‎vrijdag ‎21 ‎november ‎2014</h2>
			<p>
				Er word aan de website gewerkt!<br>
				Veranderingen:
				<p>
				- Menu aangemaakt.
				</p>
			</p>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
