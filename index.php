<?php
    include_once 'includes/user.php';
    include_once 'includes/userSession.php';

    $userSession = new userSession();
    $user = new User();

    if(isset($_SESSION['dni'])){
        //echo "hay session";
        $user->setUser($userSession->getCurrentUser());
        include_once 'includes/venta.php';
    }else if(isset($_POST['dni']) && isset($_POST['password'])){
        //echo "Validacion de login";
        $dniForm = $_POST['dni'];
        $passForm = $_POST['password'];

        if($user->validar($dniForm,$passForm)){
            //echo "acceso correcto";
            $userSession->setCurrentUser($dniForm);
            $user->setUser($dniForm);
            include_once 'includes/venta.php';
        }else{
            //echo "acceso incorrecto";
            $error="error de contraseña";
            include_once 'includes/login.php';
        }
    }else{
        //echo "login";
        include_once 'includes/login.php';
    }
?>