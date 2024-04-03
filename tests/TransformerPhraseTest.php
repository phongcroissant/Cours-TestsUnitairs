<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class TransformerPhraseTest extends TestCase {
    public static function identiteProvider(): array {
        return [
            "Bonjour"=>["Bonjour","BonjourBonjour"],
            "Maxime"=>["Maxime","Maximed"],
            "Decime"=>["Decime","Decimed"],
            "Salut l'amie"=>["S4lut l'amied"]
        ];
    }
    #[DataProvider('identiteProvider')]
    public function testTransformerPhrase($tableau,$resultatSomme) {
        // Act
        $resultat=tranformerPhrase($tableau);
        // Assert
        $this->assertEquals($resultatSomme,$resultat);
    }
}