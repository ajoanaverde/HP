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
			<h2 id="titre" class="titre1">Ecole De Sorcellerie</h2>
			
			<div id="animP1">
				<img src="anim/chauveSouris.png" alt="animation chauve-souris">
			</div>
			<audio controls autoplay="autoplay" loop>
				<source src="./audio/Harry Potter and the Sorcerer's Stone Soundtrack - 01. Prologue.m4a" type="audio/mpeg">
				<source src="./audio/Harry Potter and the Sorcerer's Stone Soundtrack - 01. Prologue.opus" type="audio/ogg">
			</audio>
			
			<h3 id="affIndice" class="titre1">
				Indice pour entrer
			</h3>
			<h3 id="indice" class="text-center">
				<p>
					"Si vous devez demander, jamais vous ne saurez.<br>
					Si vous savez, il vous suffit de demander"
				</p><p>
					(La... tout en minuscule)
				</p><p id="inputRep">
					<input type="text" name="reponse" id="reponse">
					<button id="btnReponse">Envoyer la réponse</button>
				</p>

			</h3>
			<a id="entree" href="salleBanquets.php">
				Entrée
			</a>

		</header>

		

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="./JS/hp.js"></script>
</body>
</html>



















