<?php
Class Character {
    private $health;
    private $rage;

    public function __construct(int $defaultHealth, int $defaultRage) {
        $this->setHealth($defaultHealth);
        $this->setRage($defaultRage);
    }

    public function getHealth () {
        return $this->health;
    }
    public function setHealth($newHealth) {
        if($newHealth <= 0){
        $newHealth = 0;
        }
        $this->health = $newHealth;
    }

    public function getRage () {
        return $this->rage;
    }
    public function setRage ($newRage) {
        $this->rage = $newRage;
    }
}
