<?php

namespace App\Models\Entidades;

use App\HelperStock\Utilitario;


class Usuario
{
    private $id;
    private $nome;
    private $login;
    private $password;
    private $email;
    

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = crypt($password);
    }

}