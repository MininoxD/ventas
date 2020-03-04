<?php
    include_once 'userSession.php';

    $userSession = new  userSession();
    $userSession->cerrar();

    header("location: ../index.php");
?>