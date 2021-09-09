<?php
class Buyer
{

    public string $name;
    public int $money;
    public function __construct(string $name,int $money)
    {
        $this->name=$name;
        $this->money=$money;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMoney(): int
    {
        return $this->money;
    }
    public function buyers():array
    {
        $buyers = [
            new buyer('Janis', 13000),
            new buyer('Davids', 3000),
            new buyer('Martins', 11000)
        ];
        foreach ($buyers as $buyer){
            echo "{$buyer->getName()}".PHP_EOL;
//,and he got  {$buyer->getMoney()} EUR
        }
        return $buyers;
    }

    public function setName(string $name)
    {
        $input=readline("Chose your Buyer: ").PHP_EOL;

        $this->name = $name;
    }
    public function deal($input,$buyers,$autoPlats)
    {
        if($input==='Janis'){
         echo" { $this->name }    $this->money";

        }
    }
}

echo "Choose your Buyer:".PHP_EOL;
echo "*******************" . PHP_EOL;
$buyer = new Buyer('es',2000);
$buyer->buyers();
$buyer->setName('es');
$buyer->deal(' ','es','wtf');
echo "-------------------" . PHP_EOL;

