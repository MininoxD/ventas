<?php
    /*$url = 'mysql:host=localhost;dbname=tienda';
    $usu = 'root';
    $pass= '';

    try {
        $mdb = new PDO($url,$usu,$pass);
         echo 'Conectado';
    } catch (PDOException $e) {
        print "Error: " . $e->getMenssage() . "<br/>";
        die(); 
    }*/

    class db{
        private $host;
        private $db;
        private $user;
        private $pass;
        private $charset;

        public function __construct(){
            $this->host = 'localhost';
            $this->db   = 'tienda';
            $this->user = 'root';
            $this->pass = '';
            $this->charset = 'utf8mb4';
        }

        function connect(){
            try {
                $coneccion ="mysql:host=" . $this->host . ";dbname=" . $this->db .";charset=" .$this->charset;
                $options= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                           PDO::ATTR_EMULATE_PREPARES => FALSE];
                $PDO = new PDO($coneccion,$this->user,$this->pass,$options);
                return $PDO;
                //echo 'conexion establecida';

            } catch (PDOException $e) {
                print "Error: " . $e->getMenssage() . "<br/>";
                die();
                print_r( $e );
            }
        }
    }
?>