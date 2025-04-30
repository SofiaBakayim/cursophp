<?php

namespace system\core;

class Controller{
    public function __construct(string $diretorio){//metodo construtor (magico)
        //echo "<h1>Controller</h1>";
        echo $diretorio;
    }
}