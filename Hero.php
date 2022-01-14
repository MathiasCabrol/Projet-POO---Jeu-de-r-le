<?php

class Hero extends Character {
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function __construct($defaultHealth, $defaultRage, $weaponSelected, $weaponDamageSelected, $shieldSelected, $shieldValueSelected) {
        parent::__construct($defaultHealth, $defaultRage);
        $this->setWeapon($weaponSelected);
        $this->setWeaponDamage($weaponDamageSelected);
        $this->setShield($shieldSelected);
        $this->setShieldValue($shieldValueSelected);
    }

    public function showHeroInfos () {
        return 'Le héro avec la valeur en santé de ' . $this->getHealth() . ' et en rage de ' . $this->getRage() . ' équipé de l\'arme ' . $this->weapon . ' avec des dégats équivalents à ' . $this->weaponDamage . ' et l\'armure ' . $this->shield . ' avec des points d\'armure de ' . $this->shieldValue;
    }

    public function getWeapon () {
        return $this->weapon;
    }
    public function setWeapon($newWeapon) {
        $this->weapon = $newWeapon;
    }

    public function getWeaponDamage () {
        return $this->weaponDamage;
    }
    public function setWeaponDamage($newWeaponDamage) {
        $this->weaponDamage = $newWeaponDamage;
    }

    public function getShield () {
        return $this->shield;
    }
    public function setShield($newShield) {
        $this->shield = $newShield;
    }

    public function getShieldValue () {
        return $this->shieldValue;
    }
    public function setShieldValue($newShieldValue) {
        $this->shieldValue = $newShieldValue;
    }
    
    public function attacked($damage) {
        $this->health = $this->getHealth() - ($damage - $this->shieldValue);
        if($this->health < 0){
            $this->health = 0;
        }
        return $this->health;
    }

    public function updateRage() {
        $this->setRage($this->getRage() + 30);
    }
}