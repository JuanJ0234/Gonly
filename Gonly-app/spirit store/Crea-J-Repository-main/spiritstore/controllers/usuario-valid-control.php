<?php session_start();
if (isset($_SESSION['usuario'])) {
	require '../views/usuario-view.php';
} else{
	header('Location: ../views/index-view.php');
}

?>
