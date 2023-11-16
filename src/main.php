<?php

require_once __DIR__ . '/../vendor/autoload.php'; 

use App\model\baleia;

$baleia = new Baleia("Willie", 15, 40000, "Cinza", "Megaptera novaeangliae", 20);
echo $baleia->getInfo() . "\n";
echo "Barulho: " . $baleia->fazerBarulho() . "\n";

$baleia2 = new Baleia("Mini Dikc", 4, 1500, "Branca", "Delphinapterus leucas", 18);
echo $baleia2->getInfo() . "\n";
echo "Barulho: " . $baleia2->fazerBarulho() . "\n";
