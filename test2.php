<?php
require_once ("src/fonction/fonction.php");

$prenom="LEO";
$nom="mougin";
$identite=getIdentity($prenom,$nom);
echo $identite;