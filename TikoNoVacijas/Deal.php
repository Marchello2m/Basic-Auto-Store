<?php
require_once "AutoPlats.php";
require_once "Buyer.php";
class Deal
{
    private AutoPlats $autoPlats;
    private Buyer $buyer;

    public function __construct(AutoPlats $autoPlats,Buyer $buyer)
{
    $this->autoPlats = $autoPlats;
    $this->buyer = $buyer;
}

    public function getAutoPlats(): AutoPlats
    {
        return $this->autoPlats;
    }

    public function getBuyer(): Buyer
    {

        return $this->buyer;
    }

    function callAutoPlats():array
    {
        $autoPlats= new AutoPlats('bmw',222222,10);
        $name = $autoPlats->CarsInPlats();
        echo $name;    //Prints John
    }


    public function callBuyers():array
{
    $buyer = new Buyer('es',22222222);
    $buyer =$buyer->buyers();
    echo $buyer;
}
}
$deal=new Deal('ok','es');


$deal->callAutoPlats();
$deal ->callBuyers();



