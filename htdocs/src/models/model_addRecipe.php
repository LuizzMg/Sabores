<?php
    require_once '../config/database.php';

    class ItemModel {
    $pdo = getConnection();

    public function inserirItem($id, $, $descricao) {

        $sql = "INSERT INTO receitas (usuario_id, tipo_receita, custo_total, tempo_preparo_minutos, ingredientes, modo_preparo) VALUES (:conta_id, :tipo_, :desc)";
        
        $stmt = $this->db->prepare($sql);
        
        // Vincula os parâmetros de forma segura
        $stmt->bindParam(':conta_id', $contaId, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':desc', $descricao, PDO::PARAM_STR);

        return $stmt->execute(); // Retorna true se salvou, false se deu erro
    }
}