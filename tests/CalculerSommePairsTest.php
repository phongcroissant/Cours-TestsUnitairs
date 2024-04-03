<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculerSommePairsTest extends TestCase {
    public static function identiteProvider(): array {
        return [
            "Tableau Vide"=>[[],0],
            "Tableau Impairs"=>[[1,3,5,13,15],0],
            "Tableau Pairs"=>[[2,4,8,6,12,16],48],
            "Tableau Pairs et Impairs"=>[[1,2,3,4,5,6,7,8,9,10,11,12],42],
        ];
    }
    #[DataProvider('identiteProvider')]
    public function testCalculerSommePairs_TableauVide_0($tableau,$resultatSomme) {
        // Act
        $resultat=calculerSommePairs($tableau);
        // Assert
        $this->assertEquals($resultatSomme,$resultat);
    }
}