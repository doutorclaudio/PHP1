<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){
    
    if($usuarioDAO->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);
        
        $usuarioDAO->add( $novoUsuario);
        
        header("Location: index.php");
        exit;        
    }else{
        header("Location: adicionar.php");
        exit;
    }
}else{
        header("Location: adicionar.php");
        exit;
}