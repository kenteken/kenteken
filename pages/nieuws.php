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
			
			<!--
			<h2></h2>
			<p>
				<ul>
					<li></li>
				</ul>
			</p>
			-->
			
			<h2>‎Zondag 17 December ‎2014</h2>
			<p>
				Veranderingen:
				<ul>
					<li>Rooster tabbladen aangemaakt. Hiermee je verder in de tijd kan kijken op het rooster van IO1A.</li>
					<li>Een aantal kleine dingen bij de Java en leeftijd pagina.</li>
					<li>De tabbladen van de menu staat nu in het midden. en zijn extra fancy</li>
				</ul>
				Te doen:
				<ul>
					<li>Het logo verbeteren.</li>
					<li>Een plaats maken waar de script naartoe kunnen</li>
					<li></li>
			</p>
			
			<h2>‎Zondag 22 ‎November ‎2014</h2>
			<p>
				Veranderingen:
				<p>
				- Homepage gefixt
				</p>
			</p>
			<h2>‎Vrijdag ‎21 ‎November ‎2014</h2>
			
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
 
