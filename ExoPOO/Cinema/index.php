<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    

include "Personne.php";
include "Acteur.php";
include "Realisateur.php";

$acteur = new Acteur('Nicolas', 'Zwickel', 'Homme', '24-11-1986');
$acteur->acteurInformations();
?>
</body>
</html>