<?php
class Usuario {
    // Propriedades
    private $id;
    private $nome;
    private $email;
    private $dataCadastro;

    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = ucwords(trim($n));
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($e) {
        $this->email = strtolower(trim($e));
    }
    
    public function getDataCadastro() {
        return $this->dataCadastro;
    }
    public function setDataCadastro($d) {
        $this->dataCadastro = $d; 
    }
}

interface UsuarioDAO {
    public function insert(Usuario $u);
    public function findAll();
    public function findById($id);
    public function findByEmail($email);
    public function update(Usuario $u);
    public function delete($id);
}