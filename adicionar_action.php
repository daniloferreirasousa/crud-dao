<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$data = filter_input(INPUT_POST, 'data');

if($nome && $email && $data) {

    if($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);
        $novoUsuario->setDataCadastro($data);

        $usuarioDao->insert($novoUsuario);
        
        header("Location:index.php");
        exit;
    
    } else {
        header("Location:adicionar.php");
        exit;
    }
} else{
    header("Location: adicionar.php");
}