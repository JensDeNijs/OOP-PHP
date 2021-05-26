<?php


class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    const BARNAME = "Het Vervolg";

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

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    function showBarname()
    {
        echo self::BARNAME;
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

    public function beerInfo()
    {
        return "Hi i'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color.";
    }
    function showBarname()
    {
        echo parent::BARNAME;
    }
}


//$cola = new Beverage("black", 2);

//echo $cola->getInfo();

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
$duvel->setColor("light");
echo $duvel->getInfo();
echo "<br>";
echo $duvel->beerInfo();
echo "<br>";
$duvel->showBarname();
echo "<br>";