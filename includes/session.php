<?php
    class Session{
        private $session = null;

        public function __construct($nom_session){
            session_start();
            if(!isset($_SESSION[$nom_session])){
                $_SESSION[$nom_session] = null;

            }

            $this->$session = $nom_session;

        }

        public function setValue($value){
            $_SESSION[$this->$session] = $value;
        }

        public function getValue(){
            return $_SESSION[$this->$session];
        }
    }
?>