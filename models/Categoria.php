<?php
    class Categoria extends conectar{

        public function get_categoria(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM categoria";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();   
        }
    }
?>