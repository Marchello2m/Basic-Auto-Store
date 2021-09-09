<?php

require_once "AutoPlats.php";
require_once "Buyer.php";
require_once "Deal.php";

$deal=new Deal('ok','es');


$deal->callAutoPlats();
$deal ->callBuyers();

