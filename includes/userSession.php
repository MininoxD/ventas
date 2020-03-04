<?php

    class userSession{
        
        public function __construct(){
            session_start();
        }

        public function setCurrentUser($dni){
            $_SESSION['dni'] =$dni;
        }

        public function getCurrentUser(){
            return $_SESSION['dni'];
        }

        public function cerrar(){
            session_unset();
            session_destroy();
        }
    }
?>