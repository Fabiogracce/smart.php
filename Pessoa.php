<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    use PHP\Modelo\Endereco;

    class Pessoa{
        protected string $cpf;
        protected string $nome;
        protected string $telefone;
        protected Endereco $endereco;
        protected string $carterinha;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco,
                                    string $carterinha,
        )
        {
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->carterinha = $carterinha

        }//fim do método

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do método

        public function __set(string $nomeVariavel, string $dado):void
        {
            $this->nomeVariavel = $dado;
        }//fim do método

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Telefone: ".$this->telefone;
                   "<br>carterinha".$this->carterinha;
        }//fim do método


    }//fim da classe
?>