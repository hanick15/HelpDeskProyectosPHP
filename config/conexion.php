<?php
    session_start();

    class conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=bdheldesk","root","");
                return $conectar;
            } catch (Exception $e){
                print "Error BD!: ".$e ->getMessage()."<br/>";
                die();
            }
        }//conexion a BD

        public function set_names(){
            return $this->dbh->query ("SET NAMES 'utf8' ");
        }// evitar problemas con las tildes

        public static function ruta(){
            return "http://localhost/helpdesk/";
        }
    }
?>