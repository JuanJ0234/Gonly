<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: ../views/index-view.php');
} else {
	header('Location: form-registro-control.php');
}
?>