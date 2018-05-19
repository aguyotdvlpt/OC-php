<h1>LES FONCTIONS BASIQUES</h1>

<h2>La fonction strlen permet de calculer la longueur d'une chaîne de caractère</h2>

<?php
// 
$phrase = 'Bonjour tout le monde ! Je suis une phrase ! <br />';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;

?>
<h2>La fonction str_replace permet de chercher et remplacer une chaîne de caractère par une autre</h2>

<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');

echo $ma_variable;
?>
<p></p>


<h2>Mélanger aléatoirement les caractères d'une chaîne</h2>
<h4>strshuffle</h4>
<?php
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
 
echo $chaine;
?>
<h2>Mette une chaîne de caractères en majuscules / minuscules</h2>


<h4>strtoupper :</h4>
<?php
$chaine = 'Bonjour tout le monde ! Je suis une phrase ! <br />';
$chaine = strtoupper($chaine);

echo $chaine;
?>
<h4>strtolower :</h4>

<?php
$chaine = 'BONJOUR TOUT LE MONDE ! JE SUIS UNE PHRASE ! ';
$chaine = strtolower($chaine);

echo $chaine;

?>

<p></p>

<h2> Récupérer la date</h2>
<h4> Récupérer l'année </h4>
<?php
$annee = date('Y');
echo $annee;
?>

<h4>Récupérer l'heure et l'année</h4>
<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute;
?>

