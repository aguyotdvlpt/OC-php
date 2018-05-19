<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Ma page web</title>
	</head>
	<body>
		<h1>Ma page web</h1>
		<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

		<?php
			$age_du_visiteur = 17;
			echo 'vous avez ' .$age_du_visiteur. ' ans !';
		?>
	</body>
</html>