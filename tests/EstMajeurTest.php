<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\TestCase;

class EstMajeurTest extends TestCase {
    public function testEstMajeur_AgeSuperieurEgal18_Vrai() {
        // Arrange
        $age=19;
        // Act
        $resultat=estMajeur($age);
        // Assert
        $this->assertTrue(True,$resultat);
    }
    public function testEstMajeur_AgeInferieur18_Vrai()
    {
        // Arrange
        $age = 17;
        // Act
        $resultat = estMajeur($age);
        // Assert
        $this->assertFalse(false, $resultat);
    }
}