<?php

echo "<h2> Ficheiro de funções </h2>";

/**
 * Função saudação
 * @author Sofiabakayim <sofia.bakayim@gmail.com>
 * @return string Saudação de acordo com a hora atual do servidor
 * @version 1.0
 * @since 07/04/2025
 */
function saudacao():string
{
    $hora = date(format: "H");
    $mensagem = "";

    if($hora >= 0 && $hora < 12){
        $mensagem = "Bom dia!!";
    }

    else if($hora >= 12 && $hora < 20){
        $mensagem = "Boa Tarde!!";
    }

    else{
        $mensagem = "Boa Noite!!";
    }

    return "Olá!!, $mensagem";
}

/**
 * Função de Resumir Texto
 * @author Sofia <sofia.bakayim@gmail.com>
 * @param string $texto texto a ser resumido
 * @param int $limite opcional numero limite de caracteres a mostrar
 * @param string $continue opcional texto a ser adicionado no final do texto resumido
 * @return string texto resumido
 * @version 1.0
 * @since 07/04/2025
 */

function resumirTexto(string $texto, int $limite=100, string $continue='...'): string{
    //return $texto;
    $textoLimpo = trim(strip_tags($texto));
    //1. se qtd caracteres for menor que o limite, retorna o texto
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }
    //2. caso contrario, corta o texto
    else{
        return mb_substr($textoLimpo, 0, $limite) . $continue;
    }

    
}

    function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
    }