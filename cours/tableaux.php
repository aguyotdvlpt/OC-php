<?php 
	$coordonnees = array(
		'prenom' => 'François' ,
		'nom' => 'Dupont',
		'adresse' => '2 rue Saint Louis',
		'ville' => 'Saint-Omer' );

		/* permet d'afficher les 'variables' du tableau */ 
 	foreach($coordonnees as $element) {
 	echo '<p>'.$element.'</p>'; 
 }

 		/* permet d'afficher les clés du tableau */
	 foreach($coordonnees as $cle => $element)
	 {
		 echo '[' . $cle . '] vaut ' . $element . '<br />';
	 }

	 /* permet d'avoir une visualisation du tableau */

	 echo '<pre>';
	 print_r($coordonnees);
	 echo '</pre>';


	/* Vérifier qu'une clé existe dans l'array
	 	<?php array_key_exists('cle', $array); ?>
	*/

	if (array_key_exists('nom', $coordonnees)) {
		echo 'La clé "nom" se trouve dans les coordonnées !';
	} 
	
	if (array_key_exists('pays', $coordonnees)) {
		echo 'La clé "pays" se trouve dans les coordoonnées';
	}

	/* Vérifier qu'une valeur existe dans l'array
	 	<?php in_array('valeur', $variable)); ?>
	*/
?>
	<p></p>
	<?php
		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

			if (in_array('Myrtille', $fruits))
			{
				echo 'La valeur "Myrtille" se trouve dans les fruits !';
			}

			if (in_array('Cerise', $fruits))
			{
				echo 'La valeur "Cerise" se trouve dans les fruits ! ';
			}
?>
		<p></p>
<?php
	/* Récupérer la clé d'une valeur dans l'array 
	 	<?php array_search('valeur', $variable)); ?>
	*/
 
	$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

	$position = array_search('Fraise', $fruits);
	echo ' "Fraise" se trouve en position ' . $position . '<br />';

	$position = array_search('Banane', $fruits);
	echo ' "Banane" se trouve en position ' . $position;
?>