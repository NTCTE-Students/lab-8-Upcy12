<?php

class Thermostat {
    private $temperature;
    private $maxBorder = 50;
    private $minBorder = -50;

    public function __construct($temperature) {
        $this->temperature = $temperature;
    }

    public function setTemperature($temperature) {
        if ($temperature < $this->maxBorder || $temperature > $this->minBorder) {
            $this->temperature = $temperature;
            print("Температура успешно изменена на $temperature<br>");
        }else{
            print("рамки температуры: {$this->minBorder} — {$this->maxBorder}<br>");
        }
    }

    public function getTemperature() {
        print("Текущая температура равна $this->temperature<br>");
    }
}

$thermometer = new Thermostat(0);
$thermometer->setTemperature(20);
$thermometer->getTemperature();