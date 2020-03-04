<?php
    include_once 'conexion.php';

    class User  extends db{
        private $nombre;
        private $vende;

            public function validar($dni, $pass){
                $qry = $this->connect()->prepare('SELECT * FROM personal WHERE dni=:dni and pass=:psw');
                $qry->execute(['dni' => $dni, 'psw' => $pass]);
                if($qry -> rowCount()){
                    return true;
                }else{
                    return false;
                }
            }
            
            public function setUser($dni){
                $qry = $this->connect()->prepare('SELECT * FROM personal WHERE dni=:dni');
                $qry->execute(['dni' => $dni]);
                foreach ($qry as $currentUser) {
                    $this->nombre = $currentUser['nombre'];
                    $this->vende = $currentUser['dni'];
                }
            }

            public function getNombre(){
                return $this->nombre;
                
            }
            public function getDNI(){
                
                return $this->vende;
            }
    }
?>