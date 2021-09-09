<?php
class AutoPlats
{
    private string $name;
    private int $mileage;
    private int $price;

    public function __construct(string $name, int $mileage, int $price)
    {
        $this->name = $name;
        $this->mileage = $mileage;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function CarsInPlats(): array
    {
        $autoPlats = [
            new autoPlats('Toyota 2018', 14020, 12000),
            new autoPlats('BMW X1 2010', 229000, 11000),
            new autoPlats('ZaZ 1967', 600000, 2000)

        ];
         foreach ($autoPlats as $cars) {
            echo"{$cars->getName()} Mileage ({$cars->getMileage()}) and price is : {$cars->getPrice()} EUR " . PHP_EOL;
        }
        return $autoPlats;
    }


}

echo "Welcome AutoPlats :D" . PHP_EOL;
echo "-------------------" . PHP_EOL;
$seller = new AutoPlats('BMW',100,100000);
$seller->CarsInPlats();
echo "*******************" . PHP_EOL;