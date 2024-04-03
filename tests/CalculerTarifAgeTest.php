<?php
require_once ("src/fonction/fonction.php");

use PHPUnit\Framework\TestCase;

class CalculerTarifAgeTest extends TestCase {
    public function testCalculerTarifAge_AgeEntre0Et18_TarifReduit() {
        // Arrange
        $age=7;
        // Act
        $resultat=calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif réduit",$resultat);
    }
    public function testCalculerTarifAge_AgeEntre18Et65_TarifPlein() {
        // Arrange
        $age=33;
        // Act
        $resultat=calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif plein",$resultat);
    }
    public function testCalculerTarifAge_AgeSuperieur65_TarifSenior() {
        // Arrange
        $age=68;
        // Act
        $resultat=calculerTarifAge($age);
        // Assert
        $this->assertEquals("tarif senior",$resultat);
    }
    public function testCalculerTarifAge_AgeInferieur0_AgeInvalide() {
        // Arrange
        $age=-2;
        // Act
        $resultat=calculerTarifAge($age);
        // Assert
        $this->assertEquals("âge invalide",$resultat);
    }
    public function testCalculerTarifAge_AgeVide_AgeInvalide() {
        // Arrange
        $age="";
        // Act
        $resultat=calculerTarifAge($age);
        // Assert
        $this->assertEquals("âge invalide",$resultat);
    }
}