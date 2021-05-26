<?php


class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This beverage is " . $this->temperature . " and " . $this->color;
    }

}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);

    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage . "% alcohol percentage";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInfo()
    {
        return parent::getInfo() . " and has a " . $this->alcoholPercentage . "% alcohol percentage";
    }
}


$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";