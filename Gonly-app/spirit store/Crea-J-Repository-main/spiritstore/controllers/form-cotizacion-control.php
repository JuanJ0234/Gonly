<?php session_start();
    if(isset($_SESSION['usuario'])){
        require '../views/form-cotizacion-view.php';
    } else{
        header('Location: form-registro-control.php');
    }

    $error = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Mensaje = $_POST['mensaje'];
        if(empty($Mensaje)){
            $error = '<div class="alerDiv"><p>ERROR: Por favor complete todos los campos</p></div>';
        } else{
            $ConfUser = $_SESSION['UserSesion-User'];
            $conex = mysqli_connect('localhost', 'root', '', "spirit_store");
            $sql = "SELECT * from users";
            $result = mysqli_query($conex,$sql);

            while ($mostrar = mysqli_fetch_array($result)) {
                if ($ConfUser == $mostrar['usuario']) {
                    $User = $mostrar['usuario'];
                    $email = $mostrar['email'];
                    $telefono = $mostrar['telefono'];
                }
            }
            $Destino = "sf9779967@gmail.com";
            $contenido = "El usuario " . $User . " ha realizado una cotizacion:  \n\n\nDatos Del usuario: \nNombre de usuario: " . $User . "\nCorreo Electronico: " . $email . "\nTelefono de contacto: " . $telefono . "\n\n\nCotizacion: " . $Mensaje;           
            mail($Destino, "Informe de cotizacion", $contenido, "Datos de cotizacion");
            

        }
    }
?>