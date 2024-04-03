<?php
require_once ("src/fonction/fonction.php");

$prenom="jte";
$nom="bèze";
$identite=getIdentity($prenom,$nom);
echo $identite;