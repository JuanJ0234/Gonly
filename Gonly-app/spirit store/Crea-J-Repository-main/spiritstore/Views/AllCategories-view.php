<?php session_start();
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
    <script src="../js/decoration-2.js"></script>
    <link rel="stylesheet" href="../css/styleCategory.css">
    <link rel="stylesheet" href="../css/styleIndex1.css">
    <link rel="stylesheet" href="../css/StyleAllCategorie.css">
    <link rel="stylesheet" href="../css/styleTraductor.css">
    <link rel="stylesheet" href="../css/styleProducts.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gonly App</title>
</head>
<body>
    <section>
        <header class="navigator sticky">
              <a href="index-view.php"><img src="../resource/Gonly.png" alt="Logo" id="Logo"></a>
            <nav id="nav-menu">
                <ul class="Links ul-icons-footer">
                    <li><a href="../errors/404.php"><div class="underLine" id="Lista-div" onmouseover="IconsFunctListOver()"><img src="../resource/icons/bolsa-black.png" alt="" class="icons-nav Lista-nav"></a></div></li>
                    <li><a href="../errors/404.php"><div class="underLine" id="carrito-div" onmouseover="IconsFunctCarOver()"><img src="../resource/icons/cart-solid-black.png" alt="" class="icons-nav carrito-nav"></a></div> </li>
                    <li><a href="AllCategories-view.php" ><div class="underLine" id="the-menu-div" onmouseover="IconsFunctMenuOver()"><img src="../resource/icons/menu-alt-left-regular-black.png" alt="" class="icons-nav menu-nav"> Categorias</a></div></li>
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
        <div class="objets-container">
            <div class="div-0">
                <h1>Cumple tus fantasias más rapidas</h1>
            </div>
            <div class="objet-div">
                <div class="big-file">
                    <div class="file">
                        <div class="objet objet1 objet-left temporal">
                            <div class="image-left">
                                <img src="" alt="" class="categories-images">
                            </div>
                            <div class="text-content-left">
                                <h1>Categoria x</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aliquam unde temporibus labore? Reprehenderit alias, autem repellendus quia nostrum, ducimus tempore quas placeat maxime enim eius corrupti architecto molestias pariatur?</p>
                                <a href="categoria-1/category-1-view.php"><button data-hover="SUV" class="boton-all boton-left"><div>ver más</div></button></a>
                            </div>
                        </div>
                        <div class="objet objet2 objet-left">
                            <div class="text-content-left text-content-right">
                                <h1>Deportivos</h1>
                                <p>Vehiculo que circula fuera de las carreteras. Por ende, puede moverse por terrenos con características muy variadas, en cuanto a perfil y adherencia, y cruzar tramos de agua.</p>
                                <a href="categoria-2/category-2-view.php"><button data-hover="Todo Terreno" class="boton-all boton-left"><div>ver más</div></button></a>
                            </div>
                            <div class="image-left image-righ">
                                <img src="../resource/categories/categorias-imagenes/deportivo-image.jpg" alt="" class="categories-images">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="big-file-2">
                    <div class="file">
                        <div class="objet objet1">
                            <div class="objet objet1 objet-left">
                                <div class="image-left">
                                    <img src="" alt="" class="categories-images">
                                </div>
                                <div class="text-content-left">
                                    <h1>Categoria x</h1>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit velit numquam quod reiciendis architecto! Facere nesciunt fuga deleniti eius, minima et dignissimos quas laboriosam ullam quod ipsa veniam mollitia tenetur?</p>
                                    <a href="categoria-3/category-3-view.php"><button data-hover="Sedanes" class="boton-all boton-left"><div>ver más</div></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="objet objet2 objet-left">
                            <div class="text-content-left text-content-right">
                                <h1>Categoria x</h1>
                                <p id="text-compactos">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorem debitis suscipit odio, optio numquam est nobis dolores eligendi nisi pariatur sapiente illo facere earum non, laborum, ut ipsa quae.</p>
                                <a href="categoria-4/category-4-view.php"><button data-hover="Compactos" class="boton-all boton-left"><div>ver más</div></button></a>
                            </div>
                            <div class="image-left image-righ">
                                <img src="" alt="" class="categories-images">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="big-file-3">
                    <div class="file">
                        <div class="objet objet1">
                            <div class="objet objet1 objet-left">
                                <div class="image-left">
                                    <img src="" alt="" class="categories-images">
                                </div>
                                <div class="text-content-left">
                                    <h1>Categoria x</h1>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas tempora aspernatur dignissimos aliquam illo totam necessitatibus, voluptatem provident odio porro quo obcaecati incidunt! Quasi fugit beatae totam nobis culpa quis.</p>
                                    <a href="categoria-5/category-5-view.php"><button data-hover="Deportivos" class="boton-all boton-left"><div>ver más</div></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="objet objet2 objet-left">
                            <div class="text-content-left text-content-right">
                                <h1>Proximamente...</h1>
                                <p>Proximamente...</p>
                            </div>
                            <div class="image-left image-righ">
                                <img src="../resource/categories/categorias-imagenes/interrogacion.jpg" alt="" class="categories-images">
                            </div>
                        </div>
                    </div>
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
                        <li><a href="index-view.php" class="link">Home</a></li>
                        <li><a href="AllCategories-view.php" class="link">Tienda</a></li>
                        <li><a href="terminos-view.php" class="link">Terminos</a></li>
                        <li><a href="../controllers/form-contacto-control.php" >Contacto</a></li>
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
