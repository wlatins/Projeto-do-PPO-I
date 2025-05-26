<?php
class Projeto
{
    private $conn;
    private $id_projeto;
    private $titulo_projeto;
    private $descricao_projeto;
    private $img_projeto;

    // Construtor
    public function __construct($connp)
    {
        if ($connp instanceof PDO) {
            $this->conn = $connp;
        } else {
            throw new Exception("A conexão não é válida.");
        }
    }

    // Métodos Setters
    public function setid_projeto($id_projeto)
    {
        $this->id_projeto = $id_projeto;
    }

    public function settitulo_projeto($titulo_projeto)
    {
        $this->titulo_projeto = $titulo_projeto;
    }

    public function setdescricao_projeto($descricao_projeto)
    {
        $this->descricao_projeto = $descricao_projeto;
    }

    public function setimg_projeto($img_projeto)
    {
        $this->img_projeto = $img_projeto;
    }

    public function insert()
    {
        if (empty($this->titulo_projeto) || empty($this->descricao_projeto) || empty($this->img_projeto)) {
            echo "Erro: Todos os campos são obrigatórios.";
            return;
        }

        $sql = "INSERT INTO projeto (titulo_projeto, descricao_projeto, img_projeto) 
            VALUES (:titulo_projeto, :descricao_projeto, :img_projeto)";

        try {
            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':titulo_projeto', $this->titulo_projeto);
            $stmt->bindParam(':descricao_projeto', $this->descricao_projeto);
            $stmt->bindParam(':img_projeto', $this->cpf_pimg_projetoessoa);

            if ($stmt->execute()) {
                echo "Projeto inserido com sucesso!<br>";
            } else {
                echo "Erro ao inserir Projeto!<br>";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
?>