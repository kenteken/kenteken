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
					<ul id=menu>
						<li class=menuitem><a class=mlink href="#home">Home</a></li>
						<li class=menuitem><a class=mlink href="#news">News</a></li>
						<li class=menuitem><a class=mlink href="#contact">Contact</a></li>
						<li class=menuitem><a class=mlink href="#about">About</a></li>
					</ul>
				</div>
			</div>
		</header>
	<div class="back">
		<div class="construction">
		Site is nog <em>Under construction!</em><br>
		We hopen de site snel werkend te hebben.
		</div>
		<div style="padding:0% 0% 30% 2.5%">
			<h1>Ken-te-ken</h1>
			<h2>Website voor het delen van allemaal troep</h2>
			<p>
				zoals:
			</p>
				<ul>
					<li>Huiswerk</li>
					<li>Uitleg</li>
					<li><a href="daniboy.png">Dani</a><br></li>
					<li>En nog meer!</li>
					<li><a href="https://7chan.org/fl/src/SuperDeepthroat1_9_1b.swf">vlinders</a></li>
				</ul>
				<h2>Handige links</h2>
				<a href="http://natschool.horizoncollege.nl/">natschool.horizoncollege.nl</a><br>
				<a href="http://www.w3schools.com/">w3schools.com</a><br>
				<a href="http://rooster.horizoncollege.nl/rstr/ECO/HRN/Roosters/default.htm">Roosters Sector Economie</a><br>
				<a href=""></a>
				<a href=""></a>
				<a href=""></a>
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
 
