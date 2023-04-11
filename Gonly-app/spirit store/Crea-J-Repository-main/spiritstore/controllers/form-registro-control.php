<?php session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_SESSION['usuario'])) {
	header('Location: cons.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$errores = '';
	$contra = $_POST['password'];
	$telLength = strlen($telefono);
	$firstNT = substr($telefono, 0, 1);
	$fnt = intval($firstNT);

	if (empty($usuario) or empty($password) or empty($password2) or empty($email) or empty($telefono)) {
		$errores .= '<div class="alerDiv"><p>ERROR: Por favor complete todos los campos</p></div>';
	} else if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
		$errores .= '<div class="alerDiv"><p>ERROR: Correo Electronico no valido</p></div>';
	} elseif ($telLength != 8 && $telLength != 9) {
		$errores .= '<div class="alerDiv"><p>ERROR: Numero de telefono no valido</p></div>';
	} elseif ($fnt != 7 && $fnt != 6) {
		$errores .= '<div class="alerDiv"><p>ERROR: Numero de telefono no valido</p></div>';
	} else {

		//Correo

		require_once 'PHPMailer/src/Exception.php';
        require_once 'PHPMailer/src/PHPMailer.php';
        require_once 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'gonlystore@gmail.com';                     //SMTP username
			$mail->Password   = 'kyzbhaluoksyeqwj';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
			$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		
			//Recipients
			$mail->setFrom('gonlystore@gmail.com', 'Gonly');
			$mail->addAddress($email, 'Usuario Nuevo');     //Add a recipient
		
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Gonly';
			$mail->Body    = "Aqui estan los datos de su cuenta de Spirit_Store \n\n Nombre: " . $usuario . "\n\nCorreo Electronico: " . $email . "\n\nNumero de telefono: " . $telefono . "\n\nContraseña: " . $contra . "\n\n\n¡Disfrute de nuestro sitio web a 200k/h!, Compre los mejores autos en la mejor web";
			
			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}


		//
        
		try {
			$conexion = new PDO("mysql:host=localhost;dbname=spirit_store", 'root', '');
		} catch (PDOExeption $e) {
			echo "Error: " . $e->getMessage();
		}
		$statement = $conexion->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
		$statement->execute(array(':email' => $email));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<div class="alerDiv"><p>ERROR: Este Correo ya esta registrado</p></div>';
		}
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password != $password2) {
			$errores .= '<div class="alerDiv"><p>ERROR: Las contraseñas no son iguales</p></div>';
		}
	}
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO users (id, usuario, password, Telefono, email) VALUES (null, :usuario, :pass, :telefono, :email)');
		$statement->execute(array(':usuario' => $usuario, ':pass' => $password, ':telefono' => $telefono, ':email' => $email));

		header('Location: form-login-control.php');
}
}


require '../views/form-registro-view.php'
?>
