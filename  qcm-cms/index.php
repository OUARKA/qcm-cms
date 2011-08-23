<?php
include("inc_html_DOCTYPE.php");
?>

<head> 
	<? include("inc_html_HEADcontent.php"); ?>
</head>
<body>
	<div> <? include("main.php"); ?> </div>
<center>
	<h1>Titre (à modifier)</h1>
	<div id="formaut">
		<form method="post" action=".php">
			Pseudo <input type="text" name="pseudo"><br />
			Mot de passe <input type="password" name="pwd"><br />
			<input type="submit" name="send" value="Se connecter">
			<span class="forgetpwd">J'ai oublié mon mot de passe!</span>
		</form>
	</div>
</center>

	</div> <? include("footer.php"); ?> </div>
</body>
