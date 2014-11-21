<!doctype html>
<html>
	<head>
		<title>Ken-te-ken</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="index.css">
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		</head>
	<body> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
		?>
		<header>
			<div class=header>
				<div class=grad>
					<div class=headimg>
						<img 
						src="kenteken.png" 
						alt="Foto van het Kenteken" 
						title="Je moeder"
						style="height:12.5%; width:12.5%; float:left;">
					</div>
					<div class=login>
						<form method="post" action="index.php">
							<label for="username">Username </label><input class="box" type="text" id="username" name="username" placeholder="Username" required/>
							<label for="password">Password </label><input class="box" type="password" id="password" name="password" placeholder="Password" required/>
							<input class=inloggen type="submit" name="inloggen" value="inloggen"/>
						</form>
					</div>
				</div>
				<div class=secondheader>
						<ul class=menu>
							<li class=menuitem><a class=mlink href="index.php">Home</a></li>
							<li class=menuitem><a class=mlink href="news.php">News</a></li>
							<li class=menuitem><a class=mlink href="#contact">Contact</a></li>
							<li class=menuitem><a class=mlink href="#about">About</a></li>
						</ul>
				</div>
			</div>
		</header>
	<div class="back">
		<div style="padding:0% 0% 30% 2.5%">
		<h1>Nieuws</h2>
		<h2>‎vrijdag ‎21 ‎november ‎2014</h2>
		<p>Er word aan de website gewerkt!</p>
		</div>
		<address>
			<footer>
			  Gemaakt door: Joost Sijm en Dani.<br>
			  Contact informatie: <a href="mailto:joostsijm@gmail.com">joostsijm@gmail.com</a>.
			</footer> 
		</address>
	</div>
	</body>
</html>
 
