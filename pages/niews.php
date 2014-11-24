<!doctype html>
<html>
	<head>
		<title>Ken-te-ken | news</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.menuitem2 {
				float:left;
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
			<h1>Nieuws</h2>
			<h2>‎Vrijdag ‎21 ‎November ‎2014</h2>
			<p>
				Er word aan de website gewerkt!<br>
				Veranderingen:
				<p>
				- Menu aangemaakt.
				</p>
			</p>
			<h2>‎Zondag 22 ‎November ‎2014</h2>
			<p>
				Veranderingen:
				<p>
				- Homepage gefixt
				</p>
			</p>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
