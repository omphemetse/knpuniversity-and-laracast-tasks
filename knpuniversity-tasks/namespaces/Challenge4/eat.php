<?php

require 'Pizza.php';

use Food\Tasty\Pizza as ItalianTreat;

$pizza = new ItalianTreat();

echo $pizza->eat();
