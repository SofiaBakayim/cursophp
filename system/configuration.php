<?php

//fuso horário
date_default_timezone_set("Europe/Lisbon");

echo "<h2> Ficheiro de configuração</h2>";

/* Definição de constantes */
define("SITE_NOME", "Blog de estudos AI");
define("SITE_DESCRIÇÃO", "Sistema de questão de Posts categorizados sobre IA");


//URL de produção -> É Aqui que se vê o site no ar -> fazemos um depoloy. ficheiros + base de dados
define("URL_PRODUÇÃO", "https://www.blogia.com/");

//URL de desenvolvimento -> Ambiente, é no nosso pc, assim que o cliente aprova, já comprou, vai para URL produção
const URL_DESENVOLVIMENTO = "https://cursophp.localhost";
?>