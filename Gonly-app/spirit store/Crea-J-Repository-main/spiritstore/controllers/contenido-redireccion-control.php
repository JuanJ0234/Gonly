<?php session_start();
if (isset($_SESSION['usuario'])) {
	require 'index.php';
} else {
	header('Location: form 2.php');
}
?>
