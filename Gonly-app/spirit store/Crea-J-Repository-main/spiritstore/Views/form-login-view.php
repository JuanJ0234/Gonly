<?php
    if (isset($_SESSION['usuario'])) {
        $link = "../controllers/usuario-valid-control.php";
        $userIndex = $_SESSION['UserSesion-User'];
    } else{
        $link = "../controllers/form-registro-control.php";
        $userIndex = "Registrate";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../resource/gonly.png">
    <link rel="stylesheet" href="../css/styleCategory1.css">
    <link rel="stylesheet" href="../css/styleIndex1.css">
    <link rel="stylesheet" href="../css/styleProducts.css">
    <link rel="stylesheet" href="../css/StyleForm1.css">
    <link rel="stylesheet" href="../css/styleForm2.css">
    <link rel="stylesheet" href="../css/StyleErrores.css">
    <link rel="stylesheet" href="../css/styleTraductor.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gonly App</title>
</head>
<body>
    <script src="../JS/decoration-2.js"></script>
    <section>
        <header class="navigator sticky">
              <a href="../views/index-view.php"><img src="../resource/Gonly.png" alt="Logo" id="Logo"></a>
            <nav id="nav-menu">
                <ul class="Links ul-icons-footer">
                    <li><a href="../errors/404.php"><div class="underLine" id="Lista-div" onmouseover="IconsFunctListOver()"><img src="../resource/icons/bolsa-black.png" alt="" class="icons-nav Lista-nav"> </a></div> </li>
                    <li><a href="../errors/404.php"><div class="underLine" id="carrito-div" onmouseover="IconsFunctCarOver()"><img src="../resource/icons/cart-solid-black.png" alt="" class="icons-nav carrito-nav"> </a></div> </li>
                    <li><a href="../views/AllCategories-view.php" ><div class="underLine" id="the-menu-div" onmouseover="IconsFunctMenuOver()"><img src="../resource/icons/menu-alt-left-regular-black.png" alt="" class="icons-nav menu-nav"> Categorias</a></div></li>
                    <li><a href="../controllers/form-cotizacion-control.php" ><div class="underLine" id="dolar-div" onmouseover="IconsFunctDollarOver()"><img src="../resource/icons/dollar-circle-solid-black.png" alt="" class="icons-nav dollar-nav"> Cotizacion</a></div></li>
                </ul>
            </nav>
            <a href="<?php echo $link?>" class="boton"><div class="aboton"><button><img src="../resource/icons/user-solid-24.png" alt="" class="icons-nav"> <?php echo $userIndex ?> </button></div></a>
            <div class="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </header>
    </section>

    <section>
        <div class="main-div">
            <div class="eldiv">
                <div class="form-register">
                    <img src="../resource/Gonly.png" width="300">
                    <h4>Vuelve adonde fuiste feliz ¡Inicia Sesión!</h4><br>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
                        <div class="containers">
                            <label for="mail" id="labelMail">Usuario</label>
                            <input type="text" name="usuario" class="styl" id="mail" onfocus="labelFunc3(this)" onblur="labelFunc3(this)">
                        </div>


                        <div class="containers">
                        <label for="pass" id="labelPass">Contraseña</label>
                            <input type="password" name="password" class="styl" id="pass" onfocus="labelFunc4(this)" onblur="labelFunc4(this)">
                        </div>

                        <button type="button" onclick="login.submit()" class="button">Iniciar Sesion</button>

                    </form>
                    <ul id="listaForm">
                        <li><p><a href="../controllers/form-registro-control.php" id="firstP">No tengo cuenta</a></p></li>
                    </ul>

                </div>
                <div class="alert-load">

                    <?php if(!empty($errores)): ?>
                        <div>
                            <?php echo $errores; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <footer>
            <div class="container-footer">
                <div class="Footer-logo">
                    <img src="../resource/Gonly.png" id="f-logo">
                </div>
                <div class="words">
                    <ul>
                        <li><a href="../views/index-view.php" class="link">Home</a></li>
                        <li><a href="../views/AllCategories-view.php" class="link">Tienda</a></li>
                        <li><a href="../views/terminos-view.php" class="link">Terminos</a></li>
                        <li><a href="form-contacto-control.php" >Contacto</a></li>
                    </ul>
                </div>
                <li id="li-translate"><div id="google_translate_element" class="google languaje"></div></li>
                <div class="icons">
                    <ul class="ul-icons-footer">
                    <li><a href="https://www.facebook.com/Spirit-Store-110075751339824/" target="_blank"><div class="icons-footer"> </div></a></li>
                        <li><a href="https://www.instagram.com/spirit_store_sv/" target="_blank"><div class="icons-footer ig-icon"> </div> </a></li>
                        <li><a href="https://twitter.com/SpiritStoreSV?s=09" target="_blank"><div class="icons-footer twitter-icon"> </div> </a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
    <script type="text/javascript">
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'ca,eu,gl,en,fr,it,pt,de,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
