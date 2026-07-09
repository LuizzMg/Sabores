<?php
    require_once '../src/models/model_teste.php';

    class seila{
        public function nomeUsuario(){
           $usuarios = userModel::teste();
           $email = userModel::teste();
            // Retorna um array com tudo que a VIEW vai precisar para desenhar a tela
            return[
                'usuarios' => $usuarios,
                'email' => $email,
            ];
        }
    }
?>