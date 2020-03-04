<?php
    include_once 'conexion.php';
    $tmp ="";
    $qry ="SELECT * FROM productos";

    $con = new db();

    if($_POST["texto"] != ""){
        $qry ="SELECT * FROM productos WHERE nombre LIKE '".$_POST["texto"]."%' ";
    }

    $res=$con->connect()->prepare($qry);
    $res->execute();

    foreach($res as $rpt){
        $tmp.="<div class='col-2 mb-3'>
            <div class='card'>
            <img src='data:image/jpeg;base64,".base64_encode($rpt["foto"])."' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title' style='font-size: 15px'>".$rpt["nombre"]."</h5>
                <p class='card-text text-center' style='font-size: 10px'>Stock: ".$rpt["stock"]."</br>Precio: s/. ".$rpt["precio"]."</p>
                <button type='button' class='btn btn-primary' style='width: 90%; font-size: 10px'>Añadir</button>
            </div>
        </div>
        </div>";
        }
    echo $tmp;
    /*class busqueda extends db{

        public function __construct(){
            $tmp ="hola";
            $qry ="SELECT * FROM productos";

            if($_POST["txtbus"] != ""){
                $qry ="SELECT * FROM productos WHERE nombre LIKE '".$_POST["txtbus"]."%' ";
            }
            $res=$this->connect()->prepare($qry);
            $res->execute();
            foreach($res as $rpt){
            $tmp.="<div class='col-2 mb-3'>
                <div class='card'>
                <img src='img/descarga.png' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title' style='font-size: 15px'>".$rpt["nombre"]."</h5>
                    <p class='card-text text-center' style='font-size: 10px'>Stock: ".$rpt["stock"]."</br>Precio: s/. ".$rpt["precio"]."</p>
                    <button type='button' class='btn btn-primary' style='width: 90%; font-size: 10px'>Añadir</button>
                </div>
            </div>
            </div>";
            }
            echo $tmp;
        }
    }*/


?>
