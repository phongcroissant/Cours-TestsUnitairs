<?php
function getIdentity (string $prenom, string $nom) {
    if (empty($nom) && empty($prenom)) {
        return "";
    }elseif (strpos($prenom," ")) {
        return ucwords(strtolower($prenom))." ".strtoupper($nom);
    } elseif (strpos($prenom,"-")) {
        return mb_convert_case($prenom, MB_CASE_TITLE)." ".strtoupper($nom);
    }
    return ucfirst(strtolower($prenom))." ".strtoupper($nom);
}

// Fonction permettant de déterminer si une personne est majeure ou pas en fonction de son âge
function estMajeur (int $age) : bool {
    return $age>=18;
}

function calculerSommePairs(array $tab) : int{
    $sommes=0;
    if ($tab) {
        foreach ($tab as $nombres) {
            if ($nombres%2==0) {
                $sommes+=$nombres;
            }
        }
        return $sommes;
    } else {
        return $sommes;
    }
}

function calculerTarifAge(string $age) : string {
    if (empty($age)) {
        return "âge invalide";
    } elseif ($age >=0 &&$age<18) {
        return "tarif réduit";
    } elseif($age>=18 && $age<=65) {
        return "tarif plein";
    }elseif ($age>65) {
        return "tarif senior";
    } else {
        return "âge invalide";
    }
}

function tranformerPhrase(string $phrase):string {
    $mots=explode(" ",$phrase);
    for ($numero = 0; $numero < count($mots); $numero++){
        if (str_ends_with($mots[$numero],"e")) {
            $mots[$numero]=$mots[$numero]."d";
        }
        elseif (str_contains($mots[$numero],"a")){
            $most=str_replace("a","4",$mots[$numero]);
        }else {
            $mots="$mots[$numero]$mots[$numero]";
        }
    }
    $phrase=implode($mots);
    return $phrase;
}