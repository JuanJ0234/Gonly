<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index-redireccion-control.php');
}
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	$_SESSION['UserSesion-User'] = $usuario;
	try {
		$conexion = new PDO("mysql:host=localhost;dbname=spirit_store", 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM users WHERE usuario = :usuario AND password = :password');
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index-redireccion-control.php');
	} else {
		$errores .= '<div class="alerDiv"><p>ERROR: Los datos ingresados son incorrecto</p></div>';
	}
}
require '../views/form-login-view.php';
?>
