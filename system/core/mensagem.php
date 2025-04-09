<?php

class Mensagem{
    //atributos (propriedades) 
    /*
    public - visível  em toda a aplicação
    private - visível apenas dentro da classe
    protected - visível apenas dentro da classe e nas classes que herdam
    */

    private $texto;

    private $css;

    //métodos para aceder Às classes ---> são publicos 
    //Os metodos privados ---> têm que ter uma chamada pública para conseguir alterar o privado
    public function renderizar():string //Depois do renderizar temos que dar o tipo de retorno
    {
        //return "Mensagem";
        return "<div class='{$this->css}' role='alert'> {$this->texto} </div>";
    }

    private function filtrar(string $texto):string{ //Esta linha vai filtrar a mensagem de texto
        return filter_var(strip_tags ($texto), FILTER_SANITIZE_SPECIAL_CHARS);
    }
   
    public function sucesso(string $texto):Mensagem{
        $this->css = "alert alert-success";
        $this->texto = $this->filtrar($texto);
        return $this;
    }

    public function alertaGeral(string $role,string $texto):Mensagem
    {
        $this->css = "alert alert-{$role}";
        $this->texto = $this->filtrar($texto);
        return $this;
    }

    public function incompleto(string $texto):Mensagem{
        $this->css = "alert alert-danger";
        $this->texto = $this->filtrar($texto);
        return $this;
    }
}