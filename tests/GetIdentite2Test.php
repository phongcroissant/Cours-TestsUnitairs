<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class GetIdentite2Test extends TestCase {
    // Créer un "Provider" de données
    public static function identiteProvider(): array {
        return [
            "charles leclerc"=>["charles","leclerc","Charles LECLERC"],
            "CHARLES LECLERC"=>["CHARLES","LECLERC","Charles LECLERC"],
            "ChArLes LECLErc"=>["ChArLes","LECLErc","Charles LECLERC"],

        ];
    }
    #[DataProvider('identiteProvider')]
    public function testGetIdentite_PrenomEtNomRenseigne_IdentiteCorrecte($prenom,$nom,$resultatAttendu) {
        // Act
        $resultat=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals($resultatAttendu,$resultat);
    }
}