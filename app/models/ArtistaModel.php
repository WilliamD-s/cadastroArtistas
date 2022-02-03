<?php
class ArtistaModel
{
    private $conn;

    function __construct()
    {
        $this->conn = new Connection();    
    }

    public function listar()
    {
        $artistas = array();
        $stmt = $this->conn->getConnection()->prepare("SELECT * FROM artistas");
        $stmt->execute();
        while($row = $stmt->fetch()){
            $artistas[] = $row;
        }

        return $artistas;
    }

    public function cadastrar($artista)
    {
        $stmt = $this->conn->getConnection()->prepare("INSERT INTO artistas(nome,pais) VALUES ( :nome , :pais )");
        $stmt->bindParam(':nome', $artista['nome'], PDO::PARAM_STR);
        $stmt->bindParam(':pais', $artista['pais'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deletar(int $id)
    {
        $stmt = $this->conn->getConnection()->prepare("DELETE FROM artistas WHERE id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        return $result;
    }
}
