<?php

use Valium\PT\Nif;

require 'vendor/autoload.php';

$nif = new Nif();
$q = $nif->check(['275744302']);
var_dump($q);

