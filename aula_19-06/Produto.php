<?php

class Produto
{
    public $id;
    public $nome;
    public $descricao;
    public $status;
    public $datacriacao;

    public function inserir()
    {

        $sql = "INSERT INTO produto VALUES (null, ?, ?, 1, null)";

        $conexao = Conexao::getConexao();

        $ps = $conexao->prepare($sql);
        $ps->bindParam(1, $this->nome);
        $ps->bindParam(2, $this->descricao);

        $ps->execute();

        return $ps;

    }

}