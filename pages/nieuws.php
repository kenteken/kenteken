<!doctype html>
<html>
	<head>
		<title>Kentéken | news</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
			.menuitem2 {
				background-color:rgba(125,200,200,1);
				border:solid;
				border-width:.1em;
				border-radius:13px 13px 0 0;
				margin-bottom: -1px;
				border-bottom: 1px solid rgba(125,200,200,1);
			}
		</style>
		</head>
	<body id="tab2"> 
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
 
