<?php

use system\core\Helpers;
use Valium\PT\Nif;

require 'vendor/autoload.php';

//echo Helpers::saudacao();

///testar o NIF
$nif = new Nif();
$q = $nif->check(['216014230', '291656173']);
var_dump($q);