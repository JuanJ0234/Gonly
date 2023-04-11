<?php session_start();
     if (isset($_SESSION['usuario'])) {
        require '../views/carrito-view.php';
     } else{
         header("location: form-registro-control.php");
     }

?>