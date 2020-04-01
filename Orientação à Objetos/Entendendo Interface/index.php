<?php
interface Database{
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database{
    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com MySQL";
    }
    public function alterarProduto(){

    }   
}
class OracleDB implements Database{
    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com Oracle";
    }
    public function alterarProduto(){

    }  
}
class NodeDB implements Database{
    public function listarProdutos(){

    }
    public function adicionarProduto(){
        echo "Adicionando com NODE";
    }
    public function alterarProduto(){

    }
}







$db = new NodeDB();
$db->adicionarProduto();
