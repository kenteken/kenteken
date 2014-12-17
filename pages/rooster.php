<!doctype html>
<html>
	<head>
		<title>Kentéken | home</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel=stylesheet href="../css/rooster.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
	</head>
	<body id="tab5"> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
			date_default_timezone_set('Europe/Amsterdam');
			$date=date("W");
			if(isset($_POST['week']))
				{
				$date=date("W") + $_POST['week'];
				if($date > 52)
					{
						$date=$date - 52;
					}
				if($date < 10)
					{
						$date="0" . $date;
					}
				}
			$stab=$_POST['week'];
		?>
		<div class="head3">
			<form id='rooster' name='rooster' method='post'><!-- Moet nog opgelost worden dat hij goed uitlint-->
				<ul id="tabnavr">
					<li class="tabr<?php if($stab==0){echo "ja";}?>"><button style="border:0; background-color:rgba(0,0,0,0);" type='submit' value='0' name='week'>Deze week</button></li>
					<li class="tabr<?php if($stab==1){echo "ja";}?>"><button style="border:0; background-color:rgba(0,0,0,0);" type='submit' value='1' name='week'>Volgende week</button></li>
					<li class="tabr<?php if($stab==2){echo "ja";}?>"><button style="border:0; background-color:rgba(0,0,0,0);" type='submit' value='2' name='week'>Over 2 weken</button></li>
					<li class="tabr<?php if($stab==3){echo "ja";}?>"><button style="border:0; background-color:rgba(0,0,0,0);" type='submit' value='3' name='week'>Over 3 weken</button></li>
				</ul>
			</form>
		</div>
		<?php 
		echo "<iframe src='http://rooster.horizoncollege.nl/rstr/ECO/HRN/Roosters/" . $date . "/c/c00019.htm' frameborder='0' width='100%' height='800px'>hoi</iframe>";
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
