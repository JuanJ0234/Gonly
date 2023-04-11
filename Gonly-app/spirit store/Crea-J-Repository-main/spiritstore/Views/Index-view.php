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
    <link rel="stylesheet" href="../css/styleIndex1.css">
    <link rel="stylesheet" href="../css/styleTraductor.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gonly App</title>
</head>
<body>
    <section>
        <header class="navigator ">
              <a href="index-view.php"><img src="../resource/Gonly.png" alt="Logo" id="Logo"></a>
            <nav id="nav-menu">
              <ul class="Links ul-icons-footer">
                  <li><a href="../errors/404.php"><div class="underLine" id="Lista-div"><img src="../resource/icons/bolsa-white.png" alt="" class="icons-nav Lista-nav"></a></div> </li>
                  <li><a href="../errors/404.php"><div class="underLine" id="carrito-div"><img src="../resource/icons/cart-solid-white.png" alt="" class="icons-nav carrito-nav"></a></div> </li>
                  <li><a href="AllCategories-view.php" ><div class="underLine" id="the-menu-div"><img src="../resource/icons/menu-alt-left-regular-white.png" alt="" class="icons-nav menu-nav"> Categorias</a></div></li>
                  <li><a href="../controllers/form-cotizacion-control.php" ><div class="underLine" id="dolar-div"><img src="../resource/icons/dollar-circle-solid-white.png" alt="" class="icons-nav dollar-nav"> Cotizacion</a></div></li>
              </ul>
            </nav>
            <a href="<?php echo $link?>" class="boton"><div class="aboton"><button><img src="../resource/icons/user-solid-24.png" alt="" class="icons-nav"> <?php echo $userIndex ?> </button></div></a>
            <div class="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </header>
    </section>

    <section>
        <div class="container-slider">
            <div class="slider" id="slider">
                <div class="slider__section">
                    <img src="../resource/slider/slider-img-1.png" alt="Carrito" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="../resource/slider/slider-img-2.png" alt="Carro lujoso" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="../resource/slider/slider-img-3.png" alt="Carro lujoso" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="../resource/slider/slider-img-4.png" alt="Carro lujoso" class="slider__img">
                </div>
            </div>
            <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
            <div class="slider__btn slider__btn--left"  id="btn-left">&#60;</div>
        </div>
    </section>

    <section>
        <div class="Categories-title cat-linedeco">
            <h1 id="h1-midinfo">Marcas confiables</h1>
        </div>
        <div class="mid-info">
            <div class="information-block information-block-left">
                <h1>Subaru</h1>
                <p>
                    Posee el titulo como la marca mas confiable en estos ultimos años, a pesar de no tener una exelente reputacion
                    en este pais se a convertido en una marca confiable, segura y deportiva en todo el mundo caracterizandose por
                    sus motores boxer.
                </p>
                <img src="../resource/marcas/subaru-logo.png" alt="" class="images-marcas">
            </div>
            <div class="information-block">
                <h1>Toyota</h1>
                <p>
                    El autor del lema ¨No lo use, maltratelo¨ en sus modelos Hilux se a convertido en una marca de alto rendimiento
                    en todo el mundo con el record del sedan con mas ventas y producciones en la historia (Corolla). Lo que un auto
                    Toyota te puede ofrecer esta fuera de tu imaginacion y limites.
                </p>
                <img src="../resource/marcas/toyota-logo.jpg" alt="" class="images-marcas">
            </div>
            <div class="information-block information-block-right">
                <h1>Nissan</h1>
                <p>
                    Rival directo de Toyota y viceversa, Nissan se a ganado el respeto y admiracion en sus automoviles a lo largo de los años
                    modelos como el Sentra an tenido gran impacto en todo el mundo, convirtiendo a Nissan como una marca confiable y que mas
                    modelos deportivos cuente a comparacion de su rival directo.
                </p>
                <img src="../resource/marcas/nissan-logo.jpg" alt="" class="images-marcas">
            </div>
        </div>
        <div class="mid-info mid-info-low">
            <div class="information-block information-block-left">
                <h1>Ford</h1>
                <p>
                    El fabricante estadounidense posee el record del 1mer auto vendido a produccion de masa, desde entonces se mantiene
                    a pie hasta el dia de hoy, Sobrevivio a la crisis del petroleo en los años 70 y aprendio a adaptarse ante las circustancias
                    brinda modelos confiables, lujosos y una super pick-up todo terreno.
                </p>
                <img src="../resource/marcas/ford-logo.jpg" alt="" class="images-marcas">
            </div>
            <div class="information-block">
                <h1>Audi</h1>
                <p>
                    Un gigante aleman y en todo el mundo, Audi a ofrecido modelos de alto rendimiento y no dejando de lado su lujo europeo
                    que lo caracteriza y lo hace unico ante cualquier otra marca de otro continente, Audi ofrece seguridad, lujo, comodidad
                    y deportividad en un solo auto.
                </p>
                <img src="../resource/marcas/audi-logo.jpg" alt="" class="images-marcas">
            </div>
            <div class="information-block information-block-right">
                <h1>BMW</h1>
                <p>
                    Otro gigante de Alemania y con larga trayectoria en su area, BMW te ofrece lujo y deportividad en sus modelos de auto
                    de calle y eso lo hacen seguir vivo en el mercado, claro como todo buen auto de lujo y sobre todo de Europa, su mantenimiento
                    es caro por eso se recomienda pensarlo 2 veces antes de adquirirlo, no toda persona puede mantener un auto de lujo.
                </p>
                <img src="../resource/marcas/bmw-logo.jpg" alt="" class="images-marcas">
            </div>
        </div>
    </section>

    <section>
        <div class="Categories-title">
            <div class="line-deco">
                <h1 id="categorias"><a href="#categorias">Categorias</a></h1>
            </div>
        </div>
        <div class="Categories-content">
            <div class="allcat">
                <div class="first-categori">
                    <div class="Image-left all-images-cat">
                        <div class="contenido-index">
                            <img src="../resource/categories/categorias-imagenes/SUV-image.jpg" alt="">
                        </div>
                        <a href="../views/categoria-1/category-1-view.php">
                            <div class="Image-left-overlay Image-left-overlay-blur">
                                <p class="Image-left-description">
                                Jueguetes
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="content-text category-1 content-right">
                        <h1>Jueguetes</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eligendi commodi et laborum neque est illum velit dolores officiis odit voluptatem eum dolorum sapiente rem a, totam fuga. At, id!</p>
                    </div>
                </div>

                <div class="first-categori second-categori">
                    <div class="content-text category-2 content-left">
                        <h1>Carros</h1>
                        <p>Vehículo que circula fuera de las carreteras. Por ende, puede moverse por terrenos con características muy variadas, en cuanto a perfil y adherencia, y cruzar tramos de agua.</p>
                    </div>
                    <div class="Image-left image-right all-images-cat">
                        <img src="../resource/categories/categorias-imagenes/deportivo-image.jpg" alt="">
                        <a href="../views/categoria-2/category-2-view.php">
                            <div class="Image-left-overlay Image-left-overlay-blur">
                                <p class="Image-left-description">
                                Carros
                                </p>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="first-categori second-categori">
                    <div class="Image-left image-right-2 all-images-cat" >
                        <img src="../resource/categories/categorias-imagenes/sedane-image.jpg" alt="">
                        <a href="../views/categoria-3/category-3-view.php">
                            <div class="Image-left-overlay Image-left-overlay-blur">
                                <p class="Image-left-description">
                                Tecnologia
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="content-text category-2 content-right">
                        <h1>Tecnologia</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam doloremque consectetur repellendus autem. In corporis molestias alias eaque, exercitationem aspernatur, eius tempore, mollitia animi corrupti blanditiis. Eaque, quam facere!</p>
                    </div>
                </div>



                <div class="first-categori second-categori">
                    <div class="content-text category-2 content-left">
                        <h1>Deportes</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores porro dignissimos suscipit facere pariatur distinctio, laudantium nobis ipsum! In assumenda aut adipisci delectus cumque dolore commodi deserunt? Sint, commodi incidunt?</p>
                    </div>
                    <div class="Image-left image-right all-images-cat">
                        <img src="../resource/categories/categorias-imagenes/compactos-image.jpg" alt="">
                        <a href="../views/categoria-4/category-4-view.php">
                            <div class="Image-left-overlay Image-left-overlay-blur">
                                <p class="Image-left-description">
                                Deportes
                                </p>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="first-categori second-categori">
                    <div class="Image-left image-right-2 all-images-cat">
                        <img src="../resource/categories/categorias-imagenes/deportivo-image.jpg" alt="">
                        <a href="../views/categoria-5/category-5-view.php">
                            <div class="Image-left-overlay Image-left-overlay-blur">
                                <p class="Image-left-description">
                                Ropa y calzado
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="content-text category-2 content-right">
                        <h1>Ropa y calzado</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo libero laborum veritatis, nisi enim reprehenderit necessitatibus. Praesentium ut dicta omnis temporibus delectus doloremque consectetur nesciunt inventore. Odit eaque corrupti laudantium.</p>
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
    <script src="../JS/decorationScript-1.js"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'ca,eu,gl,en,fr,it,pt,de,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>

