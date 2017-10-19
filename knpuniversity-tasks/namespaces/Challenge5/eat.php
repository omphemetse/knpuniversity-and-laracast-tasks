<?php

require 'Pizza.php';
require 'Lunch.php';

use Meals\Lunch;

$lunch = new Lunch();
echo $lunch->getFood()->eat();
