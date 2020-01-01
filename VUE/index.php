<?php
	include_once('./INC/head.php');
?>

<body>
	<div id="homeIndex" class="home">
		<div class="lang">
			<select id="language" class="form-control" name="language" onchange="selectLanguage();">
				<option selected="selected" value="2">FR</option>
				<option value="4">EN</option>
			</select>
		</div>
		<header>
			<h1 class="titre1">Poudlard</h1>
			<h2 class="titre1">Ecole De Sorcellerie</h2>
			
			<div id="animP1">
				<img src="anim/chauveSouris.png" alt="animation chauve-souris">
			</div>
			<a id="entree" href="salleBanquets.html">Entrée</a>
			<!-- h4 class="titre1 tooltip">Indice pour entrer
				<span class="tooltiptext">Si vous devez demander, jamais vous ne saurez. Si vous savez, il suffit de demander</span>
			</!-->
		</header>

		<audio controls autoplay="autoplay" loop>
			<source src="Harry Potter and the Sorcerer's Stone Soundtrack - 01. Prologue.m4a" type="audio/mpeg">
			<source src="Harry Potter and the Sorcerer's Stone Soundtrack - 01. Prologue.opus" type="audio/ogg">
		</audio>

	</div>
	<script src="./JS/hp.js"></script>
</body>
</html>



















