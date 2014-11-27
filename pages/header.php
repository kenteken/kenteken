<header>
	<div class=header>
		<div class=head1>
			<div>
				<img
				class="logo"
				src="../media/kenteken.png" 
				alt="Welkom op kenteken!" 
				title="Je moeder"
				>
			</div>
			<div class=login>
				<form method="post" action="index.php">
					<label for="username">Username </label><input class="box" type="text" id="username" name="username" placeholder="Username" required/><br>
					<label for="password">Password </label><input class="box" type="password" id="password" name="password" placeholder="Password" required/>
					<!--<input class=inloggen type="submit" name="inloggen" value="inloggen"/>-->
					<a class=inloggen href="../pages/lol.html">Login</a>
				</form>
			</div>
		</div>
		<div class="head2">
			<ul id="tabnav">
				<li class="tab1"><a href=../pages/index.php>Home</a></li>
				<li class="tab2"><a href=../pages/nieuws.php>Nieuws</a></li>
				<li class="tab3"><a href=../pages/java.php>Java</a></li>
				<li class="tab4"><a href=../pages/leeftijd.php>Leeftijd</a></li>
				<li class="tab5"><a href=../pages/rooster.php>Rooster IO1A</a></li>
			</ul>
		</div>
	</div>
		<?php include_once("../pages/analyticstracking.php") ?>
</header>
<div class="back">