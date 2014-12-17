<!doctype html>
<html>
	<head>
		<title>Kentéken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
		<style>
		iframe{
		margin:-1.55% 0% 0%;
		border-bottom: 1px solid black;
		}
		.head3 ul	
		{
		padding: 5px 0;
		text-align: center;
		</style>
	</head>
	<body id="tab5"> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
			date_default_timezone_set('Europe/Amsterdam')
		?>
		<div class="head3">
			<form id='rooster' name='rooster' method='post'>
				<ul id="tabnav">
					<li class="tab5"><a style="background-color:white; border-bottom: 3px solid white;"><button style="border:0; background-color:white" type='submit' value='0' name='week'>Deze week</button></a></li>
					<li class="tab5"><a style="background-color:white; border-bottom: 3px solid white;"><button style="border:0; background-color:white" type='submit' value='1' name='week'>Volgende week</button></a></li>
					<li class="tab5"><a style="background-color:white; border-bottom: 3px solid white;"><button style="border:0; background-color:white" type='submit' value='2' name='week'>Over 2 weken</button></a></li>
					<li class="tab5"><a style="background-color:white; border-bottom: 3px solid white;"><button style="border:0; background-color:white" type='submit' value='3' name='week'>Over 3 weken</button></a></li>
				</ul>
			</form
		</div>
		<?php 
			$date=date("W");
			if(isset($_POST['week']))
				{
				$date=date("W") + $_POST['week'];
				if($date > 52)
					{
						$date=$date - 52;
						$date="0" . $date;
					}
				}
		echo "<iframe src='http://rooster.horizoncollege.nl/rstr/ECO/HRN/Roosters/" . $date . "/c/c00019.htm' ' frameborder='0' width='100%' height='800px'></iframe>";
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
