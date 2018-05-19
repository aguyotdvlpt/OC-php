<?php 
	$coordonnees = array(
		'prenom' => 'François' ,
		'nom' => 'Dupont',
		'adresse' => '2 rue Saint Louis',
		'ville' => 'Saint-Omer' );


 	foreach($coordonnees as $element) {
 	echo '<p>'.$element.'</p>'; 
 }

	 foreach($coordonnees as $cle => $element)
	 {
		 echo '[' . $cle . '] vaut ' . $element . '<br />';
	 }



  ?>