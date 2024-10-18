<?php

class Pessoa
{
    private $id_pessoa;
    private $nome_pessoa;
    private $email_pessoa;
    private $cpf_pessoa;
    private $senha_pessoa;
    private $telefone_pessoa;

    public function __construct($connp)
    {
        $this->conn = $connp;
        //     var_dump($conn);
    }

    //    Setters
    public function setid_pessoa($id_pessoa)
    {
        $this->id_pessoa = $id_pessoa;
    }

    public function setnome_pessoa($nome_pessoa)
    {
        $this->nome_pessoa = $nome_pessoa;
    }

    public function setemail_pessoa($email_pessoa)
    {
        $this->email_pessoa = $email_pessoa;
    }

    public function setcpf_pessoa($cpf_pessoa)
    {
        $this->cpf_pessoa = $cpf_pessoa;
    }

    public function setsenha_pessoa($senha_pessoa)
    {
        $this->senha_pessoa = $senha_pessoa;
    }

    public function settelefone_pessoa($telefone_pessoa)
    {
        $this->telefone_pessoa_pessoa = $telefone_pessoa;
    }

    //    Getters
    public function getid_pessoa()
    {
        return $this->id_pessoa;
    }

    public function getnome_pessoa()
    {
        return $this->nome_pessoa;
    }

    public function getemail_pessoa()
    {
        return $this->email_pessoa;
    }

    public function getcpf_pessoa()
    {
        return $this->cpf_pessoa;
    }

    public function getsenha_pessoa()
    {
        return $this->senha_pessoa;
    }

    public function gettelefone_pessoa()
    {
        return $this->telefone_pessoa;
    }

    public function insert()
    {
        $sql = "INSERT INTO pessoa (nome_pessoa, email_pessoa, cpf_pessoa, senha_pessoa, telefone_pessoa) 
    VALUES (:nome_pessoa, :email_pessoa, :cpf_pessoa, :senha_pessoa, :telefone_pessoa)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nome_pessoa', $this->nome_pessoa);
        $stmt->bindParam(':email_pessoa', $this->email_pessoa);
        $stmt->bindParam(':cpf_pessoa', $this->cpf_pessoa);
        $stmt->bindParam(':senha_pessoa', $this->senha_pessoa);
        $stmt->bindParam(':telefone_pessoa', $this->telefone_pessoa);

        if ($stmt->execute()) {
            echo "Pessoa física inserida com sucesso!<br>";
        } else {
            echo "Erro ao inserir Pessoa física!<br>";
        }
    }

    public function logar()
    {
        $sql = "SELECT id_pessoa FROM pessoa WHERE email_pessoa = '$this->email_pessoa' AND senha_pessoa = '$this->senha_pessoa'";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) > 0) {
            $_SESSION['logado'] = true;
            header('location: index.php');
        } else {
            echo "Email ou Senha incorreto!";
        }

    }
}