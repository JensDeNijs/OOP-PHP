<?php
class Beverage{
    private string $color;
    private float $price;
    private string $temperature = "cold";

    public function __construct(string $color, float $price, string $temperature = "cold"){
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;
    }
    public function getInfo(){
        return "This beverage is " . $this->temperature . " and " . $this->color;
    }
}

$cola = new Beverage("black", 2);

echo $cola->getInfo();