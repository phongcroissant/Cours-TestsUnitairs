<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\TestCase;

class GetIdentityTest extends TestCase {

    public function testGetIdentity_AvecPrenomEtNomEnMinuscule_IdentiteCorrecte() {
        // Arrange
        $prenom="charles";
        $nom="leclerc";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("Charles LECLERC",$identity);

    }
    public function testGetIdentity_AvecPrenomEtNomEnMajuscule_IdentiteCorrecte() {
        // Arrange
        $prenom="CHARLES";
        $nom="LECLERC";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("Charles LECLERC",$identity);

    }
    public function testGetIdentity_AvecPrenomEtNomEnMajusculeMinuscule_IdentiteCorrecte() {
        // Arrange
        $prenom="chARleS";
        $nom="LEClerC";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("Charles LECLERC",$identity);

    }
    public function testGetIdentity_AvecPrenomEtNomNonRenseigne_ChaineVide() {
        // Arrange
        $prenom="";
        $nom="";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("",$identity);

    }
    public function testGetIdentity_AvecPrenomComposeAvecTiretEtNomRenseigne_IdentiteCorrecte() {
        // Arrange
        $prenom="charles-marc-hervé-perceval";
        $nom="leclerc";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("Charles-Marc-Hervé-Perceval LECLERC",$identity);

    }
    public function testGetIdentity_AvecPrenomComposeAvecEspaceEtNomRenseigne_IdentiteCorrecte() {
        // Arrange
        $prenom="charles marc hervé perceval";
        $nom="leclerc";

        // Act (exécution de la fonction à tester)
        $identity=getIdentity($prenom,$nom);

        // Assert
        $this->assertEquals("Charles Marc Hervé Perceval LECLERC",$identity);

    }

}