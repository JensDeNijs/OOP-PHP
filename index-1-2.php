<?php


class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

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
    private string $name;
    private float $alcoholPercentage;

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


$cola = new Beverage("black", 2);

echo $cola->getInfo();

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";