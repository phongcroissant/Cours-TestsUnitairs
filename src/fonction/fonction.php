<?php
function getIdentity (string $prenom, string $nom,) {
    return ucfirst(strtolower($prenom))." ".strtoupper($nom);
}